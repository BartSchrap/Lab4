<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <?php include 'lang.php'?>
    <title>Lotsamonny</title>
</head>
<body id="S2_background">
<nav>
	<div class="pijltjelinks"> <a href="S1_homepage.html"><span>&#8592;</span></a></div>
	<div class="pijltjerechts"> <a href="S3login.html"><span>&#8594;</span></a></div>
</nav>
<div id="S2_wrapper">
	<section id="S2_maincontent">
		<H1 id="S2_titel"><?php echo($langArray['titel']);?></H1>
        <p id="lang"><a id="nl" href="S2_voorbeeld.php?language=nl">NL</a>|<a id="en" href="S2_voorbeeld.php?language=en">EN</a></p>
		<p><?php echo($langArray['info']);?> </p>
	   	<form>
			<p><?php echo($langArray['email']);?></p>
	     		<input type="email" id="S2_email" name="S2_email" placeholder="example@example.com">
				<input type="submit" id="S2_submit" value="<?php echo($langArray['submit']) ?>" name="submit">
		</form>
	</section>
</div>
</body>
</html>
 
