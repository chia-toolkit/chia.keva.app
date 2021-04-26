<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Bludit">
<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Dynamic title tag -->
	<title>KEVA.APP | GALAXY</title>

	<!-- Dynamic description tag -->
	<meta name="description" content="">

	<!-- Include Favicon -->
	<link rel="icon" href="https://keva.app/bludit/bl-themes/koh/img/favicon.png" type="image/png">

	<!-- Include CSS Bootstrap file from Bludit Core -->
	<link rel="stylesheet" type="text/css" href="https://keva.app/bludit/bl-kernel/css/bootstrap.min.css?version=3.12.0">

	<!-- Include CSS Styles from this theme -->
	<link rel="stylesheet" type="text/css" href="https://keva.app/bludit/bl-themes/koh/css/style.css?version=3.12.0">

	<body style="color:#ccc;">

<?php

$resource = fopen('node.log', 'r');
$arr = array();
$totalass = array();
if ($resource){
  
    while (!feof($resource)){
       
        $line = fgets($resource, 1024);

		//echo $line."<br>";

	

		
		if(stristr($line,"Height") == true)

		{
		
		$arr["ip"]=$arr["ip"]." ".$line;


		array_push($totalass,$arr);}

		else{
		
			$arr["ip"]=$line;
		
		}


    }
}





echo "<table>";

echo "<tr height=50><td width=160>Chia Nodes</td><td width=50 align=center>PORT</font></td><td width=100 align=center>BLOCK</td></tr>";

foreach($totalass as $one => $two)

{

	extract($two);

	$patt = '/\s{1,}/';

	$ip=preg_replace($patt,' ',$ip);




	$word=explode(" ",$ip);


//print_r($word);


echo "<tr><td>";


echo $word[1];


 echo "</td><td align=right><font color=\"8CEA00\">".$word[2]."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";



}


echo "</table>";



$a=filemtime("node.log");
           echo "<br>Last Update: ".date("Y-m-d H:i:s",$a);

		   ?>

		   <br>

<table><tr height=50><td width=150>Links</td><td width=230 align=center></td></tr>

<tr><td>chia.keva.app</td><td align=left><font color="8CEA00">github.com/chia-toolkit</font></td></tr>
<tr><td>kevacoin code</td><td align=left><font color="8CEA00">62108412</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia Explorer</td><td align=left><font color="8CEA00">chiaexplorer.com</font></td></tr>
<tr><td>Chia Explorer</td><td align=left><font color="8CEA00">chiastatus.com</font></td></tr>
<tr><td>Chia Netspace</td><td align=left><font color="8CEA00">chianetspace.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia Blog</td><td align=left><font color="8CEA00">chiadecentral.com</font></td></tr>
<tr><td>Chia Blog</td><td align=left><font color="8CEA00">thechiafarmer.com</font></td></tr>



</table>

<br>

 </body>