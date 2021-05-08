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
$a=filemtime("node.log");
$now_time = filemtime("good.log");
$resource = fopen('node.log', 'r');
$arr = array();
$totalass = array();

echo "<table><tr height=50><td width=160>Chia Nodes</td><td width=50 align=center>PORT</font></td><td width=100 align=center>BLOCK</td></tr><tr><td>5.189.201.93</td><td align=center><font color=\"8CEA00\">8444</font></td><td  align=center style=\"color:#FFD306;\">[LOCAL*]</td></tr>";

if($a>$now_time)

{

 file_put_contents("good.log"," ");


if ($resource){
  
    while (!feof($resource)){
       
        $line = fgets($resource, 1024);

		//echo $line."<br>";

	

		
		if(stristr($line,"Height") == true)

		{
		
		$arr["ip"]=$arr["ip"]." ".$line;

	

		$patt = '/\s{1,}/';

	$ipc=preg_replace($patt,' ',$arr["ip"]);




	$word=explode(" ",$ipc);


$host = $word[1]; 
$port = substr($word[2],-4); 

$waitTimeoutInSeconds = 0.2; 
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ 

		$ipo="<tr><td>".$word[1]."</td><td align=center><font color=\"8CEA00\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";



		 file_put_contents("good.log",$ipo,FILE_APPEND );

			}fclose($fp); 
		
		
		}

		else{
		
			$arr["ip"]=$line;
		
		}


		
		


    }
}



}



echo file_get_contents("good.log");


echo "</table>";




           echo "<br>Last Update: ".date("Y-m-d H:i:s",$now_time);

		   ?>
   <br><br>
*If you want to remove your ip, you can disconnect local ip. 
<br><br>

introducer-apne.chia.net:8444 <br>
introducer-apse.chia.net:8444 <br><br>
introducer-or.chia.net:8444 <br>
introducer-va.chia.net:8444 <br>
introducer-eu.chia.net:8444 <br>

		   <br>

<table><tr height=50><td width=150>Links</td><td width=230 align=center></td></tr>



<tr><td>chia.keva.app</td><td align=left><font color="8CEA00">github.com/chia-toolkit</font></td></tr>
<tr><td>kevacoin code</td><td align=left><font color="8CEA00">62108412</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia Explorer</td><td align=left><font color="8CEA00">chiaexplorer.com</font></td></tr>
<tr><td>Chia Explorer</td><td align=left><font color="8CEA00">chiastatus.com</font></td></tr>
<tr><td>Chia Netspace</td><td align=left><font color="8CEA00">chianetspace.com</font></td></tr>
<tr><td>Chia Calculator</td><td align=left><font color="8CEA00">chiacalculator.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia Blog</td><td align=left><font color="8CEA00">chiadecentral.com</font></td></tr>
<tr><td>Chia Blog</td><td align=left><font color="8CEA00">thechiafarmer.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia BBS</td><td align=left><font color="8CEA00">reddit.com/r/chia</font></td></tr>
<tr><td>Chia BBS</td><td align=left><font color="8CEA00">chiaforum.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Chia LINKS</td><td align=left><font color="8CEA00">chialinks.com</font></td></tr>



</table>

<br>

 </body>