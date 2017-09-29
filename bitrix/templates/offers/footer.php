<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.resizeend.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/compressed.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.smooth-scroll.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/w-modal.js"></script>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/scripts.php"
    )
);?>

</body>
</html>