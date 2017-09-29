<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

$isDebugMode = ($arParams['M_DEBUG'] == 'Y');

CModule::IncludeModule('iblock');

if ($arParams['IBLOCK_ID'])
{
    $pr = CIBlock::GetProperties(
        $arParams['IBLOCK_ID'],
        array(
             "SORT"=>"ASC"
        ),
        array(
             "ACTIVE"=>"Y",
        )
    );
    $arProp = array();
    $arPropType = array();
    while ($arPr = $pr->GetNext())
    {
        if (in_array($arPr['CODE'],$arParams['FIELDS']))
        {
            $arProp[$arPr['CODE']] = $arPr['NAME'];
            $arPropType[$arPr['CODE']] = $arPr['PROPERTY_TYPE'].$arPr['USER_TYPE'];

            if ($arPr['PROPERTY_TYPE'].$arPr['USER_TYPE'] == 'EEList')
            {
                $in = CIblockElement::GetList(
                    array(
                         "SORT" => "ASC",
                         "NAME" => "ASC",
                    ),
                    array(
                         "IBLOCK_ID" => $arPr['LINK_IBLOCK_ID'],
                         "ACTIVE" => "Y"
                    ),
                    false,
                    false,
                    array(
                         "IBLOCK_ID",
                         "IBLOCK_SECTION_ID",
                         "ID",
                         "NAME",
                    )
                );
                $arEnum = array();
                while ($arE = $in->GetNextElement())
                {
                    $arEl = $arE->GetFields();
                    $arEl['PROPERTIES'] = $arE->GetProperties();
                    $arEl['SECTION'] = GetIblockSection($arEl['IBLOCK_SECTION_ID']);
                    $arEnum[] = $arEl;
                }
                $arParams['PROPERTY_LIST_ENUM'][$arPr['CODE']] = $arEnum;
            }
            if ($arPr['PROPERTY_TYPE'].$arPr['USER_TYPE'] == 'L')
            {
                $en = CIBlockPropertyEnum::GetList(
                    array(
                         "SORT" => 'ASC'
                    ),
                    array(
                         "IBLOCK_ID" => $arParams['IBLOCK_ID'],
                         "CODE" => $arPr['CODE'],
                    )
                );
                $arEnum = array();
                while ($arE = $en->GetNext())
                {
                    $arEnum[] = array(
                        "ID" => $arE['ID'],
                        "VALUE" => $arE['VALUE'],
                    );
                }
                $arParams['PROPERTY_LIST_ENUM'][$arPr['CODE']] = $arEnum;
            }
        }
    }
    $arParams['FIELDS_NAME'] = $arProp;
    $arParams['FIELDS_TYPE'] = $arPropType;
}

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
    $arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
    $arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
    $arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
    $arResult["ERROR_MESSAGE"] = array();
    if(check_bitrix_sessid())
    {
        $arFs = array();
        foreach ($arParams['FIELDS'] as $key)
        {
            $_POST[$key] = str_replace($arParams['FIELDS_NAME'][$key].'*','',$_POST[$key]);
            $_POST[$key] = str_replace($arParams['FIELDS_NAME'][$key],'',$_POST[$key]);
            $arFs[$key] = $_POST[$key];
        }
        foreach ($arParams['REQUIRED_FIELDS'] as $key)
        {
            if ($arFs[$key] == '' && $key != 'EMAIL_TO')
            {
                $arResult["ERROR_MESSAGE"][] = 'Укажите "'.$arParams['FIELDS_NAME'][$key].'".';
            }
            if ($key == 'EMAIL' && !check_email($arFs[$key]))
            {
                $arResult["ERROR_MESSAGE"][] = 'Неверно задан "'.$arParams['FIELDS_NAME'][$key].'".';
            }
        }
        foreach ($arParams['FIELDS'] as $key)
        {
            $arParams['FORM_PARAMS'][$key] = htmlspecialcharsEx($arFs[$key]);
        }

        if($arParams["USE_CAPTCHA"] == "Y")
        {
            include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
            $captcha_code = $_POST["captcha_sid"];
            $captcha_word = $_POST["captcha_word"];
            $cpt = new CCaptcha();
            $captchaPass = COption::GetOptionString("main", "captcha_password", "");

            if ($_SESSION[$captcha_code] != $captcha_word || strlen($captcha_word) == 0)
            {

                if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
                {
                    if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
                    {
                        $arResult["ERROR_MESSAGE"][] = 'Неверно указан код защиты от автоматических сообщений.';
                    }
                    else
                    {
                        $_SESSION[$captcha_code] = $captcha_word;
                    }
                }
                else
                    $arResult["ERROR_MESSAGE"][] = 'Не указан код защиты от автоматических сообщений.';

            }
        }

        if(empty($arResult["ERROR_MESSAGE"]))
        {
            $arProperty = array();
            foreach ($arParams['FIELDS'] as $key)
            {
                $value = $arParams['FIELDS_TYPE'][$key];
                if ($value == 'SHTML')
                {
                    $arProperty[$key] = array(
                        "VALUE"=>array(
                            "TEXT"=>$arFs[$key],
                            "TYPE"=>"text"
                        )
                    );
                }
                elseif ($value == 'F')
                {
                    $arProperty[$key] = $_FILES[$key];
                }
                else
                {
                    $arProperty[$key] = $arFs[$key];
                }
            }

            // добавим элемент в инфоблок

            $el = new CIblockElement;
            $arFieldsElem = array(
                "IBLOCK_ID"=>$arParams['IBLOCK_ID'],
                "ACTIVE"=>"N",
                "DATE_ACTIVE_FROM"=>ConvertTimeStamp(false,'FULL'),
                "NAME"=>'Новое сообщение',
                "PROPERTY_VALUES"=>$arProperty
            );

            if ($arParams['ACTIVED'] == 'Y')
                $arFieldsElem['ACTIVE'] = "Y";

            $res = $el->Add($arFieldsElem);
            if (!$res)
                $arResult["ERROR_MESSAGE"][] = $el->LAST_ERROR;
            else
                $arResult['ELEMENT_ID'] = $res;

            $arFields = $arFs;

            if (!$arFields['EMAIL_TO'])
                $arFields['EMAIL_TO'] = $arParams["EMAIL_TO"];

            foreach ($arParams['FIELDS_TYPE'] as $key=>$type)
            {
                if ($type == 'L')
                {
                    $arEnum = CIBlockPropertyEnum::GetByID($arFields[$key]);
                    $arFields[$key] = $arEnum['VALUE'];
                }
                elseif ($type == 'EEList')
                {
                    $in = CIblockElement::GetList(
                        array(
                             "SORT" => "ASC",
                             "NAME" => "ASC",
                        ),
                        array(
                             "IBLOCK_ID" => $arPr['LINK_IBLOCK_ID'],
                             "ACTIVE" => "Y",
                             "ID" => $arFields[$key]
                        ),
                        false,
                        false,
                        array(
                             "IBLOCK_ID",
                             "IBLOCK_SECTION_ID",
                             "ID",
                             "NAME",
                        )
                    );
                    $arEnum = $in->GetNext();
                    $arFields[$key] = $arEnum['NAME'];
                }
            }

            $arFields['TEXT_ALL'] = array();

            // получим все свойства и выберем все непустые.
            $el = CIblockElement::GetList(
                array(),
                array(
                     "ID"=>$arResult['ELEMENT_ID']
                )
            );
            $arItem = $el->GetNextElement();

            $arProp = $arItem->GetProperties();
            foreach ($arProp as $arPr)
            {
                if ($arPr['VALUE'])
                {
                    if(is_array($arPr['VALUE']))
                        $arFields['TEXT_ALL'][] = '<b>'.$arPr['NAME'].':</b> '.$arPr['VALUE']['TEXT'];
                    else
                        $arFields['TEXT_ALL'][] = '<b>'.$arPr['NAME'].':</b> '.$arPr['VALUE'];
                }
            }
            $arFields['TEXT_ALL'] = implode('<br />',$arFields['TEXT_ALL']);

            if(!empty($arParams["EVENT_MESSAGE_ID"]))
            {
                foreach($arParams["EVENT_MESSAGE_ID"] as $v)
                    if(IntVal($v) > 0)
                        CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", IntVal($v));
            }
            else
                CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);

            CEvent::CheckEvents();
            unset($arParams['FORM_PARAMS']);

            $arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
        }
    }
    else
        $arResult["ERROR_MESSAGE"][] = 'Ваша сессия истекла. Отправьте сообщение повторно.';
}

if(empty($arResult["ERROR_MESSAGE"]))
{
    if($USER->IsAuthorized())
    {
        $arParams['FORM_PARAMS']["NAME"] = htmlspecialcharsEx($USER->GetFormattedName(false));
        $arParams['FORM_PARAMS']["EMAIL"] = htmlspecialcharsEx($USER->GetEmail());
    }
}

if($arParams["USE_CAPTCHA"] == "Y")
{
    @include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");

    $cpt = new CCaptcha();
    $cpt->SetImageSize($arParams['CAPTCHA_WIDTH'],$arParams['CAPTCHA_HEIGHT']);
    $cpt->SetCaptchaCode();
    $code = $cpt->GetSID();
    $arResult["capCode"] =  $code;
}

$this->IncludeComponentTemplate();
?>