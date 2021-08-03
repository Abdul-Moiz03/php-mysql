<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<?php
include('dbconnection.php')
?>
<style>
    button{
        margin-left: 1in;
    }
    input {
        text-align: center;
        margin-left: 1in;
    }
    #N2{
        margin-left: 1ex;
    }
</style>
<body>
   <form action ="insert.php" method="POST" style="border: 05em; background-color: bisque;">
<fieldset>
    <legend> Information Collection</legend>
    <label for="name">Name </label>
    <input class="input" type="text" name="namee" id="N1" placeholder="Enter Your Name :" required> <br><br>
    <label for="name">Father Name </label>
    <input   type="text" name="FatherNamee" id="N2" placeholder="Enter Your Father Name :" required> <br><br>
    <label for="name">Mobile Number </label>
    <input class="input" type="tel" name="MobileNumberr" id="N1" placeholder="Enter Your Mobile Number :" required> <br><br>
    <label for="name">University </label>
    <input class="input" type="text" name="Universityy" id="N1" placeholder="Enter Your University :" required> <br><br>
    <button type="submit" name="submintt" >SUBMINT</button>
</fieldset>
   </form> 
</body>
</html>