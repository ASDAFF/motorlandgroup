<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$user_name = trim(strip_tags($_POST["surname"]));
$user_phone = trim(strip_tags($_POST["phone"]));
$modelName = $_POST["modelid"];

$arEventFields = array(
    "NAME" => $user_name,
    "PHONE" => $user_phone,
    "MODEL" => implode(",", $modelName)
);
CEvent::Send("OFFER_REQUEST", SITE_ID, $arEventFields);

CModule::IncludeModule("iblock");
$el = new CIBlockElement;
$PROP = array();

$PROP["PHONE"] = $user_phone;
$PROP["MODEL"] = $modelName;

$arLoadProductArray = Array(
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_ID"      => 18,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => $user_name,
    "ACTIVE"         => "N"
);
$el->Add($arLoadProductArray);
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/popup-offer.php"
    )
);?>

