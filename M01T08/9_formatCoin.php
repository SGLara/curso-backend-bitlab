<?php
function formatCoin(float $character){
    setlocale(LC_MONETARY,"es_ES");
    $character = money_format("%.2i",$character);
    echo $character."<hr>";
}
formatCoin("120.99");
formatCoin("1.99");
formatCoin("2.00");
formatCoin("8");
formatCoin("10");
?>