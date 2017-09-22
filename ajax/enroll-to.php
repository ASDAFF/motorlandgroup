<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$name = trim(strip_tags($_POST["name"]));
$phone = trim(strip_tags($_POST["phone"]));
$mail = trim(strip_tags($_POST["mail"]));
$where = trim(strip_tags($_POST["where"]));
$model = trim(strip_tags($_POST["model"]));
$year = trim(strip_tags($_POST["year"]));

$el = new CIBlockElement;
$idNewEnrollTO = $el->Add([
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_ID"      => 20,
    "PROPERTY_VALUES"=> [
        "NAME"       => $name,
        "PHONE"      => $phone,
        "EMAIL"      => $mail,
        "TIME"       => $where,
        "MODEL"      => $model,
        "YEAR"       => $year,
    ],
    "NAME"           => "Заявка на ТО от {$name}",
    "ACTIVE"         => "Y"
]);

CEvent::Send(
    "ENROLL_TO",
    's1',
    [
        "NAME"       => $name,
        "PHONE"      => $phone,
        "EMAIL"      => $mail,
        "TIME"       => $where,
        "MODEL"      => $model,
        "YEAR"       => $year,
    ]
);

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
