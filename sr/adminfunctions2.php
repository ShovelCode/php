<?php
 include('session.php');
?>

<html>
<title>Email Sender</title>
</head>

<body>
<h4>Logged in as <?php echo $login_session;?></h4>

<form action="sendemails.php">

<input type="submit" value="send thank you emails">
</form>

</body>
</html>