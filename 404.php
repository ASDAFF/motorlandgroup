<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
?>
<style>
.blocks-404{
	display: block;
	width: 100%;
	margin: 150px auto;
	text-align: center;
}

.block-404,.img-404,.text-404{
	display: inline-block;
}

.img-404 img{
	max-width: 350px;
}

.text-404 h1{
	font-size: 70px;
}

.text-404 p{
	font-size: 14px;
	margin: 15px 20px;
}

.text-404{
	vertical-align: middle;
}



</style>


<div class="blocks-404">
	<div class="block-404">
		<div class="img-404">
			<img src="/img/404.png">
		</div>
		<div class="text-404">
			<br>
			<br>
			<br>
			<h1>Страница<br>не найдена</h1>
			<p>Воспользуйтесь меню навигации выше</p>
		</div>
	</div>
</div>

<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>