<?php
error_reporting(0);

$localip='127.0.0.1';

$ipfscon="http://gotoipfs.com/#path=";

$ismine="1";
$keva_add="on";
$kevaadd=30;

//galaxy rpc setting

$grpcuser='galaxy';
$grpcpass='frontier';
$grpcportk='9992';
$grpcportr='9991';



//kevacoin rpc setting

$krpcuser=$grpcuser;
$krpcpass=$grpcpass;
$krpchost=$localip;
$krpcport=$grpcportk;




class Keva {
    var $username;
    var $password;
    private $proto;
    var $host;
    var $port;
    private $url;
    private $CACertificate;

    public $status;
    public $error;
    public $raw_response;
    public $response;

    private $id = 0;

    public function __construct($url = null) {
		
        $this->username      = $username; // RPC Username
        $this->password      = $password; // RPC Password
        $this->host          = $host; // Localhost
        $this->port          = $port;
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







$kpc = new Keva();

$kpc->username=$krpcuser;
$kpc->password=$krpcpass;
$kpc->host=$krpchost;
$kpc->port=$krpcport;



$_REQ = array_merge($_GET, $_POST);


$force_namespace="NcsfukSWRteWmCRRNFCRVLfX9AaYXBkKLt";


//creat new to blockchain

if($_REQ["fk"]<>"" & $_REQ["fv"]<>"") {

$fk=hex2bin($_REQ["fk"]);
$fv=hex2bin($_REQ["fv"]);

$fk=str_replace(",",".",$fk);

$file = $fk;
$txt = fopen($file, "w");
fwrite($txt, $fv);
fclose($txt);

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize($file));
header("Content-Type: text/plain");
readfile($file);
$status=unlink($file); 


exit;

}



if($_REQ["newasset"]<>"") {


//add neww

$fortit=$_REQ["newtitle"];

$forsub=$_REQ["newasset"];

$forsub=$forsub;


$age= $kpc->keva_put($force_namespace,$fortit,$forsub);

$error = $kpc->error;

if($error != "") 
	
	{

echo"<script>alert('error, file<3kb only');</script>";

$url ="offer.php";
	  

	}

	else
	
{

$url ="offer.php?lang=&txid=".$age['txid']."&title=".bin2hex($forsub)."&key=".bin2hex($fortit)."&pending=2";


}


echo "<script>window.location.href=decodeURIComponent('".$url."')</script>";


}



//addnew


if(!$_REQ["txid"]){


echo "<html lang=\"en\" dir=\"ltr\"></html><head><title>GALAXY</title><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";

echo "<style>.ck-content {min-height: 50px;font-size:20px;}</style>";

echo "</head>";

echo "<body style=\"background-color: #0b0c0d;\">";

echo "<div style=\"display:block;width:100%;font-family: coda_regular, arial, helvetica, sans-serif;\"><ul style=\"border: 0px solid #59fbea;\"><li style=\"text-align:center;list-style:none;color: #28f428;font-size: 30px;letter-spacing:4px;margin-top:5px;padding-top:5px;height:45px;background-color:#0b0c0d;}\"><a href=/ style=\"color: #28f428;text-decoration: none;\">CAT.SALE</a></li></ul></div>";

echo "<div id=\"universe\" class=\"crt\"><div id=\"nav\">";

			echo "&nbsp;<input type=\"file\" id=\"files\" name=\"file\"/><span class=\"readBytesButtons\"><button id=\"mybtn\">Read File</button></span><br><br>";

			echo "<form action=\"\" method=\"post\" >";	

		

		

			echo "<center><textarea name=\"newtitle\" rows=\"1\" style=\"width:99%;overflow:auto;word-break:break-all;\" id=\"byte_t\"></textarea><br>";
			
			echo "<textarea name=\"newasset\" rows=\"15\" style=\"width:99%;overflow:auto;word-break:break-all;\" id=\"byte_content\"></textarea></center>";

			
			
			
			
			echo "<br><br><input type=\"submit\" value=\"SEND OFFER\" style=\"border: 1px solid #59fbea;webkit-appearance: none;-webkit-border-radius: 0;height:42px;background-color: rgb(0, 79, 74);color: #59fbea;padding: 5px 22px;height:45px;width:200px;font-size: 20px;\">";

		
			
			
			echo "</form>";

			echo "<br>&nbsp;*You can upload your offer file and click Read File, or copy your offer data and input title by self.";
			echo "<br>&nbsp;*You can use <a href=https://kevacoin.org>kevacoin</a> app to upload offer file with tag #offer, then everyone could search \"offer\" find your file.<br><br>";

//cat

$cinfo= $kpc->keva_filter("NY145F97ASf74m1ahEDVpKwC4p7BXpFztP","",0);



echo "<ul>";

	echo "<li style=\"background-color: rgb(0, 79, 74);display:block;text-align:center;width:150px;\"><h5 style=\"\"><a href=/offer.php>ALL</a></h5></li>";

	foreach($cinfo as $y_value=>$y)

			{
			
			extract($y);

			if(stristr($key,"KEVA_NS_")==true){continue;}
echo "<li style=\"background-color: rgb(0, 0, 0);display:block;text-align:center;width:150px;\"><h5 style=\"\"><a href=/offer.php?cat=".$key.">".$key."</a></h5></li>";

			}
		
echo "</ul>";

//list
			
	$arr=array();
	
	$totalass=array();

$cat=$_REQ["cat"];

$cat=strtoupper($cat);

if(!$_REQ["cat"]){$cat="";}
	

$info= $kpc->keva_filter($force_namespace,$cat,60000);

	foreach($info as $x_value=>$x)

			{
			
			extract($x);

			if(stristr($key,"CAT.SALE")==true){continue;}
			if(stristr($key,"KEVA_NS_")==true){continue;}

			$arr["height"]=$height;
			$arr["key"]=$key;
			$arr["keyb"]=bin2hex($key);
			$arr["value"]=bin2hex($value);
			$arr["txid"]=$txid;

		array_push($totalass,$arr);
	
}





arsort($totalass);

		echo "<ul>";

foreach ($totalass as $o=>$p) 

			{
			
			extract($p);
			
	$keyx=str_replace(".offer","",$key);
	$keyx=str_replace("_x_"," ]</font> ..... ",$keyx);

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:100px;display:block;text-align:left;\"><h5 style=\"padding-left:10px;\"><a href=offer.php?fk=".$keyb."&fv=".$value.">[ FILE ".$height."]</a> <a href=?txid=".$txid."><font color=yellow>[ ".$keyx."</font></a></h5></li></ul>";
			
			}

		echo "</div></div>";
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GALAXY</title>
		<style>


html,
body,

.site_font {
  font-family: coda_regular, arial, helvetica, sans-serif;
}



html, body {
  background-color: #0b0c0d;
  color: #fff;
  font-size: 15px;
  margin: 0 auto -100px;
  padding: 0;

}

.textarea-inherit {
    width: 90%;
    overflow: auto;
    word-break: break-all;
}

::-webkit-scrollbar { width: 0 !important }



a:link,
a:visited,
a:active{
 transition:0.5s;
color: #28f428;	
  text-decoration: none;
}

a:hover { color:yellow; }

input[type="text"],
input[type="submit"] {
  font-size: 18px;
}



input[type="text"],
input[type="submit"] {
  border: 1px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  height:42px;
 

}

input[type="text"] {
  background-color: rgb(11, 12, 13);
  color: #ddd;

 width:50%;
 padding-left:5px;

}

input[type="submit"] {
  background-color: rgb(0, 79, 74);
  color: #59fbea;
  padding: 5px 22px;
  margin-left:3px;
  height:45px;
    
}

div{margin:1px;border:0;padding:0;}

#door {

margin-top:0px;
  
font-size: 15px;
  

}

#newworld{

margin-top:100px;
  
