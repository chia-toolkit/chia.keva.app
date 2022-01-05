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

CHIA ASSET ID SEARCH  <a href=dream.php target=_blank><font color="8CEA00">[ADD NEW]</font></a><br><br>

<?php

$kpc = new Keva();

$_REQ = array_merge($_GET, $_POST);

$freeadd=trim(strip_tags($_REQ["num"]));


echo "<form action=\"\" method=\"post\" >";

if(!$freeadd){$cdata="ID OR NAME";}else{$cdata="$freeadd";}

echo "<input type=\"text\" name=\"num\" id=\"editor\" class=\"textarea-inherit\"  style=\"width:175px;border: 1px solid #666666;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:30px;font-size: 20px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;letter-spacing:2px;
\" value=\"".$_REQUEST["hvalue"]."\" maxlength=64 placeholder=\"".$cdata."\">";

echo "<input type=\"submit\" value=\"CHECK\" style=\"border: 0px solid #666666;-webkit-appearance:none ;-webkit-border-radius: 0;border-radius:0;height:36px;background-color:#212121;color: #59fbea;height:30px;width:100px;font-size: 20px;padding-top:0px;\">";

echo "<br><br>";




if(strlen($freeadd)==64) {

	$cats=strtolower($freeadd);

	$bigstep=$kpc->keva_get("NYL2Y1a1ZhrxSTXWdiKLoYujNX615Xo8ZB",$cats);

	echo "<a href=https://keva.one/search?sq=".$bigstep['value']."><font color=\"8CEA00\">".$bigstep['value']."</font></a>";

	$checkm=$bigstep['value'];

	if($bigstep['value']!=""){
	
	$cats=strtoupper($bigstep['value']);

	$bigstep=$kpc->keva_get("NY145F97ASf74m1ahEDVpKwC4p7BXpFztP",$cats);

	$bigdata=$bigstep['value'];


	$catid=substr($bigdata,0,64);
	$catn=trim(strip_tags(strtolower($cats)));

	$catida="<a href=https://keva.one/search?sq=".$catid."><font color=\"8CEA00\">".$catid."</font></a>";
	$catna="<a href=https://keva.one/search?sq=".$catn."><font color=\"8CEA00\">".$catn."</font></a>";
	$chiaa="<a href=https://keva.one/search?sq=chia><font color=\"8CEA00\">chia</font></a>";
	$chiac="<a href=https://keva.one/search?sq=cats><font color=\"8CEA00\">cats</font></a>";

	$bigdata=str_replace($catid,$catida,$bigdata);
	$bigdata=str_replace($catn,$catna,$bigdata);
	$bigdata=str_replace("chia",$chiaa,$bigdata);
	$bigdata=str_replace("cats",$chiac,$bigdata);

	
	echo "<br><br>".$bigdata;
	
							}

	}
	else
	{
	
	$cats=strtoupper($freeadd);

	$bigstep=$kpc->keva_get("NY145F97ASf74m1ahEDVpKwC4p7BXpFztP",$cats);
	
	$bigdata=$bigstep['value'];

	$catid=substr($bigdata,0,64);
	$catn=trim(strip_tags(strtolower($cats)));

	$catida="<a href=https://keva.one/search?sq=".$catid."><font color=\"8CEA00\">".$catid."</font></a>";
	$catna="<a href=https://keva.one/search?sq=".$catn."><font color=\"8CEA00\">".$catn."</font></a>";
	$chiaa="<a href=https://keva.one/search?sq=chia><font color=\"8CEA00\">chia</font></a>";
	$chiac="<a href=https://keva.one/search?sq=cats><font color=\"8CEA00\">cats</font></a>";

	$bigdata=str_replace($catid,$catida,$bigdata);
	$bigdata=str_replace($catn,$catna,$bigdata);
	$bigdata=str_replace("chia",$chiaa,$bigdata);
	$bigdata=str_replace("cats",$chiac,$bigdata);

	
	echo "<br><br>".$bigdata;

	}




?>
<br><br>

Search CATs on <a href=https://keva.one/search target=_blank><font color="8CEA00">keva.one/search</font></a>

<?php
$a=filemtime("node.log");
$now_time = filemtime("good.log");
$resource = fopen('node.log', 'r');
$arr = array();
$totalass = array();
$js=array();

