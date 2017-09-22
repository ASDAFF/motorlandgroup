<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$imagesForNewElement = [];
foreach($_FILES['files']['name'] as $n=>$val) {
    $newImg = [
        'name'      => $_FILES['files']['name']      [$n],
        'type'      => $_FILES['files']['type']      [$n],
        'tmp_name'  => $_FILES['files']['tmp_name']  [$n],
        'error'     => $_FILES['files']['error']     [$n],
        'size'      => $_FILES['files']['size']      [$n],
    ];
    $imagesForNewElement[] = $newImg;
}

$el = new CIBlockElement;
$idNewClaim = $el->Add([
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_ID"      => 16,
    "PROPERTY_VALUES"=> [
        "NAME"      => strip_tags($_POST["name"]),
        "PHONE"     => strip_tags($_POST["phone"]),
        "MODEL"     => strip_tags($_POST["model"]),
        "YEAR"      => strip_tags($_POST["year"]),
        "PHOTOS"    => $imagesForNewElement,
    ],
    "NAME"           => "Заявка от {$_POST["name"]}",
    "ACTIVE"         => "Y"
]);

//getting new order data
$newOdrer = CIBlockElement::GetList(
    Array(),
    Array(
        'IBLOCK_CODE' => 'trade-in-claim',
        'ID' => $idNewClaim
    ),
    false,
    false,
    Array()
)->GetNextElement();
$imagesIDs = $newOdrer->getProperty('PHOTOS')['VALUE'];
$imagesHTML = '';

foreach($imagesIDs as $imageID) {
    $url = 'http://'.$_SERVER['HTTP_HOST'].CFile::ResizeImageGet($imageID,       ["width" => '800', "height" => '400'], BX_RESIZE_IMAGE_EXACT, true)["src"];
    $imagesHTML .= "<img src='$url'><br>";
}

CEvent::Send(
    "CLAIM_TRADE_IN",
    SITE_ID,
    [
        "NAME"      => strip_tags($_POST["name"]),
        "PHONE"     => strip_tags($_POST["phone"]),
        "MODEL"     => strip_tags($_POST["model"]),
        "YEAR"      => strip_tags($_POST["year"]),
        "PHOTOS"    => $imagesHTML,
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

