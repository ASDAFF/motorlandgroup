<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Автомобили с пробегом (trade-in)");
?>
<style>
    .nav.force-sticky-nav {
        background-color: #222 !important;
    }
</style>

<div class="otodvigatel">

</div>

<?
$APPLICATION->IncludeComponent(
    "prime:trade-in.dispatch-form",
    "",
    [],
    false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
