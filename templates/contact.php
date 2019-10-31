<!DOCTYPE html>
<html>
<head>
<title>Contact Us </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../static/css/contact.css" rel="stylesheet" type="text/css">

</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="connect.php">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name">

    <label for="email">Email ID</label>
    <input type="email" id="email" name="email" placeholder="Email">

    <label for="lname">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">

    <label for="subject">Feedback</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
	
  </form>
</div>

</body>
</html>
