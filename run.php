<?php 


 	set_time_limit(0);
  	error_reporting(0);
  	date_default_timezone_set('Asia/Jakarta');
	system('clear');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */
$date = date('d F Y');
function nontifer($result, $x, $page, $nontifer, $date, $red, $green2, $putih){
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "https://hackersid.com/api/hacker/".$nontifer."/".$page);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec ($curl);
    curl_close ($curl);
    $result = explode('"url":"http:\/\/', $result);
    $result = explode('\/', $result[$x]);
	$result = explode('","system":"', $result[0]);
    if($result[0] == null){
		echo "{$red} - {$putih} Failed to retrieve data\n";
	}else{
	$open = fopen('Result/nontifer '.$nontifer.' - '.$date.'.txt', 'a');
	fwrite($open, $result[0]."\n");
	echo " {$green2}- {$putih}".$result[0]."\n";
    return $result[0];
	}
}

function home($url, $i, $date, $red, $green2, $putih){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$res = curl_exec($ch);
	$res = explode('<td width="45px">&nbsp;</td>', $res);
	$res = explode('</td>', $res[$i]);
	$res = explode('<td>', $res[0]);
	$res = explode('/', $res[1]);
	$res = explode('","system":"', $res[0]);
	if($res[0] == null){
		echo "{$red} - {$putih} Failed to retrieve data\n";
	}else{
	$open = fopen('Result/home - '.$date.'.txt', 'a');
	fwrite($open, $res[0]."\n");
	echo " {$green2}- {$putih}".$res[0]."\n";
    return $res[0];
	}

}
echo "{$green2} 	___________________________
	< root@indoxploit:~# KM37ID >
	 ---------------------------
	   \         ,        ,
	    \       /(        )`
	     \      \ \___   / |
	            /- _  `-/  '
	           (/\/ \ \   /\
	           / /   | `    \
	           O O   ) /    |
	           `-^--'`<     '
	          (_.)  _  )   /
	           `.___/`    /
	             `-----' /
	<----.     __ / __   \
	<----|====O)))==) \) /====>
	<----'    `--' `.__,' \
	             |        |
	              \       /
	        ______( (_  / \______
	      ,'  ,-----'   |        \
	      `--{__________)        \/
\n{$putih}";
echo "  [ {$lblue2}>_ {$putih}] root@indoxploit:~# sudo su \n";sleep(2);
$pilih = readline("  [ >_ ] [sudo] password for root: ");
echo "  [ {$lblue2}>_ {$putih}] Home Cloud:~# number 1 \n";
echo "  [ {$lblue2}>_ {$putih}] Nontifer:~# number 2 \n";
$key = readline("  [ >_ ] root@indoxploit:~#/number:~#  ");
mkdir("Result");
if ($key == 1) {
	
for ($n=1; $n < 30; $n++) { 
	$url = "https://hackersid.com/archive/".$n;
for ($i=1; $i < 30; $i++) { 
		home($url, $i, $date, $red, $green2, $putih);
	}
}

}elseif ($key == 2) {
$nontifer = readline("  [ >_ ] root@indoxploit:~#/nontifer:~# ");
for ($page=1; $page <= 30; $page++) { 
	for ($x=1; $x <= 30; $x++) {
		nontifer($result, $x, $page, $nontifer, $date, $red, $green2, $putih);
	}	
 }
}

 ?>
