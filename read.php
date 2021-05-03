<?php
$handle = fopen("./db.txt","r");
$sad=0;
$neutral=0;
$happy=0;

while(($string = fgetcsv($handle,1000,",")) !== false)
{
		if ($string[0] =="sad")
		{$sad++;}
if ($string[0] =="neutral")
		{$neutral++;}
	if ($string[0] =="happy")
		{$happy++;}
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FeedBack By Sabri</title>
  <link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->

	<img width="66" height="66" src="./img/sad_bj1tuj.svg"/> <div> Sad Clients =  <?php  print_r($sad);?></div><br>
	<img  width="66" height="66" src="./img/neutral_t3q8hz.svg"/><div> Neutral Clients =  <?php  print_r($neutral);?></div><br>
	<img  width="66" height="66" src="./img/happy_ampvnc.svg"/><div> Happy Clients =  <?php  print_r($happy);?></div><br>
	


<a class="mtt" href="https://orangersgarden.com" target="_blank">
	With <span>♥</span> from LTI Orangers Garden
</a>
<!-- partial -->
 

</body>
</html>
<?php
fclose($handle);
?>
