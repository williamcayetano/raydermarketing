<?php
	$name = '';
    $email = '';
    $subject = '';
    $message = '';
    	
	function clean($str) {
    	$str = preg_replace("#['`]#", "&#039;", $str);
    	$str = stripslashes($str);
    	$str = htmlspecialchars($str);
    	return $str;
  	}
  	
  	function htmlkarakter($string) { 
   		$string = str_replace(array("&lt;", "&gt;", '&amp;', '&#039;', '&quot;','&lt;', '&gt;'), array("<", ">",'&','\'','"','<','>'), htmlspecialchars_decode($string, ENT_NOQUOTES)); 
   		return $string; 
  	}
  	
	if (isset($_POST['submit'])) {
    	$name = !empty($_POST['name']) ? clean($_POST['name']) : '';
    	$email = !empty($_POST['email']) ? clean($_POST['email']) : '';
    	$subject = !empty($_POST['subject']) ? clean($_POST['subject']) : '';
    	$message = !empty($_POST['message']) ? clean($_POST['message']) : '';
    	
    	$from = $email;
    	$to = "raydrmarketing@gmail.com";
    	$subject = $subject;
    	$message = $message;
    	$headers = "From:" . $from;
    	mail($to,$subject,$message, $headers);
    }
?>
<html lang="en">
	<head>
		<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8" />
		
		<title>Rayder Marketing</title>
	</head>
	<body>	
		<div class="container-fluid navigation">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navigation2">
				<a class="navbar-brand" href="index.html"><img src='rayder-marketing-logo-transparent.png' style="width:275px; height:75px;"></a>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Marketing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About</a>
					</li> 
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
			<div class="main-description">
				<form action="contact.php" method="post">
					Name<br />
      				<input type="text" name="name" value="<?php echo $name; ?>" size="32" maxlength="20">
      				Email<br />
      				<input type="text" name="email" value="<?php echo $email; ?>" size="32" maxlength="20">
      				Subject<br />
      				<input type="text" name="subjct" value="<?php echo $subject; ?>" size="32" maxlength="20">
      				Message<br />
      				<textarea name="message" cols="45" rows="5"><?php echo htmlkarakter($message); ?></textarea><br />
      				<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			<div class="foot">
				<span><a href="privacypolicy.php">Privacy Policy</a> | <a href="disclaimer.php">Disclaimer</a></span>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	</body>
</html>