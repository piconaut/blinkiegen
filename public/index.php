<?php
// escape quotes in input
$intext = escapeshellarg($_POST["intext"]);
$instyle = escapeshellarg($_POST["instyle"]);
$txtcolor = escapeshellarg($_POST["txtcolor"]);
$font = escapeshellarg($_POST["font"]);

// add text to blank gif, save output.gif
popen("convert -pointsize 16 +antialias -gravity Center -font fonts/" . $font . ".ttf -fill " . $txtcolor . " -annotate +0+0 " . $intext . " blank/" . $instyle . ".gif output.gif",'r');

// send response
echo '
<html>
  <h2>your blinkie maker!</h2>
	<form action="/index.php" method="post" formtarget="outputFrame">
  	<label for="instyle">style: </label>  
  	<select id="instyle" name="instyle">
  		<option value="00-red">00-red</option>
  		<option value="01-pinkhearts">01-pinkhearts</option>
  		<option value="02-orbithearts">02-orbithearts</option>
  		<option value="03-computer">03-computer</option>
  	</select><br><br>
  	<label for="intext">text: </label>
  	<input type="text" id="intext" name="intext"><br><br>
  	<label for="font">font: </label>  
  	<select id="font" name="font">
  		<option value="rainyhearts">rainyhearts</option>
  		<option value="monogram-extended">monogram-extended</option>
  	</select><br><br>
  	<label for="txtcolor">text color: </label>
  	<input type="color" id="txtcolor" name="txtcolor"><br><br>
  	<input type="submit" value="generate!!">
	</form>
	<img src="output.gif">
</html>
<script>
</script>'
?>


