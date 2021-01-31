<pre>
<?php 

//var_dump($_POST);

$str;

$str = "Спасибо".$_POST["Login"]."за регистрацию на нашем сайте на ваш электронный ящик".$_POST["Email"]."";
//echo $_POST["Login"];
//print_r($_SERVER);

//echo date("Y-m-d H:i:s",0);
echo $str;

 ?></pre>