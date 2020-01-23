<?php
function show_desc($string){
  echo"zaioahaoighazioghazioghazoi";
}
function get_idprod($string){
  return 1;
}
$category=$_GET["category"];
$img_name='biscuitRaisin.jpg'; //faire une fonction get en fct de category
$catcontrol=array ('Boissons', 'Biscuits', 'Fruits secs');
$prix=array(4,5, 5,2);
foreach ($catcontrol as $value) {
    if($value==$category){
      $products=array ('Thé vert','Thé noir','Café',"Jus d'orange"); //mettre des id
    }
}
function getPrixNb(){
  echo "5 €";
}
$product_name=$_GET['product'];
 ?>
