<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$el = new CIBlockElement;

$name = trim(strip_tags($_POST["name"]));
$phone = trim(strip_tags($_POST["phone"]));
$mail = trim(strip_tags($_POST["mail"]));
$question = trim(strip_tags($_POST["question"]));

$idNewQuestion = $el->Add([
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_ID"      => 19,
    "PROPERTY_VALUES"=> [
        "NAME"       => $name,
        "PHONE"      => $phone,
        "EMAIL"      => $mail,
        "MESSAGE"    => $question,
    ],
    "NAME"           => "Вопрос от {$name}",
    "ACTIVE"         => "Y"
]);

CEvent::Send(
    "ASK_QUESTION",
    's1',
    [
        "NAME"       => $name,
        "PHONE"      => $phone,
        "EMAIL"      => $mail,
        "MESSAGE"    => $question,
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
