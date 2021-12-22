<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Mail</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
<?php
// on teste la déclaration de nos variables
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['sujet']) && isset($_POST['message'])) {
	// on affiche nos résultats
	
    echo 'Name:'.$_POST['name']."<br>";
    echo'E-mail:'.$_POST['email']."<br>";
    echo 'Telephone:'.$_POST['tel']."<br>";
    echo 'Sujet:'.$_POST['sujet']."<br>";
    echo $_POST['message']."<br>";
}
?>
      
</body>
</html>