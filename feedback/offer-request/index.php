<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказать Тест-Драйв");
?>
<?$APPLICATION->IncludeComponent(
    "prime:feedback.offer-request",
    "",
    Array(

    )
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>