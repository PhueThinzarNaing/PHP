
<!DOCTYPE HTML>  
<html>
<head>
<style>

</style>
</head>
<body>  


<h2>first 3 characters of a given string and return the string with the 3 characters added at both the front and back</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
<input type="submit">
  </form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name= $_POST["name"];
echo "Enter Text  :    "."$name";
echo "<br>";

if(strlen($name)>=3){
    $res=substr($name,0,3);
  
    echo $res.$name.$res;
    echo "<br>";
}else 
   echo $name;

}
 ?>

</body>
</html>
