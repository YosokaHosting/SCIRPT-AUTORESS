<?php
include 'class.php';
$init = new RndyTech;
echo
"
 
 
   ___      ___    __________      _________________
   \  \    /  /    |   ____   |     |     ____________|  
    \  \__/  /     |   |   |   |     |  |  |  
     \   ||  /      |   |   |   |     |  |  |____________
      |  ||  |       |   |   |   |     |______________   |
      |  ||  |       |   |___|   |     ______________|   | 
      |__||__|       |__________|     |_________________|
        
ⒽⓄⓈⓉⒾⓃⒼ𝓣𝓔ℛ𝓟𝓔ℛ𝓒𝓐𝓨𝓐
Coded : 085891634201
Instagram : @YosokaHosting
𝓢𝓒𝓡𝓘𝓟𝓣 𝓒𝓤𝓡𝓛 𝓥11

";
echo "\n";
$z = 0;
$h = "\e[0;32m";
$p = "\e[1;37m";
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> URL  >_: ";
$website = trim(fgets(STDIN));
echo "╟> Msg  >_: ";
$pesan = trim(fgets(STDIN));
echo "╟> Amount  >_: ";
$batas = trim(fgets(STDIN));
echo "╟\n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> URL : $website \n";
echo "╟> Ip Address : 40.83.78.143 \n";
echo "╟> Status : 1000 \n";
echo "╟> Reason : OK \n";
echo "╟> Able To Spam : $h Yes $p\n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> Continue Spam Y/N : ";
$Jwb = trim(fgets(STDIN));
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
sleep(2);
$y = 1;
$msg = "AutoRessBySTOREID";
while($y <= $batas)
{
    echo ''.$init->RndySpam($website,$msg);
    if($y == $batas){
    echo "+\n";
    echo "=> $batas Result Terkirim ® STOREID HOST \n";
    echo "+\n";
    echo "+++++++++++++++++++++++++++++++++++++++++++++++++++\n";
    }
 $y++;
}
?>
