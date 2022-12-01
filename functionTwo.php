<?php
$ad='ayberk';
function nameSurname($soyad){
    //global $ad;
    return $GLOBALS['ad'].' '.$soyad;
}
echo nameSurname('Çatal')."<br>";

$yazi="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, ipsa.";
echo substr($yazi, 0, 20).'...';
function kısalt($str,$limit=10){
    $karaktersayisi=strlen($str);
    if($karaktersayisi > $limit){
        $str=substr($str, 0, $limit).'...';
    }
    return $str;
}
echo "<br>".kısalt($yazi, 5);
?>