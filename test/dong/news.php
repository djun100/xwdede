<?php
switch($_GET['type']){
	case 'latestnews':
		header("content-type:text/html; charset=gb2312");
		$ch = curl_init("http://www.fx678.com/news/NewsData.ashx?htmlid={$_GET['htmlid']}&time={$_GET['time']}");
		curl_setopt($ch, CURLOPT_REFERER, "http://www.fx678.com/news/default.shtml?{$_GET['time']}");
		
		curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/1234.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/1234.txt');
		
		
		$ip = '202.103.229.40';
		$headers['CLIENT-IP'] = $ip; 
		$headers['X-FORWARDED-FOR'] = $ip; 
		 
		$headerArr = array();  
		foreach( $headers as $n => $v ) {  
			$headerArr[] = $n .':' . $v;   
		}
		curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );  //构造IP
		
		curl_setopt($ch ,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
		
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
		//file_put_contents('xmlBanner.xml',file_get_contents('http://www.fx678.com/news/textBanner.xml'));
		curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/4321.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/4321.txt');
		
		$ip = '202.103.229.40';
		$ip = gen_ip();
		$headers['CLIENT-IP'] = $ip; 
		$headers['X-FORWARDED-FOR'] = $ip; 
		 
		$headerArr = array();  
		foreach( $headers as $n => $v ) {  
			$headerArr[] = $n .':' . $v;   
		}
		curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );  //构造IP
		
		curl_setopt($ch ,CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
		
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER , 1);
		$result = curl_exec($ch);
		file_put_contents('xmlBanner.xml',$result);
		echo $result;
		
		break;
	default :
		echo '亲,参数错误！'; 
}

function gen_ip(){
	
	 $ip_long = array(
            array('607649792', '608174079'), //36.56.0.0-36.63.255.255
            array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
            array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
            array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
            array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
            array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
            array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
            array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
            array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
            array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
        );
        $rand_key = mt_rand(0, 9);
        $ip= long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
		return $ip;
}