echo "<table><tr height=50><td width=160>Chia Nodes</td><td width=50 align=center>PORT</font></td><td width=100 align=center>BLOCK</td></tr><tr><td>45.56.122.189</td><td align=center><font color=\"8CEA00\">8444</font></td><td  align=center style=\"color:#FFD306;\">[LOCAL*]</td></tr>";

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

		$ipo="<tr><td>".$word[1]."</td><td align=center><font color=\"FF5733\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";	
		
		$ipw=$word[1]." ";

			}
			else{

			$ipo="<tr><td>".$word[1]."</td><td align=center><font color=\"8CEA00\">".$port."</font></td><td  align=center style=\"color:#FFD306;\"> [".$word[10]."]</td></tr>";
			
			
			
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
*If you want to remove your ip, you can disconnect local ip. <br>*You need to use the latest wallet on chia.net<br>*Green is fast in US(<0.2s)<br><br>Add all nodes:
<br><br>curl https://chia.keva.app/ | grep -Eo '[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}' | while read line; do timeout 5s chia show -a $line:8444 ;done<br><br>WIN PowerShell<br><br>
curl https://chia.keva.app/ | Select-String -Pattern '\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b' -AllMatches | % { $_.Matches } | % { $_.Value } | ForEach-Object { Start-Sleep -s 5; chia show -a $_":8444" }<br>

<br>


<br>
<table><tr height=50><td width=150>Links</td><td width=270 align=center></td></tr>



<tr><td>chia.keva.app</td><td align=left><font color="8CEA00">github.com/chia-toolkit</font></td></tr>
<tr><td>kevacoin code</td><td align=left><font color="8CEA00">62108412</font></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Free Chia</td><td align=left><font color="8CEA00">faucet.chia.net</font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">chia2start.eu<font></td></tr>
<tr><td>Free Chia</td><td align=left><font color="8CEA00">xchfaucet.togatech.org</font></td></tr>
<tr><td>Free Chia Game</td><td align=left><a href=https://ipfs.keva.app/ipfs/Qme3LKgGczUY44tDFC2ovFjGyFzsr9R7i8uiDjkLZVXqST><font color="8CEA00">Legend of Satoshi</font></a></td></tr>

<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>


<tr><td>Explorer</td><td align=left><font color="8CEA00">chiaexplorer.com</font></td></tr>
<tr><td>Explorer</td><td align=left><font color="8CEA00">chiastatus.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">lite.profit-mine.com/en/hdd</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chiacalculator.com</font></td></tr>
<tr><td>Calculator</td><td align=left><font color="8CEA00">chia.tt</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Pool</td><td align=left><font color="8CEA00">miningpoolstats.stream/chia</font></td></tr>
<tr><td>Pool</td><td align=left><font color="8CEA00">chiapool.directory</font></td></tr>


<tr><td>-</td><td align=left><font color="8CEA00"></font></td></tr>

<tr><td>Blog</td><td align=left><font color="8CEA00">thechiaplot.net</font></td></tr>
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

 <?php

 class Keva {

    private $proto;

    private $url;
    private $CACertificate;

    public $status;
    public $error;
    public $raw_response;
    public $response;

    private $id = 0;

    public function __construct($url = null) {
		
        $this->username      = 'galaxy'; // RPC Username
        $this->password      = 'frontier'; // RPC Password
		$this->host          = '127.0.0.1'; // Localhost
        $this->port          = '9992';
        $this->url           = $url;

        $this->proto         = 'http';
        $this->CACertificate = null;
    }

    public function setSSL($certificate = null) {
        $this->proto         = 'https';
        $this->CACertificate = $certificate;
    }

    public function __call($method, $params) {
        $this->status       = null;
        $this->error        = null;
        $this->raw_response = null;
        $this->response     = null;

        $params = array_values($params);

        $this->id++;

        $request = json_encode(array(
            'method' => $method,
            'params' => $params,
            'id'     => $this->id
        ));

        $curl    = curl_init("{$this->proto}://{$this->host}:{$this->port}/{$this->url}");
        $options = array(
            CURLOPT_HTTPAUTH       => CURLAUTH_BASIC,
            CURLOPT_USERPWD        => $this->username . ':' . $this->password,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_HTTPHEADER     => array('Content-type: text/plain'),
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $request
        );

        if (ini_get('open_basedir')) {
            unset($options[CURLOPT_FOLLOWLOCATION]);
        }

        if ($this->proto == 'https') {
            if (!empty($this->CACertificate)) {
                $options[CURLOPT_CAINFO] = $this->CACertificate;
                $options[CURLOPT_CAPATH] = DIRNAME($this->CACertificate);
            } else {
                $options[CURLOPT_SSL_VERIFYPEER] = false;
            }
        }

        curl_setopt_array($curl, $options);

        $this->raw_response = curl_exec($curl);
        $this->response     = json_decode($this->raw_response, true);

        $this->status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $curl_error = curl_error($curl);

        curl_close($curl);

        if (!empty($curl_error)) {
            $this->error = $curl_error;
        }

        if ($this->response['error']) {
            $this->error = $this->response['error']['message'];
        } elseif ($this->status != 200) {
            switch ($this->status) {
                case 400:
                    $this->error = 'HTTP_BAD_REQUEST';
                    break;
                case 401:
                    $this->error = 'HTTP_UNAUTHORIZED';
                    break;
                case 403:
                    $this->error = 'HTTP_FORBIDDEN';
                    break;
                case 404:
                    $this->error = 'HTTP_NOT_FOUND';
                    break;
            }
        }

        if ($this->error) {
			return false;
        }

        return $this->response['result'];
    }
}

?>