<?php
error_reporting(0);
//ini_set("display_errors", "On");
//ini_set("error_reporting",E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Bludit">
<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Dynamic title tag -->
	<title>CAT.SALE | GALAXY</title>

	<!-- Dynamic description tag -->
	<meta name="description" content="">


	<!-- Include CSS Bootstrap file from Bludit Core -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?version=3.12.0">

	<!-- Include CSS Styles from this theme -->
	<link rel="stylesheet" type="text/css" href="css/style.css?version=3.12.0">

	<body style="color:#ccc;">
	
<?php

$kpc = new Keva();

$_REQ = array_merge($_GET, $_POST);


$chkf=$_FILES['images']['tmp_name'][0];



$chkc=file_get_contents($chkf);



//check data

if(stristr($chkc,"offer")==true) 
	
	
	{




		$age=$kpc->keva_list_namespaces();

		$npnum=count($age);

		$goodname="";

		foreach($age as $z_value=>$z)
		{

		extract($z);

		if(stristr($displayName,"SALEOFFER")==true){continue;}
		if(stristr($displayName,"SALESHOP")==true){continue;}
		if(stristr($displayName,"SHOPCODE")==true){continue;}

		if(stristr($displayName,"CAT.SALE️")==true){

			$goodname=$namespaceId;
					
			break;
			
			}else{continue;}

		}

	
										if($npnum<6){

										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										$age=$kpc->keva_namespace("CAT.SALE️");
										

										}

								
//creat new to blockchain

$name=0;

$shopns="SELL ";

$shoptx="";

$offerchk=1;

foreach($_FILES['images']['tmp_name'] as $x)

{

if(!$x){continue;}

$fk=$_FILES['images']['name'][$name];

$fv=file_get_contents($x);


//check offer

			$pdata=array('offer' => $fv);

					$postfields="check_offer_validity";



					$url="https://localhost/".$postfields;



					  $postData = json_encode($pdata);
            
            
        
       
						$ch = curl_init();
						$params[CURLOPT_URL] = $url;   
						$params[CURLOPT_HEADER] = false; 
						$params[CURLOPT_RETURNTRANSFER] = true; 
						$params[CURLOPT_FOLLOWLOCATION] = true; 
						$params[CURLOPT_POST] = true;
						$params[CURLOPT_PORT] = 9256;
						$params[CURLOPT_POSTFIELDS] = $postData;
						$params[CURLOPT_SSL_VERIFYPEER] = false;
						$params[CURLOPT_SSL_VERIFYHOST] = false;

						$params[CURLOPT_SSLCERTTYPE] = 'PEM';
						$params[CURLOPT_SSLCERT] = 'pcrt.pem';
						$params[CURLOPT_SSLKEYTYPE] = 'PEM';
						$params[CURLOPT_SSLKEY] = 'pkey.pem';


						curl_setopt_array($ch, $params); 
						$content = curl_exec($ch); 
						$output = curl_getinfo($ch);
						curl_close($ch);



						//echo $content;

						//print_r(json_decode($content, true));

						//print_r($output);

						$total=json_decode($content, true);

						//echo $key." ".$total['valid']."<br>";

						if(!$total['valid']){echo $_FILES['images']['name'][$name]." is not valid.<br>";continue;}else
							
						{

//put

$offerf=$fv;

$fv=$fv;

	$shopitem=$kpc->keva_put($goodname,$fk,$fv);

	$shoptx=$shoptx.",".$shopitem['txid'];

$status=unlink($x);

$name=$name+1;

//shopns

$arrs=explode('_x_', $fk);

$checkarr=preg_replace("/\\d+/",'',$arrs[0]);

	

	if(stristr($shopns,$checkarr)==false){
		
	$checkarr=str_replace("_","+",$checkarr);
	$checkarr=str_replace(",","",$checkarr);
	$checkarr=str_replace(".","",$checkarr);
	
	$shopns=$shopns."".$checkarr."/";}



//hashgreen

$pdata=array('offer' => $offerf);


$postData = http_build_query($pdata);

$authorization="Authorization:Bearer ";
				$curl = curl_init();

				$url="https://hash.green/api/v1/orders";

curl_setopt_array($curl, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
   CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_SSL_VERIFYHOST=> 2,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_POST=>1,
  CURLOPT_HTTPHEADER =>array('Content-Type: application/x-www-form-urlencoded' , $authorization),
CURLOPT_POSTFIELDS=>$postData,]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

						$offerchk=0;}



}

if($offerchk==0){
//theme

$thenft=$kpc->keva_put($goodname,"THEME","offer");

//getnum

if($_REQ["shopns"]!=""){$shopns=$_REQ["shopns"];}

$theshop=$kpc->keva_put($goodname,"CAT.SALE",$shopns);

//getnum


$namespaceb= $kpc->keva_get($goodname,"_KEVA_NS_");

		
		

			$title=$namespaceb['value'];

			$snl=strlen($namespaceb['height']);
				$snm=$namespaceb['height'];

				

				$getblockh=$kpc->getblockheaderbyheight($snm);
			
				$getblockh=$getblockh['block_header']['hash'];
				$getblocktx=$kpc->getblock($getblockh);

			
				$sncount=0;
		
					foreach($getblocktx['tx'] as $txa){

				
						$transaction= $kpc->getrawtransaction($txa,1);

							foreach($transaction['vout'] as $vout)
	   
							  {

								$op_return = $vout["scriptPubKey"]["asm"]; 

				
									$arrb = explode(' ', $op_return); 

									if($arrb[0] == 'OP_KEVA_NAMESPACE') 
										{

								 $cona=$arrb[0];
								 $cons=$arrb[1];
								 $conk=$arrb[2];
								  $cond=$vout["scriptPubKey"]["addresses"][0];

								 $assetn=Base58Check::encode($cons, false , 0 , false);

								 if($goodname==$assetn){ $sn=$snl."".$snm."".$sncount;}

										}
								 }
				
							

						$sncount=$sncount+1;

						}

if(!$sn){$bigstep="New Please Get again (10-30min)";}else{

$bigstep="CAT.SALE SHOP ".$sn." open now. <font color=\"8CEA00\"></font> You can open <a href=https://cat.sale?".$sn."><font color=\"8CEA00\">cat.sale?".$sn."</font></a> to see your shop and share to everyone.(It will take 0-30min to write on the blockchain.)";}

//echo "<br><br>".$bigstep."<br><br>";

//puttx

$txfile="data/".$sn.'.txt';

file_put_contents($txfile,$shoptx);
					

$kva=$_REQ["kvadd"];

$namesns=$kpc->keva_put($goodname,"_KEVA_NS_",$sn);

if(strlen($kva)==34){
	
		

		$agex=$kpc->keva_put($goodname,"Congratulations",$bigstep,$kva); 
			}
		else
		{
		$kva="VQAs2uaphiEKNgAV5ehHSqdmRHwBq13rz9";
		$agex=$kpc->keva_put($goodname,"Congratulations",$bigstep,$kva); 

		

		}

		

		$saleshop="NhMTJ9wXK4JNFdcE3FT1u8gDm6NEGtu5Cq";

		$ages=$kpc->keva_put($saleshop,$sn,$shopns);

		$url ="/?".$sn;



		echo "<script>window.location.href=decodeURIComponent('".$url."')</script>";


	}

	}

