<?php
error_reporting(0);
//ini_set("display_errors", "On");
//ini_set("error_reporting",E_ALL);

$kpc = new Keva();

$_REQ = array_merge($_GET, $_POST);





if(isset($_SERVER["QUERY_STRING"])){$comm=trim($_SERVER["QUERY_STRING"]);}


if(!$comm){



echo "<html lang=\"en\" dir=\"ltr\"></html><head><title>GALAXY CAT.SALE</title><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";

echo "<style>html,body,.site_font {font-family: coda_regular, arial, helvetica, sans-serif;}html, body{background-color: #0b0c0d;color: #fff;font-size: 15px;margin: 0 auto -100px;padding:0;}textarea-inherit {width: 90%;overflow: auto;word-break: break-all;}::-webkit-scrollbar { width: 0 !important }a:link,a:visited,a:active{transition:0.5s;color: #28f428;text-decoration: none;}a:hover { color:yellow; }input[type=\"text\"],input[type=\"submit\"] {font-size: 18px;}input[type=\"text\"],input[type=\"submit\"] {border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius: 0;height:42px;}input[type=\"text\"] {background-color: rgb(11, 12, 13);color: #ddd;width:50%;padding-left:5px;}input[type=\"submit\"] {background-color: rgb(0, 79, 74);color: #59fbea;padding: 5px 22px;margin-left:3px;height:45px;}div{margin:1px;border:0;padding:0;}#door {margin-top:0px;font-size: 15px;}#newworld{margin-top:100px;font-size: 15px;}#tech {text-align: left;vertical-align:middle;border: 0px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius: 0;font-size:24px;width:98%;}.crt {animation: textShadow 0.00s infinite;}#nav{/*width: 80%;*/margin: 0 auto;border: 0px solid #59fbea;}ul,li {margin: 0px;padding: 0px;list-style: none; }ul { display: flex;flex-direction: row;flex-wrap: wrap;}@keyframes fadeIn {0% {top:5%;}100% {top: 100%;}}li{border: 1px solid #59fbea;width: auto;height:45px;word-break: break-all;background-color: rgb(0, 79, 74);text-align: center;margin-top: 10px;margin-right:5px;margin-left:1px;padding-top:20px;padding-left:2px;padding-right:18px;flex:auto;}p{margin-left: 5px;}#universe {font-size: 18px;position:absolute;}p{color:#ccc;margin-top:2px;}table {color:#999;table-layout: fixed;width: 100%;border-collapse: collapse;border: 1px solid #999;}tr td{color:#999;border: 1px solid #ccc;}</style>";

echo "</head>";

echo "<body style=\"background-color: #0b0c0d;\">";

echo "<div style=\"display:block;width:100%;font-family: coda_regular, arial, helvetica, sans-serif;\"><ul style=\"border: 0px solid #59fbea;\"><li style=\"text-align:center;list-style:none;color: #28f428;font-size: 30px;letter-spacing:4px;margin-top:10px;padding-top:5px;height:45px;background-color:#0b0c0d;}\"><a href=/ style=\"color: #28f428;text-decoration: none;\">CAT.SALE</a></li></ul></div>";

echo "<div id=\"universe\" class=\"crt\"><div id=\"nav\">";

//cat

$cinfo="NhMTJ9wXK4JNFdcE3FT1u8gDm6NEGtu5Cq";


$kinfo="NgxukCDAv2mw9CJJRG5Y8YBZuopbgbP67z";


//list
			
	$arr=array();
	
	$totalass=array();

$cat=$_REQ["cat"];

$cat=strtoupper($cat);

if(!$_REQ["cat"]){$cat="";}
	

$info= $kpc->keva_filter($cinfo,$cat,60000);

	foreach($info as $x_value=>$x)

			{
			
			extract($x);

			if(stristr($key,"KEVA_NS_")==true){continue;}

			$arr["height"]=$height;
			$arr["key"]=$key;
			$arr["keyb"]=bin2hex($key);
			$arr["value"]=$value;
			$arr["txid"]=$txid;

		array_push($totalass,$arr);
	
}

$infok= $kpc->keva_filter($kinfo,$cat,60000);

	foreach($infok as $y_value=>$y)

			{
			
			extract($y);

			if(stristr($key,"KEVA_NS_")==true){continue;}

			$arr["height"]=$height;
			$arr["key"]=$key;
			$arr["keyb"]=bin2hex($key);
			$arr["value"]=$value;
			$arr["txid"]=$txid;

		array_push($totalass,$arr);
	
}


arsort($totalass);

		echo "<ul>";


echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=open.php><font color=yellow size=4><b>OPEN SHOP</b></a></p></li></ul>";

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=offer.php><font color=yellow size=4><b>UPLOAD OFFER</b></a></p></li></ul>";

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=code.php><font color=yellow size=4><b>SHOPCODE+</b></a></p></li></ul>";


//link

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=https://hash.green/dex><font size=4><font color=\"#ccc\">[ DEX ] </font>HASH.GREEN</a></p></li></ul>";

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=https://offerbin.io/><font size=4><font color=\"#ccc\">[ DEX ] </font>OFFERBIN.IO</a></p></li></ul>";

echo "<ul><li style=\"background-color: rgb(0, 79, 74);height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=https://offerpool.io/><font size=4><font color=\"#ccc\">[ DEX ] </font>OFFERPOOL.IO</a></p></li></ul>";


//color

function randColor(){
    mt_srand((double)microtime()*1000000);
    $color_code = '';
    while(strlen($color_code)<6){
        $color_code .= sprintf("%02X", mt_rand(0,180));
    }
    return $color_code;
}

foreach ($totalass as $o=>$p) 

			{
			
			extract($p);
			

$vchk=substr($value, -1);

if($vchk=="/"){$value=substr_replace($value ,"",-1);}


echo "<ul><li style=\"background-color: ".randColor().";height:40px;display:block;text-align:left;\"><p style=\"padding-left:10px;\"><a href=?".$key."><font color=\"#ccc\" size=4>[ ".$key." ] </font>".$value."</a></p></li></ul>";


			
			}

		echo "</ul></div></div>";

		exit;
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GALAXY</title><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">";

	<!-- Include CSS Bootstrap file from Bludit Core -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?version=3.12.0">

	<!-- Include CSS Styles from this theme -->
	<link rel="stylesheet" type="text/css" href="css/style.css?version=3.12.0">





<body>

<div class="container mt-4"> <!-- Content Container HOME -->
        <div class="row">
		

        <div class="col-md-8">
			<!-- Post -->
		
<?php






if(is_numeric($comm) & strlen($comm)>4) 
	
	
	{



$blength=substr($comm , 0 , 1);
$block=substr($comm , 1 , $blength);
$btxn=$blength+1;
$btx=substr($comm , $btxn);





$blockhash= $kpc->getblockhash(intval($block));


$blockdata= $kpc->getblock($blockhash);


$txa=$blockdata['tx'][$btx];

if(!$txa) {$url ="/";echo "<script>window.location.href=decodeURIComponent('".$url."')</script>";}

				
		$transaction= $kpc->getrawtransaction($txa,1);

					foreach($transaction['vout'] as $vout)
	   
						  {

					$op_return = $vout["scriptPubKey"]["asm"]; 

				
					$arr = explode(' ', $op_return); 

					if($arr[0] == 'OP_KEVA_NAMESPACE') 
								{

								 $cona=$arr[0];
								 $cons=$arr[1];
								 $conk=$arr[2];

						$freeadd=$vout["scriptPubKey"]["addresses"][0];
								

								}
						  }
				
				$asset=Base58Check::encode( $cons, false , 0 , false);



$info= $kpc->keva_filter($asset,"",60000);

$shopns=$asset;

$checknm=$kpc->keva_get($shopns,"CAT.SALE");

if($checknm['value']!=""){



echo "<div class=\"card mt-2\">";
	
echo "<div class=\"card-body\"><div class=\"card-title\"><h3 class=\"text-primary\">".$checknm['value']."</h3></div>";

echo "<p class=\"text-info card-subtitle mb-3\">cat.sale?".$comm."</p>";

echo "<div><div id=\"post-content\">";


echo "<div class=\"card-text\">";

echo "This is CHIA OFFER shop, you can use chia wallet to accept offers.";

echo "</div></div></div></div></div>";



}

echo "<div class=\"card mt-2\">";
	
echo "<div class=\"card-body\">";

$spwait=1;

	foreach($info as $x_value=>$x)

			{
			
			extract($x);

			if(stristr($key,"KEVA_NS_")==true){continue;}
			if(stristr($key,"THEME")==true){continue;}
			if(stristr($key,"CAT.SALE")==true){continue;}
			if(stristr($key,"Congratulations")==true){continue;}

			if(stristr($key,"_x_")==true){$spwait=0;}

			$value=hex2bin($value);



			$key=trim($key);
			$keylink=bin2hex($key);


			$valuex=str_replace("\n","<br>",$value);

			

				echo "<div class=\"card-title\"><h4 class=\"text-primary\">";
	
				$keyb=bin2hex($key);
				$valueb=bin2hex($valuex);
				
				$keyx=str_replace(".offer","",$key);
				$keyx=str_replace("_x_"," ] <font color=grey>..... ",$keyx);

				$keyx=str_replace("(1)","",$keyx);
				$keyx=str_replace("(2)","",$keyx);
				$keyx=str_replace("(3)","",$keyx);

			echo "<a href=offer.php?txid=".$txid.">[ ".$keyx."</font></a>";
			
			echo "</h4></div>";
				
					
	
			}


	if($spwait==1){echo "Congratulations, your shop is building in metaverse now, it will take 5-20mins. The link is cat.sale?".$comm; }
	}else

	{
	
	echo "Your shop is building"; 
	
	}

			  
echo "</div></div><br><center><font color=green><a href=/>cat.sale</a></font></center></div></div></div>";
		
	




//check58

class Hash
{
    public static function SHA256(string $data, $raw = true): string
    {
        return hash('sha256', $data, $raw);
    }

    public static function sha256d(string $data): string
    {
        return hash('sha256', hash('sha256', $data, true), true);
    }

    public static function RIPEMD160(string $data, $raw = true): string
    {
        return hash('ripemd160', $data, $raw);
    }
}

class Base58
{
    const AVAILABLE_CHARS = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';

    public static function encode($num, $length = 58): string
    {
        return Crypto::dec2base($num, $length, self::AVAILABLE_CHARS);
    }

    public static function decode(string $addr, int $length = 58): string
    {
        return Crypto::base2dec($addr, $length, self::AVAILABLE_CHARS);
    }
}

/**
 * @codeCoverageIgnore
 */
class Base58Check
{
    /**
     * Encode Base58Check
     *
     * @param string $string
     * @param int $prefix
     * @param bool $compressed
     * @return string
     */
    public static function encode(string $string, int $prefix = 128, bool $compressed = true)
    {
        $string = hex2bin($string);

        if ($prefix) {
            $string = chr($prefix) . $string;
        }

        if ($compressed) {
            $string .= chr(0x01);
        }

        $string = $string . substr(Hash::SHA256(Hash::SHA256($string)), 0, 4);

        $base58 = Base58::encode(Crypto::bin2bc($string));
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] != "\x00") {
                break;
            }

            $base58 = '1' . $base58;
        }
        return $base58;
    }

    /**
     * Decoding from Base58Check
     *
     * @param string $string
     * @param int $removeLeadingBytes
     * @param int $removeTrailingBytes
     * @param bool $removeCompression
     * @return bool|string
     */
    public static function decode(string $string, int $removeLeadingBytes = 1, int $removeTrailingBytes = 4, bool $removeCompression = true)
    {
        $string = bin2hex(Crypto::bc2bin(Base58::decode($string)));

        //If end bytes: Network type
        if ($removeLeadingBytes) {
            $string = substr($string, $removeLeadingBytes * 2);
        }

        //If the final bytes: Checksum
        if ($removeTrailingBytes) {
            $string = substr($string, 0, -($removeTrailingBytes * 2));
        }

        //If end bytes: compressed byte
        if ($removeCompression) {
            $string = substr($string, 0, -2);
        }

        return $string;
    }
}


