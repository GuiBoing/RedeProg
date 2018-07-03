<?php

//echo "<h1></h1>";

 $sttrinca = $_GET['sttrinca'];
 $ndtrinca = $_GET['ndtrinca'];
 $rdtrinca = $_GET['rdtrinca'];
 $thtrinca = $_GET['thtrinca'];
 $masc    = $_GET['masc'];

echo "<h1>Ip digitado foi: ";
 echo $sttrinca.".";

 echo $ndtrinca.".";

 echo $rdtrinca.".";

 echo $thtrinca."/";

 echo $masc;

 echo "</h1>";


echo "<h1>mascara integral</h1>";
echo "<h1>total de endereços</h1>";
$sobramasc= 32-$masc;
$endereco=pow(2,$sobramasc);
echo $endereco;



echo "<h1>Rede da conexão</h1>";
echo "0";




echo "<h1>broadcast da conexão</h1>";
echo $endereco;



echo "<h1>total de possiveis host(s)</h1>";
$usehost=$endereco - 2;
echo $usehost;





echo "<h1>total sub redes</h1>";
$totalrange = 256/$endereco;
echo $totalrange;

echo "<h1>Esta localizado na Sub rede:</h1>";

//verifica a ultima trinca pra ver onde dos ranges q ele tá 
$sublocal = $thtrinca;
echo $sublocal;


//classifição
echo "<h1>classifição</h1>";
if(($sttrinca == '10')
 or ($sttrinca=='127')
  or ($sttrinca=='172' and $ndtrinca>='16' and $ndtrinca<='32')
  or ($sttrinca == '192' and $ndtrinca == '168')
){
  echo "<h4>reservado e ";
}else{
  echo "<h4>Liberado para uso e ";
};


if( $sttrinca>='0' and $sttrinca<='127'
and $ndtrinca>='0' and $ndtrinca<='255'
and $thtrinca>='0' and $thtrinca<='255'
and $rdtrinca>='0' and $rdtrinca<='255'
){
   echo "da classe A </h4>";
 }elseif( $sttrinca>='128' and $sttrinca<='191'
      and $ndtrinca>='0' and $ndtrinca<='255'
      and $thtrinca>='0' and $thtrinca<='255'
      and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo "da classe B </h4>";
 }elseif ( $sttrinca>='192' and $sttrinca<='223'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo "da classe C </h4>";
 }elseif ( $sttrinca>='224' and $sttrinca<='239'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo "da classe D </h4>";
 }elseif ( $sttrinca>='240' and $sttrinca<='255'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo "classe E";
 }else{
   echo "numero invalido";
 }
