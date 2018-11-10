<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css.min')}}">

</head>
<body>
	<?php
       foreach ($users as $key => $user) {
       	# code...
       	echo "<li>".$user->username ." is " .$user->role->role_name;
       }
	?>

</body>
</html>