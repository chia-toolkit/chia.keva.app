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

$kpc = new Keva();

$_REQ = array_merge($_GET, $_POST);


//creat new to blockchain




if($_REQ["chiaid"]<>"" & $_REQ["chianame"]<>"") 
	
	
	{


sleep(1);



$getid=trim(strip_tags($_REQ["chiaid"]));


$getname=trim(strip_tags($_REQ["chianame"]));


$getname=strtoupper($getname);


if(strlen($getid)==64){
	
	
	
	$checknp=$kpc->keva_get("NYL2Y1a1ZhrxSTXWdiKLoYujNX615Xo8ZB",$getid);

	if(!$checknp['height']){


		$chiakeva=$kpc->keva_put("NYL2Y1a1ZhrxSTXWdiKLoYujNX615Xo8ZB",$getid,$getname);


		echo "<br><center><font size=4>".$getname."<br><br>".$getid." is on the blockchain now</font></center>";


		

							}

						else{

		echo "<br><center><font size=4>".$getname."<br><br>".$getid." is already on the blockchain</font></center>";
		
		

						}	
					}
		
				else

			{echo"<script>alert('No CHIA ID');</script>";

$url="dream.php";

echo "<script>window.location.href=decodeURIComponent('".$url."')</script>";

exit;

		}

	}



			echo "<br><form action=\"\" method=\"post\" >";	

			

					echo "<center><input type=\"text\" name=\"chiaid\" id=\"editor\" class=\"textarea-inherit\"  style=\"width:300px;border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:36px;font-size: 30px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;
\" value=\"\" maxlength=64 placeholder=\"CHIA ASSET ID\"><br><br>";

			echo "<input type=\"text\" name=\"chianame\" id=\"editor\" class=\"textarea-inherit\"  style=\"width:300px;border: 1px solid #59fbea;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:36px;font-size: 30px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;
\" value=\"\" maxlength=10 placeholder=\"CHIA ASSET NAME\"></center><br>";


		




echo "<center><input type=\"submit\" value=\"SUBMIT\" style=\"border: 1px solid #59fbea;-webkit-appearance:none ;-webkit-border-radius: 0;border-radius:0;height:36px;background-color: rgb(0, 79, 74);color: #59fbea;margin-left:20px;width:180px;font-size: 20px;padding-top:0px;\"></center></li></ul></div>";


		
			
			echo "</form>";






//menu

echo "<br><br>";

echo "This is a free CHIA ASSET NAME service for everyone to add ID and NAME. You can add CATs ID and NAME to kevacoin blockchain. This speace number is 64731017<br><br>";

echo "It is better to use <a href=https://kevacoin.org/>kevacoin app</a> to add more CATs data like this <a href=https://keva.one/32103>keva.one/32103</a> You can use #chia #cats or other tages for searching in the app or  <a href=https://keva.one/search>keva.one/search</a><br>";


echo "<br><br><a href=https://CHIA.KEVA.APP>CHIA.KEVA.APP</a>";



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

<br>

</body>