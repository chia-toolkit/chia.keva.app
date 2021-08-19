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
$js=array();

echo "<table><tr height=50><td width=160>Chia Nodes</td><td width=50 align=center>PORT</font></td><td width=100 align=center>BLOCK</td></tr><tr><td>45.56.122.189</td><td align=center><font color=\"8CEA00\">8444</font></td><td  align=center style=\"color:#FFD306;\">[LOCAL*]</td></tr>";




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

$js["ip"]=$host;

echo "<tr><td>".$word[1]."</td><td align=center><font color=\"8CEA00\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";



		
		
		}

		else{
		
			$arr["ip"]=$line;
		
		}


		
		


    }
}





//$jso=json_encode($data,JSON_UNESCAPED_UNICODE);

//file_put_contents("json.txt",$jso );

echo file_get_contents("good.log");


echo "</table>";




           echo "<br>Last Update: ".date("Y-m-d H:i:s",$now_time);

		   ?>
   <br><br>
*If you want to remove your ip, you can disconnect local ip. <br><br>Add all nodes:
<br><br>curl https://chia.keva.app/ | grep -Eo '[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}' | while read line; do timeout 5s chia show -a $line:8444 ;done<br>


<table><tr height=50><td width=150>Links</td><td width=270 align=center></td></tr>

<tr><td>More Nodes</td><td align=left><font color="8CEA00">chia.powerlayout.com</font></td></tr>

<tr><td>chia.keva.app</td><td align=left><font color="8CEA00">github.com/chia-toolkit</font></td></tr>
<tr><td>kevacoin code</td><td align=left><font color="8CEA00">62108412</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Free Chia</td><td align=left><font color="8CEA00">faucet.chia.net</font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">chia2start.eu<font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">xchfaucet.togatech.org</font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">azpool.org/chiafaucet</font></td></tr>
<tr><td>Free Chia Game</td><td align=left><font color="8CEA00">Legend of Satoshi</font> <a href=https://ipfs.keva.app/ipfs/Qme3LKgGczUY44tDFC2ovFjGyFzsr9R7i8uiDjkLZVXqST><font color="ffffff">[Tutorial]</font></a></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>


<tr><td>Explorer</td><td align=left><font color="8CEA00">chiaexplorer.com</font></td></tr>
<tr><td>Explorer</td><td align=left><font color="8CEA00">chiastatus.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">lite.profit-mine.com/en/hdd</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chiacalculator.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chiaprofitability.com</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Pool</td><td align=left><font color="8CEA00">miningpoolstats.stream/chia</font></td></tr>
<tr><td>Pool</td><td align=left><font color="8CEA00">chiapool.directory</font></td></tr>
<tr><td>Pool</td><td align=left><font color="8CEA00">farmingpoolcalculator.com</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Blog</td><td align=left><font color="8CEA00">chiadecentral.com</font></td></tr>
<tr><td>Blog</td><td align=left><font color="8CEA00">thechiafarmer.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Clisp</td><td align=left><font color="8CEA00">clisp.surrealdev.com</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>BBS</td><td align=left><font color="8CEA00">reddit.com/r/chia</font></td></tr>
<tr><td>BBS</td><td align=left><font color="8CEA00">chiaforum.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>LINKS</td><td align=left><font color="8CEA00">chialinks.com</font></td></tr>



</table>

<br>

 </body>