/**
 * @codeCoverageIgnore
 */
class Crypto
{
    public static function bc2bin($num)
    {
        return self::dec2base($num, 256);
    }

    public static function dec2base($dec, $base, $digits = false)
    {
        if ($base < 2 || $base > 256) {
            die("Invalid Base: " . $base);
        }

        bcscale(0);
        $value = "";

        if (!$digits) {
            $digits = self::digits($base);
        }

        while ($dec > $base - 1) {
            $rest = bcmod($dec, $base);
            $dec = bcdiv($dec, $base);
            $value = $digits[$rest] . $value;
        }
        $value = $digits[intval($dec)] . $value;

        return (string)$value;
    }

    public static function base2dec($value, $base, $digits = false)
    {
        if ($base < 2 || $base > 256) {
            die("Invalid Base: " . $base);
        }

        bcscale(0);

        if ($base < 37) {
            $value = strtolower($value);
        }
        if (!$digits) {
            $digits = self::digits($base);
        }

        $size = strlen($value);
        $dec = "0";

        for ($loop = 0; $loop < $size; $loop++) {
            $element = strpos($digits, $value[$loop]);
            $power = bcpow($base, $size - $loop - 1);
            $dec = bcadd($dec, bcmul($element, $power));
        }

        return (string)$dec;
    }

    public static function digits($base)
    {
        if ($base > 64) {
            $digits = "";
            for ($loop = 0; $loop < 256; $loop++) {
                $digits .= chr($loop);
            }
        } else {
            $digits = "0123456789abcdefghijklmnopqrstuvwxyz";
            $digits .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ-_";
        }
        $digits = substr($digits, 0, $base);

        return (string)$digits;
    }

    public static function bin2bc($num)
    {
        return self::base2dec($num, 256);
    }
}

 function getBase58CheckAddress($addressBin){
            $hash0 = Hash::SHA256($addressBin);
            $hash1 = Hash::SHA256($hash0);
            $checksum = substr($hash1, 0, 4);
            $checksum = $addressBin . $checksum;
            $result = Base58::encode(Crypto::bin2bc($checksum));

            return $result;
        }



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

</div>
    </div>
</div> 

</body>
</html>