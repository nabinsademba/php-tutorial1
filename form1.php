<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php 
	if(isset($_POST['submit'])){
		//process form
		printf('User name: %s
			<br>Password: %s
			<br>Gender: %s
			<br>Color: %s
			<br>Language(s): %s,
			<br>Comments: %s
			<br>T&amp;C: %s',
			$_POST['name'], 
			$_POST['password'], '', '', '',
			$_POST['comments'], '');
	}
 ?>
   <form method="post" action="">
   		User name : <input type="text" name="name"><br>
   		Password: <input type="password" name="password"><br>
   		Gender:<br>
   			<input type="radio" name="gender" value="f">female<br>
   			<input type="radio" name="gender" value="m">male<br>
   		Favourite color: 
   			<select>
   				<option value="#f00">red</option>
   				<option value="#0f0">green</option>
   				<option value="#00f">blue</option>
   			</select><br>
   		Language spoken:
   			<select name="languages[]" multiple size="3">
   				<option value="en">English</option>
   				<option value="fr">French</option>
   				<option value="it">Italian</option>
   			</select><br>
   		Comments: <textarea name="comments"></textarea><br>	
   		<input type="checkbox" name="tc" value="ok">I accept the T&amp;C<br>
   		<input type="submit" name="submit" value="Submit">	
   </form>
</body>
</html>