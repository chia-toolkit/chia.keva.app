<?php
error_reporting(-1);


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


NFT/CAT DEX [ <a href=https://cat.sale target=_blank><font color="8CEA00">CAT.SALE</font></a> ]

<br><br>

<?php
		
		
		
$a=filemtime("node.log");
$now_time = filemtime("good.log");
$resource = fopen('node.log', 'r');
$arr = array();
$totalass = array();
$js=array();

echo "<table><tr height=50><td width=160>Chia Nodes</td><td width=50 align=center>PORT</font></td><td width=100 align=center>BLOCK</td></tr>";

if($a>$now_time)

{

 file_put_contents("good.log"," ");
 //file_put_contents("win.txt"," ");


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


$host = trim($word[1]); 
$port = trim(substr($word[2],-4)); 

$js["ip"]=$host;

array_push($totalass,$js);

$waitTimeoutInSeconds = 0.2;

//echo "<tr><td>".$word[1]."</td><td align=center><font color=\"8CEA00\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";

$fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds);

if(!$fp){ 

		$ipo="<tr><td>".$word[1]."</td><td align=center><font color=\"FF5733\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[9]."]</td></tr>";	
		
		$ipw=$word[1]." ";

			}
			else{

			$ipo="<tr><td>".$word[1]."</td><td align=center><font color=\"8CEA00\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[9]."]</td></tr>";
			
			
			
			$ipw=$word[1]." ";

			
			}
			//echo $ipo;
			
			file_put_contents("good.log",$ipo,FILE_APPEND );
			
			fclose($fp); 
		
		
		}

		else{
		
			$arr["ip"]=$line;
		
		}


		
		


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
*You need to use the latest wallet on chia.net<br>*Green is fast in US(<0.2s)<br><br>Add all nodes:
<br><br>curl https://chia.keva.app/ | grep -Eo '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | while read line; do timeout 5s chia show -a $line:8444 ;done<br><br>WIN PowerShell<br><br>
curl https://chia.keva.app/ | Select-String -Pattern '\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b' -AllMatches | % { $_.Matches } | % { $_.Value } | ForEach-Object { Start-Sleep -s 5; chia show -a $_":8444" }<br>

<br>


<br>
<table><tr height=50><td width=150>LINKS</td><td width=270 align=center></td></tr>



<tr><td>chia.keva.app</td><td align=left><font color="8CEA00">github.com/chia-toolkit</font></td></tr>
<tr><td>kevacoin code</td><td align=left><font color="8CEA00">62108412</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>
<tr><td>LINKS</td><td align=left><font color="8CEA00">chialinks.com</font></td></tr>
<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>
<tr><td>Roadmap</td><td align=left><font color="8CEA00">roadmap.chia.net</font></td></tr>
<tr><td>Offer</td><td align=left><font color="8CEA00">dexie.space</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Free Chia</td><td align=left><font color="8CEA00">faucet.chia.net</font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">xchfaucet.togatech.org</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>


<tr><td>Explorer</td><td align=left><font color="8CEA00">spacescan.io</font></td></tr>
<tr><td>Explorer</td><td align=left><font color="8CEA00">chiastatus.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">profit-mine.com/en/hdd</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chiacalculator.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chia.tt</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">graphchia.com</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Pool</td><td align=left><font color="8CEA00">miningpoolstats.stream/chia</font></td></tr>
<tr><td>Pool</td><td align=left><font color="8CEA00">chiapool.directory</font></td></tr>





<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>BBS</td><td align=left><font color="8CEA00">reddit.com/r/chia</font></td></tr>
<tr><td>BBS</td><td align=left><font color="8CEA00">chiaforum.com</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>





</table>

<br>

</body>