  font-size: 15px;
  

}





#tech {

  


text-align: left;
vertical-align:middle;

  border: 0px solid #59fbea;
  font-family: coda_regular, arial, helvetica, sans-serif;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  font-size:24px;

width:98%;

 
  
}




.crt {
  animation: textShadow 0.00s infinite;
}

            #nav
            {
                /*width: 80%;*/
                margin: 0 auto;
			
                border: 0px solid #59fbea;
            }
            ul,li 
            {
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            ul 
            {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;


            }



@keyframes fadeIn {
  0% {
    top:5%;
  }
  100% {
    top: 100%;
  }
}

            li
            {
                border: 1px solid #59fbea;
                width: 700px;
				height:100px;
				word-break: break-all;
			background-color: rgb(0, 79, 74);
                text-align: center;
                margin-top: 10px;
                margin-bottom: 7px;
				margin-right: 5px;
				margin-left: 1px;
				padding-top:10px;
				padding-left:2px;
				padding-right:2px;
                flex:auto;  
				

            }
			p
			{
			margin-left: 5px;
			}
#universe {

line-height:26px;
ont-weight:100px;
font-size: 22px;
position: absolute;
  
}

p
{

color:#ccc;
margin-top:2px;

}

table {
color:#999;
  table-layout: fixed;
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #999;
}
tr td{color:#999;border: 1px solid #ccc;}

</style>





<body>

		
<?php

if(isset($_REQ["txid"])) 
	
	{

			
$txidget=$_REQ["txid"];

		

		$transaction= $kpc->getrawtransaction($txidget,1);

			$blockhash=$kpc->getblock($transaction["blockhash"]);

			foreach($transaction['vout'] as $vout)
	   
				  {

					$op_return = $vout["scriptPubKey"]["asm"]; 

				
					$arr = explode(' ', $op_return); 

					if($arr[0] == 'OP_KEVA_PUT') 
						{

					 $key=hex2bin($arr[2]);
					 $value=hex2bin($arr[3]);
					 $keyh=$arr[2];
					  $valueh=$arr[3];

					 $kadd=$vout["scriptPubKey"]["addresses"][0];

					 $blockone=$locktime;
				
						} 

				 }

				 $heightm=$blockhash["height"];

				 if(!$heightm){ $heightm="0";}
				


echo "<div style=\"display:block;width:100%;font-family: coda_regular, arial, helvetica, sans-serif;\"><ul style=\"\"><li style=\"text-align:center;list-style:none;color: #28f428;font-size: 30px;letter-spacing:4px;margin-top:5px;padding-top:5px;padding-right:25px;height:45px;background-color:#0b0c0d;}\"><a href=/ style=\"color: #28f428;text-decoration: none;\">[".$heightm."] SELL ".$key."</a></li></ul></div>";

echo "<div id=\"universe\" class=\"crt\"><div id=\"nav\"><ul>";


				 


			//value


				
							
							

								
								$key=str_replace("%20"," ",$key);
								
								$key1=bin2hex(trim($key));
								$key2=$kkey;
								
			

								$fkey=$key;

								

								$x_value="<h4>".$key."</h4>";

							
								//title

								$gettxid=trim(strip_tags($txidget));

								

								$valuex=str_replace("\n","<br>",$value);
								$valuex=str_replace("#chia#offer","",$valuex);

								$vaulth=bin2hex($valuex);

								$newrvncheck=trim(strip_tags($valuex));

								if(strlen($gettxid)=="64"){

								
								echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;\"><h4>QR CODE</h4><hr style=\"background-color:#59fbea;height:1px;border:none;\"><font size=3><img src=https://keva.app/bludit/qr.php?v=".$vaulth."&theme=1></font></li>";

								


										

										


						
								echo "<li style=\"background-color: rgb(0, 79, 74);display:block;height:auto;width:900px;\"><a href=offer.php?fk=".$keyh."&fv=".$valueh."><h4>[ DOWNLOAD FILE ]</h4></a><hr style=\"background-color:#59fbea;height:1px;border:none;\">".$valuex."</li>";
												


														
											
											}

						









	




			//button

		
echo "</ul><ul><li style=\"background-color: rgb(0, 79, 74);display:block;height:40px;\"><font size=5>cat.sale/offer.php?txid=".$txidget."</font></li>";

			echo "</ul><ul><a href=\"offer.php\"><li style=\"background-color: rgb(0, 79, 74);height:100px;display:block;\"><h3>[ UPLOAD MORE OFFER FILES ]</h3></a></li>";

		//tips



		//workarea


	echo "</ul><ul><li style=\"background-color: rgb(0, 79, 74);height:100px;display:block;\"><h5>Notice that the offer file was named XX_for_XX, but the file name itself does not dictate the contents of the offer. You may check the offer in your wallet carefully.</h5></li>";

	
			
	echo "</ul>";


//article over



}	
	


?>
</ul></div>
</div>

<script>
function readBlob(opt_startByte, opt_stopByte) {

  var files = document.getElementById('files').files;
  if (!files.length) {
    alert('Please select a file!');
    return;
  }

  var file = files[0];
  var start = parseInt(opt_startByte) || 0;
  var stop = parseInt(opt_stopByte) || file.size - 1;

  var reader = new FileReader();

  reader.onloadend = function(evt) {
    if (evt.target.readyState == FileReader.DONE) { // DONE == 2
      document.getElementById('byte_content').textContent = evt.target.result;
    }
  };

  var blob = file.slice(start, stop + 1);
  reader.readAsBinaryString(blob);
}

document.querySelector('.readBytesButtons').addEventListener('click', function(evt) {
  if (evt.target.tagName.toLowerCase() == 'button') {
    var startByte = evt.target.getAttribute('data-startbyte');
    var endByte = evt.target.getAttribute('data-endbyte');
    readBlob(startByte, endByte);
  }
}, false);

  var div=document.getElementById('byte_t');
  var myfile = document.getElementById('files');

  mybtn.onclick = function () {


   div.innerHTML = div.innerHTML+myfile.files[0].name;

  }


</script>



</body>
</html>