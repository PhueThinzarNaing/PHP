
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Uppercase String</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
echo "<br>";
$name= $_POST["name"];
echo "Current String is".$name;
echo "<br>";
$res=" ";

$result="";
$str=str_split($name);
for($z=0;$z<count($str);$z++)
{
    $ch=ord($str[$z]);
    if($str[$z] >= 'a' and $str[$z] <='z'){
        $result.=chr($ch-32);

    }else{
        $result.=$str[$z];
    }
}
echo "New string is uppercase :" . $result;


}
 ?>

</body>
</html>
