<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Query Strings</title>
</head>

<body>
<?php if (isset($_GET['name'])) : ?>
<?php
	echo $_GET['name'];
	echo ' ';
	echo $_GET['lastname'];
?>
<?php endif; ?>
<br />
<a href="name.php?name=Petrus">Petrus</a>
<a href="name.php?name=Loser">Loser</a>
<a href="name.php?name=Thomas">Thomas</a>
<a href="name.php?name=Guyy">Guyy</a>


</body>
</html>