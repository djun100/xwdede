<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<?php 
$ch = curl_init();
$options = array(
		CURLOPT_URL=>'http://116.213.81.51/web/info/web_hq2.jsp',
		CURLOPT_REFERER => 'http://116.213.81.51/web/info/web_hq.jsp',
		CURLOPT_RETURNTRANSFER => 1
		);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$result = iconv('gb2312', 'utf-8', $result);
$result = str_replace('cellspacing="1"', 'cellspacing="0"', $result);
// $str = '<tbody><tr>
// 	<td width="10%" class="hq_tr hq_trnew">品种</td>
// 	<td width="10%" class="hq_tr hq_trnew">最新价</td>
// 	<td width="10%" class="hq_tr hq_trnew">最新含税价</td>
// 	<td width="10%" class="hq_tr hq_trnew">最高价</td>
// 	<td width="10%" class="hq_tr hq_trnew">最低价</td>
// 	<td width="10%" class="hq_tr hq_trnew">平均价</td>
// 	<td width="10%" class="hq_tr hq_trnew">平均含税价</td>
// 	<td width="10%" class="hq_tr hq_trnew">涨跌</td>
// 	<td width="10%" class="hq_tr hq_trnew">成交量</td>
// 	<td width="10%" class="hq_tr hq_trnew">订货量</td>
//   </tr>';
// $result = str_replace('<tbody>',$str,$result);
echo $result;
curl_close($ch);
?>