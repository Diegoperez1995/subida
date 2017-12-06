<?php

$operacion = $_POST['lista'];

if(isset($_POST['a'])  && !empty($_POST['a']) &&

isset($_POST['b'])  && !empty($_POST['b']))
{
echo "el resultado es:";


switch($operacion)
{
case "sumar":
echo $_POST['a'] + $_POST['b'];
break;

case restar:
echo $_POST['a'] - $_POST['b'];
break;

case multiplicar:
echo $_POST['a'] * $_POST['b'];
break;

case dividir:
echo $_POST['a'] / $_POST['b'];
break;


}
}else{
  echo "ingrese ambos campos";}
 ?>
