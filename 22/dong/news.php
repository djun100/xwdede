<?php
switch($_GET['type']){
	case 'latestnews':
		header("content-type:text/html; charset=gb2312");
		$ch = curl_init("http://www.fx678.com/news/NewsData.ashx?htmlid={$_GET['htmlid']}&time={$_GET['time']}");
		curl_setopt($ch, CURLOPT_REFERER, "http://www.fx678.com/news/default.shtml?{$_GET['time']}");
		
		curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/1234.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/1234.txt');
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		echo $result;
		curl_close($ch);
		//@unlink('1234.txt');
		break;
	case 'xmlnews':
		header("Content-type: text/xml");
		$ch = curl_init("http://www.fx678.com/news/textBanner.xml?time={$_GET['time']}");
		curl_setopt($ch, CURLOPT_REFERER, "http://www.fx678.com/news/default.shtml?{$_GET['time']}");
		
		curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/4321.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/4321.txt');
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		echo $result;
		
		break;
	default :
		echo '亲,参数错误！';
}