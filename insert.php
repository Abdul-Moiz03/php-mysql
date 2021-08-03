<?php
include('dbconnection.php');

if(isset($_POST['submintt'])){
    $name1=$_POST['namee'];
    $Fathername1=$_POST['FatherNamee'];
    $number1=$_POST['MobileNumberr'];
    $university1=$_POST['Universityy'];
    $sql="INSERT INTO info(Namee,fathername,tel,university)VALUES('$name1','$Fathername1','$number1','$university1')";
   if ($conn->query($sql)===true) {
    //    echo"data insert sucessfuly";
    //    echo '<br>';
    //    echo "<a href='index.php'>Click here to insert more records </a>'";
       echo "<script>alert('Data Enterd Sucessfully ');
       window.location.href='index.php';
       </script>";
   }else {
       echo "datanot enters";
   }
};
?>