echo "<div style=\"display:block;width:100%;font-family: coda_regular, arial, helvetica, sans-serif;\"><ul style=\"border: 0px solid #59fbea;\"><li style=\"text-align:center;list-style:none;color: #28f428;font-size: 30px;letter-spacing:4px;margin-top:10px;padding-top:5px;height:45px;background-color:#0b0c0d;}\"><a href=/ style=\"color: #28f428;text-decoration: none;\">CAT.SALE</a> ";

if($_REQ["k"]==1){echo "<a href=open.php?k=2>[FAST]</a> <a href=open.php>[EASY]</a> <a href=open.php?k=1><font color=yellow>[PRO]</font></a>";}

if($_REQ["k"]==2){echo "<a href=open.php?k=2><font color=yellow>[FAST]</font></a> <a href=open.php>[EASY]</a> <a href=open.php?k=1>[PRO]</a>";}

if(!$_REQ["k"]){echo "<a href=open.php?k=2>[FAST]</a> <a href=open.php><font color=yellow>[EASY]</font></a> <a href=open.php?k=1>[PRO]</a>";}




echo "</li></ul></div>";

	//upload

	$max_no_img=8; 

			echo "<br><form name=form1 action=\"\" method=\"post\" enctype=\"multipart/form-data\" onSubmit=\"return closebut()\">";

					

					if(!$_REQ["k"] or $_REQ["k"]==1){echo "<center>[ X ] <input name=\"shopns\" class=\"textarea-inherit\"  style=\"width:50%;border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:48px;font-size: 24px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;padding-top:2px;margin-top:10px;\"   placeholder=\"SHOP NAME\"><br>";}

					if($_REQ["k"]==1){

					echo "<center>[ X ] <input name=\"kvadd\" class=\"textarea-inherit\"  style=\"width:50%;border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:48px;font-size: 24px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;padding-top:2px;margin-top:10px;\"   placeholder=\"KEVACOIN ADDRESS\"><br>";}

			for($i=1; $i<=$max_no_img; $i++){

					echo "<center>[ ".$i." ] <input type=file name=\"images[]\" class=\"textarea-inherit\"  style=\"width:50%;border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:48px;font-size: 24px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;padding-top:2px;margin-top:10px;\"   placeholder=\"aa12\" accept=\".offer\"  title=\"OFFER FILE ".$i."\"><br>";

			}

			

	


echo "<br><input type=\"submit\" id=\"btn\" value=\"OPEN SHOP\" style=\"border: 1px solid #59fbea;-webkit-appearance:none ;-webkit-border-radius: 0;border-radius:0;height:36px;background-color: rgb(0, 79, 74);color: #59fbea;margin-left:20px;width:180px;font-size: 20px;padding-top:0px;\"></center></li></ul></div>";


		
			
			echo "</form></center>";






//menu

echo "<br><br>";





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


?>

This is free offer shortcode create tool for everyone. Upload 1-8 offers, you will get a code like <a href=https://cat.sale?65039731><font color=\"8CEA00\">65039731</font></a>. All the offers are in one number on the blockchain, simple and easy to remember. You can share your number with the link <a href=https://cat.sale?65039731><font color=\"8CEA00\">cat.sale?65039731</font></a><br><br>


The PRO mode support manage the shop if you have a kevacoin address. All the datas stored on the <a href=https://kevacoin.org/><font color=\"8CEA00\">kevacoin</font></a> blockchain. You can also follow the number and chat/repost the offer.<br><br>

<br><br><a href=https://cat.sale>cat.sale</a>

<script type="text/javascript"> 
var wait=60; 

 function sendform () 
      {
         
              document.form1.submit();
         
      }


function time(o) { 
if (wait == 0) { 
o.removeAttribute("disabled"); 
o.value="GO CAT"; 
wait = 600; 
} else { 
o.setAttribute("disabled", true); 
o.value=wait+"s"; 
wait--; 
setTimeout(function() { 
time(o) 
}, 
1000) 
} 
} 
document.getElementById("btn").onclick=function(){sendform(time(this));} 
</script> 

</body>