
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Multiplication Table</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="number" name="num">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
echo "<br>";
$num= $_POST["num"];
echo "$num";
echo "<br>";
for($i=1;$i<=12;$i++){
    echo $num . "*" .$i ."=" . $num*$i;
    echo "<br>";
}

}
 ?>

</body>
</html>
