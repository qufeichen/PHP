<html>
	<head>

		<meta http-equiv="Content-Type" contents="text/html; charset=UTF-8">
		
		<title>My Greetings Website</title>
	</head>
	<body>
		<form id="testform" name="testform" method="post" action="" >
			<p> <label for="name">Enter your name:</label>
				<input name="iname" type="text" id="iname"/>
			</p>
			<p><input type="submit" name="bgreet" value="Greet"/>
		</form>
		<?php
		if(array_key_exists('iname',$_POST))
		{
			echo "Hello Welcome ".$_POST['iname'];
		}
		?>
	</body>
</html>