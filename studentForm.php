<!DOCTYPE html>
<html>
    <head><title>Student Registration Form</title>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="name"> <br><br>
    E-mail: <input type="email" name="mail"> <br><br>
    Phone: <input type="phone" name="phone"> <br><br>
    
    Township:
    <select name="township">
            <option value="">Select...</option>
            <option value="dawei">Dawei</option>
            <option value="yephyu">Yephyu</option>
            <option value="thayetchaung">ThayetChaung</option>
    </select> <br><br>

    Grade:
    <input type="radio" name="grade" value="fourth year">Fourth year
    <input type="radio" name="grade" value="fifth year">Fifth year
    <br><br>

    Subject:
    <input type="checkbox" name="sub[]" value="501">501
    <input type="checkbox" name="sub[]" value="502">502
    <input type="checkbox" name="sub[]" value="503">503
    <input type="checkbox" name="sub[]" value="501">501
    <br><br>
    <input type="submit" name="submit" value="Submit"> 
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $township=$_POST['township'];
            $grade=$_POST['grade'];
            $subject=$_POST['sub'];

            if (empty($name)) {
              echo "Name is empty";
            } else {
                            
              echo "Name : ".$name."<br>";
            }
            
            if (empty($mail)) {
                echo "E-mail is empty";
              } else {
                echo "E-mail : ".$mail."<br>";
              }
            
            if (empty($phone)) {
                echo "Phone is empty";
            } else {
                echo "Phone No : ".$phone."<br>";
            }

            if (empty($township)) {
                echo "Township is empty";
            } else {
                echo "Township : ".$township."<br>";
            }

            if (empty($grade)) {
                echo "Grade is empty";
            } else {
                echo "Grade : ".$grade."<br>";
            }

            if(empty($subject)) 
                {
                    echo("You didn't select any subjects.");
                } 
                else 
                {   
                    $len=count($subject);
                    echo("You selected $len subjects: ");
                    foreach($subject as $val)
                      echo $val ." ";             
                    
            }

          }
    ?>

</body>
</html>