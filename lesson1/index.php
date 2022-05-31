<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Lection1");
?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "sample1",
    Array(
        "IBLOCK_TYPE" => "contacts",
        "IBLOCK_ID" => "6",
        "PROPERTY_CODE" => Array("FULLNAME","PHONE","ADDRESS"),
    ),
)
?>


<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>
