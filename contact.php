<html>
<body>

Welcome 
<?php 
$Fname=$_POST["firstname"];
$Lname=$_POST["lastname"];
$email=$_POST["email"];
echo $Fname . "<br>";
echo $Lname . "<br>";
echo "Your email address is:" . "<br>";
echo $email; 
?>

</body>
</html>