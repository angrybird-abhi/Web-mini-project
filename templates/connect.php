<?php
$link = mysqli_connect("localhost", "root", "", "bakery");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']); 
$query = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
if(mysqli_query($link, $query)){
    echo "Feedback received.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
};
?>