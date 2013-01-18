<?php
switch (intval($_GET['dong'])) {
	case 1:
		$rurl = 'http://quote.go24k.com:8080/quoteshowbigshxhhq.asp';
		$url = 'http://quote.go24k.com:8080/data/SjsData.asp?size=b&key='.$_GET['key'].$rurl.'&temp='.$_GET['temp'];
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_REFERER, $rurl);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		echo $result;
		curl_close($ch);
	break;
	case 2:
		$rurl = 'http://quote.go24k.com:8080/quoteshowbiggjgjs.asp';
		$url = 'http://quote.go24k.com:8080/data/GjData.asp?size=b&code=gj&key='.$_GET['key'].$rurl.'&temp='.$_GET['temp'];
		//$url = 'http://quote.go24k.com:8080/data/GjData.asp?size=b&code=gj&key=167735http://quote.go24k.com:8080/quoteshowbiggjgjs.asp&temp=0.9929777646902949';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_REFERER, $rurl);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		echo $result;
		curl_close($ch);
	break;
	case 3 :
		$rurl = 'http://quote.go24k.com:8080/quoteshowbiggjjy.asp';
		$url = 'http://quote.go24k.com:8080/data/QihuoData.asp?size=b&key='.$_GET['key'].$rurl.'&temp='.$_GET['temp'];
		//$url = 'http://quote.go24k.com:8080/data/QihuoData.asp?size=b&key=167735http://quote.go24k.com:8080/quoteshowbiggjjy.asp&temp=0.746997733367607';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_REFERER, $rurl);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result;
	break;
	default:
		echo '亲,参数错误！';
	break;
}


