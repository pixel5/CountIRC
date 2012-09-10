<?php
// IRC Number of Users widget
// 2012 Aaron Baxter and Chris Lemay 
// Widget will only work if BigBen is in the channel

// Insert your channel name here, include the #
$ChannelName = '#YourChannelHere';


// DONT TOUCH ANYTHING BELOW
$file = 'http://www.thecrittac.com/users.txt';
$contents = file_get_contents($file);
$pattern = preg_quote($ChannelName, '/');
$pattern = "/^.*$pattern.*\$/m";

if(preg_match_all($pattern, $contents, $matches)){
  	$fString = implode("\n", $matches[0]);
  	$ms = "$fString";
  	$string = ereg_replace("[^0-9]", "",$ms);
	echo "Users Online: <a style='color:#009900;'><strong>".$string."</strong></a>";
}
else{
   echo "<a style='color:#cc0000;'>BigBen is down.</a>";
}



?>
