function Start(url, key, sTime) {
	url = url + "&key=" + eval(key * 5);
	AjaxLoad(url);
	window.setInterval("AjaxLoad('" + url + "')", sTime);
}
function AjaxLoad(Newurl) {
	Newurl = Newurl + "&temp=" + Math.random();
	var xmlHttp = false;
	xmlHttp = CreateHttpRequest();
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4) {
			if (xmlHttp.status == 200) {
				message = xmlHttp.responseText;
				if (message == "") {
					location.reload();
				}
				ApplyTemplate(eval('(' + message + ')'));
			}
		}
	}
	xmlHttp.open("get", Newurl, true);
	xmlHttp.setRequestHeader("Content-Type", "html/text; charset=utf-8");

	xmlHttp.send(null);
}
function CreateHttpRequest() {
	try {
		xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e2) {
			xmlHttp = false;
		}
	}
	if (!xmlHttp && typeof XMLHttpRequest != 'undefined') {
		xmlHttp = new XMLHttpRequest();
		if (xmlHttp.overrideMimeType) {
			xmlHttp.overrideMimeType('text/xml');
		}
	}
	return xmlHttp;
}