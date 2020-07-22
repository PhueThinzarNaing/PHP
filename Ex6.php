
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Last char added at the front and back</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="number" name="number">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST["number"];
    $f=1;

    for($j=1;$j<=$num;$j++){
        $f*=$j;
    }
    echo "factorial number is   " . "$f";


}
 ?>

</body>
</html>
