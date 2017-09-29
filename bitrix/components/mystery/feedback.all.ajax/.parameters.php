<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("iblock");

$arTypesEx = CIBlockParameters::GetIBlockTypes(Array("-"=>" "));

$arIBlocks=Array();
$db_iblock = CIBlock::GetList(
    Array("SORT"=>"ASC"),
    Array(
        "SITE_ID"=>$_REQUEST["site"],
        "TYPE" => ($arCurrentValues["IBLOCK_TYPE"] != "-"?$arCurrentValues["IBLOCK_TYPE"]:"")
    )
);
while($arRes = $db_iblock->Fetch())
    $arIBlocks[$arRes["ID"]] = $arRes["NAME"];

$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = Array("TYPE_ID" => "FEEDBACK_AJAX_FORM", "ACTIVE" => "Y");
if($site !== false)
	$arFilter["LID"] = $site;

$arEvent = Array();
$dbType = CEventMessage::GetList($by="ID", $order="DESC", $arFilter);
while($arType = $dbType->GetNext())
	$arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];

$arProp = array();
$pr = CIBlock::GetProperties(
    ($arCurrentValues["IBLOCK_ID"]>0? $arCurrentValues["IBLOCK_ID"]:0),
    array(
        "SORT"=>"ASC"
    ),
    array(
        "ACTIVE"=>"Y",
    )
);
while ($arPr = $pr->GetNext())
{
    $arProp[$arPr['CODE']] = $arPr['NAME'];
}

$arComponentParameters = array(
	"PARAMETERS" => array(
        "AJAX_MODE" => array(),
        "IBLOCK_TYPE" => Array(
            "PARENT" => "BASE",
            "NAME" => 'Тип информационного блока (используется только для проверки)',
            "TYPE" => "LIST",
            "VALUES" => $arTypesEx,
            "DEFAULT" => "feedback",
            "REFRESH" => "Y",
        ),
        "IBLOCK_ID" => Array(
            "PARENT" => "BASE",
            "NAME" => 'Код информационного блока (сохранение заполненных форм)',
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
            "DEFAULT" => '',
            "ADDITIONAL_VALUES" => "Y",
            "REFRESH" => "Y",
        ),
        "ACTIVED" => Array(
            "PARENT" => "BASE",
            "NAME" => 'Активность новых элементов',
            "TYPE" => "LIST",
            "VALUES" => array('Y'=>"да", 'N'=>'нет'),
            "DEFAULT" => 'Y',
        ),
        "ID_POPUP" => Array(
            "NAME" => 'ID всплывающего окна',
            "TYPE" => "STRING",
            "DEFAULT" => 'feedback',
            "PARENT" => "BASE",
        ),
		"DESC_TEXT" => Array(
			"NAME" => 'Краткое описание формы',
			"TYPE" => "STRING",
			"DEFAULT" => 'Все поля отмеченные *, обязательны для заполнения',
			"PARENT" => "BASE",
		),
		"OK_TEXT" => Array(
			"NAME" => 'Сообщение, выводимое пользователю после отправки',
			"TYPE" => "STRING",
			"DEFAULT" => 'Спасибо, ваше сообщение принято.',
			"PARENT" => "BASE",
		),
		"EMAIL_TO" => Array(
			"NAME" => 'E-mail, на который будет отправлено письмо',
			"TYPE" => "STRING",
			"DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")),
			"PARENT" => "BASE",
		),
        "FIELDS" => array(
            "PARENT" => "BASE",
            "NAME" => 'Список полей формы',
            "TYPE" => "LIST",
            "MULTIPLE" => "Y",
            "VALUES" => $arProp,
            "DEFAULT"=>"",
            "REFRESH" => "Y",
        ),
		"REQUIRED_FIELDS" => Array(
            "PARENT" => "BASE",
			"NAME" => 'Обязательные поля для заполнения',
			"TYPE"=>"LIST",
			"MULTIPLE"=>"Y",
			"VALUES" => $arProp,
			"DEFAULT"=>"",
            "REFRESH" => "Y",
		),

		"EVENT_MESSAGE_ID" => Array(
			"NAME" => 'Почтовые шаблоны для отправки письма',
			"TYPE"=>"LIST",
			"VALUES" => $arEvent,
			"DEFAULT"=>"",
			"MULTIPLE"=>"Y",
			"COLS"=>25,
			"PARENT" => "BASE",
		),
        "USE_CAPTCHA" => Array(
            "NAME" => 'Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей',
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "BASE",
        ),
        "CAPTCHA_WIDTH" => Array(
            "NAME" => 'Ширина картинки CAPTCHA (px)',
            "TYPE" => "STRING",
            "DEFAULT" => "180",
            "PARENT" => "BASE",
        ),
        "CAPTCHA_HEIGHT" => Array(
            "NAME" => 'Высота картинки CAPTCHA (px)',
            "TYPE" => "STRING",
            "DEFAULT" => "40",
            "PARENT" => "BASE",
        ),
	)
);


?>