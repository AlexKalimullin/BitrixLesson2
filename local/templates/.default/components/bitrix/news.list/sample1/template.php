<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true){
    die();
}

?>
<div class="news-list">
    <?php foreach ($arResult['ITEMS'] as $arItem){ ?>
        <p class="news-item" id="">
            ФИО клиента: <?=$arItem["PROPERTIES"]["FULLNAME"]["VALUE"]?>
        </p>
        <p class="news-item" id="">
            Телефон: <?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>
        </p>
        <p class="news-item" id="">
            Адрес: <?=$arItem["PROPERTIES"]["ADDRESS"]["VALUE"]?>
        </p>
    <?php } ?>
</div>




