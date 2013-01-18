var now,hours,minutes,seconds,timeValue;
var udt=null;//更新时间
var xmlHttp = null;

String.prototype.replaceAll = function (s1, s2) {
    return this.replace(new RegExp(s1, "gm"), s2);
}


function readyStateChangeHandle()
{
	
    if(xmlHttp.readyState==4)
     {
        if(xmlHttp.status==200)
         {
             //var xmlDOM = xmlHttp.responseXML;
        	var xmlDOM = xmlHttp.responseXML;
            var xmlRoot=xmlDOM.documentElement;
            try
             {
                var showDiv="";
                udt=xmlRoot.getElementsByTagName("updatetime");
                var tagTitle=xmlRoot.getElementsByTagName("title");
                for(var i=0;i<tagTitle.length;i++)
                {
            		var title=tagTitle[i].firstChild.data.substring(tagTitle[i].firstChild.data.lastIndexOf('|')+1);
            		var pubDate=tagTitle[i].firstChild.data.substring(tagTitle[i].firstChild.data.indexOf('|'),27);
                    var link=tagTitle[i].firstChild.data.substring(9,17)+'/'+tagTitle[i].firstChild.data.substring(9,27)+'.html';
                    var day=tagTitle[i].firstChild.data.substring(0,2)+'/'+tagTitle[i].firstChild.data.substring(2,4);
                    var hm=tagTitle[i].firstChild.data.substring(4,6)+':'+tagTitle[i].firstChild.data.substring(6,8);
                    var tooltip=title;

                    title = title.toString().replaceAll("&nbsp;", " ");
                    
                    style="";
                    topcss="";
                    if(i%2!=0)
                    {
                        style="class='bg#CCC'";
                    }	
                    if(i==0)
                    {
                        topcss = "class='blue b'";
                     
                    }
                    else
                    {
                       
                    }
                    
                    
                    var str="<li "+style+"><a mref='/C/"+link+"' target=_blank title='"+tooltip+"'><span "+topcss+">"+hm+" " +"[快讯] "+title+"</span></a></li>";
				   //var str="<li "+style+"><span "+topcss+">"+hm+" " +"[快讯] "+title+"</span></li>";
                    showDiv+=str;
                } 
                document.getElementById("loadnews").innerHTML="<ul class='center01_contentl'>"+showDiv+"</ul>";              
             }
            catch(e)
             {
                 
             }
         }
     }  
     
}


function newsAjaxRequest(methodName, requestUrl,asyn)
{ 
 
  var b = "Msxml2.XMLHTTP";
		try {
			xmlHttp = new ActiveXObject(b);
				
		}
		catch (c) {
			try{
				b = "Microsoft.XMLHTTP";
				xmlHttp = new ActiveXObject(b);
									
			}
			catch (d){
			}
		}
		if(!xmlHttp){
			try{
			 xmlHttp = new XMLHttpRequest;
			
			}catch(e){
				
			}
		}
     xmlHttp.onreadystatechange = methodName;
     xmlHttp.open("GET",requestUrl,asyn);
     xmlHttp.send(null);
}
function getUpdateTime()
{
    if(xmlHttp.readyState==4)
     {
        if(xmlHttp.status==200)
         {  
            try
             {
                var xmlDOM=xmlHttp.responseXML;
                var xmlRoot=xmlDOM.documentElement;
                udt=xmlRoot.getElementsByTagName("updatetime");
              }
              catch(e)
              {
                
              }
            }
           }
}
function newsLoadXml()
{
  /*  if(udt==null)
    {
      newsAjaxRequest(getUpdateTime);
      setTimeout("newsLoadXml()",5000);
    }
    else
    {
      newsAjaxRequest(readyStateChangeHandle);
      setTimeout("newsLoadXml()",udt[0].firstChild.data);
    }
    
    */

    newsAjaxRequest(readyStateChangeHandle, "dong/news.php?type=xmlnews&time=" + new Date().getTime(), false);
    setInterval(GetLatestNews, 5000);
  
}

function GetLatestNews() {
    var newshtml = document.getElementById("loadnews").innerHTML;
    var lasthtmlid = newshtml.substring(newshtml.indexOf("/C/") + 3, newshtml.indexOf(".html"));
    lasthtmlid = lasthtmlid.substring(lasthtmlid.indexOf("/")+1);
    newsAjaxRequest(GetLastCallback, "dong/news.php?type=latestnews&htmlid=" + lasthtmlid + "&time=" + new Date().getTime(), true);
   
}

function GetLastCallback() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var s = xmlHttp.responseText;
        var oldNews = GetOldNews();
        var latstNewsArray = [];
        if (s.length > 10) latstNewsArray = s.split('^');
       
        var showDiv = "";
        for (var i = 0; i < latstNewsArray.length; i++) {
            var news = latstNewsArray[i].split('|');
            var date = news[0];
            var htmlid = news[1];
            var title = news[2];
            var tooltip = title;
            title = title.replaceAll("&nbsp;", " ");
            if (i == 0) {
               
            }
            else {
               
            }

            var link = htmlid.substring(0,8) + "/" + htmlid + ".html";
            var hm=date.substring(4,6)+":"+date.substring(6,8);

            var str = "<li><a mref='/C/" + link + "' target=_blank title='" + tooltip + "'><span>" + hm + " " + "[快讯] " + title + "</span></a></li>";
			//var str = "<li><span>" + hm + " " + "[快讯] " + title + "</span></li>";
            showDiv += str;
        }

        for (var i = 0; i < oldNews.length; i++) {
            showDiv += oldNews[i];
            if (i + latstNewsArray.length >= (16-1)) break;
        }
        document.getElementById("loadnews").innerHTML = "<ul class='center01_contentl'>" + showDiv + "</ul>";
        if (s.length > 10)
         changeCss();
      
        
    }
} 

 function GetOldNews() {
        var newshtml = document.getElementById("loadnews").innerHTML;
         
         var pattern = /<li[^>]*?>([\s\S]*?)<\/li>/ig
         var s_news = newshtml.match(pattern);

         return s_news;
     }

     function changeCss() {
         var li = document.getElementById("loadnews").getElementsByTagName("li");
         for (var i = 0; i < li.length; i++) {
             if (i == 0) {
                 li[i].getElementsByTagName("span")[0].className = "blue b";
                 li[i].className = "";
             }
             else if (i % 2 == 0) {
             li[i].className = "";
             li[i].getElementsByTagName("span")[0].className = "";
             }
             else {
                 li[i].className = "bg#CCC";
                 li[i].getElementsByTagName("span")[0].className = "";
             }
         }
     }
    
    
  