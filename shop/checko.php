<?php

error_reporting(0);

$localip='127.0.0.1';



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


//list

$cinfo= $kpc->keva_filter("NcsfukSWRteWmCRRNFCRVLfX9AaYXBkKLt","",0);




	foreach($cinfo as $y_value=>$y)

			{
			
			extract($y);

			
			if(stristr($key,"KEVA_NS_")==true){continue;}
					if(stristr($key,"CAT.SALE")==true){continue;}
					if(stristr($key,"THEME")==true){continue;}
					if(stristr($key,"Congratulations")==true){continue;}

			$vauleo=$value;

			$valueo=str_replace("\n","<br>",$value);
			$valueo=str_replace("#chia#offer","",$valueo);




//offer

$pdata=array('offer' => $valueo);

$postfields="check_offer_validity";



$url="https://localhost/".$postfields;



            $postData = json_encode($pdata);
            
            
        
       
						$ch = curl_init();
						$params[CURLOPT_URL] = $url;   
						$params[CURLOPT_HEADER] = false; 
						$params[CURLOPT_RETURNTRANSFER] = true; 
						$params[CURLOPT_FOLLOWLOCATION] = true; 
						$params[CURLOPT_POST] = true;
						$params[CURLOPT_PORT] = 9257;
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

print_r(json_decode($content, true));

//print_r($output);

$total=json_decode($content, true);

//echo $key." ".$total['valid']."<br>";

if($total['valid']=="1"){echo "<font color=green>".$key." 1</font><br>";}else

	{
		
		
	
	//$kinfo= $kpc->keva_delete("NcsfukSWRteWmCRRNFCRVLfX9AaYXBkKLt",$key);

	echo $key." 0<br>";
	
	}

			}
		

?>