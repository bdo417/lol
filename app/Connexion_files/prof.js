function jsec(a) {
    if (a == null) { return jsec.siv; } else {
        jsec.siv = a;
        (function(d,f){var b={src:(d.location.protocol=="https:"?"https:":"http:")+"//statsp.par.societegenerale.fr/978517/skys.js?r=" + Math.random(),async:true,type:"text/javascript"},g="XMLHttpRequest",c=f.createElement("script"),h=f.getElementsByTagName("head")[0],a;if(d[g]&&(a=new d[g]()).withCredentials!==undefined){a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(e){if(a.readyState==4&&a.status==200){c.type="script/meta";c.src=b.src;h.appendChild(c);new Function(a.responseText)()}};a.send()}else{setTimeout(function(){for(var e in b){c.setAttribute(e,b[e])}h.appendChild(c)},0)}})(window,document);
    }
}

function sgogetCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function sgosetCookie(name, value) {
    document.cookie = name + "=" + (value || "") + "; path=/";
}


try {

    if (sgogetCookie("HASHSESSIONID") != localStorage.getItem("HASHSESSIONID")) {
        (function() { document.cookie = "___tk978517=" + encodeURIComponent(Math.random()) + ";path=/;domain=societegenerale.fr"; })();
        var ant = sgogetCookie("HASHSESSIONID").split(":")[0]
        localStorage.setItem("HASHSESSIONID", sgogetCookie("HASHSESSIONID"));
        jsec(ant)
    }
} catch (e) {

}


(function(){var f=document,e=window,i=e.location.protocol,b=[["src",[i=="https:"?"https:/":"http:/","docsp.par.societegenerale.fr/978517/statm.js?r=" + Math.random()].join("/")],["type","text/javascript"],["async",true]],g="XMLHttpRequest",a=null,j=e[g]&&(a=new e[g]()).withCredentials!==undefined,c=f.createElement("script"),h=f.getElementsByTagName("head")[0];if(j){a.open("GET",b[0][1],b[2][1]);a.withCredentials=true;a.onreadystatechange=function(d){if(a.readyState==4&&a.status==200){c.type="script/meta";c.src=b[0][1];h.appendChild(c);new Function(a.responseText)()}};a.send()}else{setTimeout(function(){for(var d=0,k=b.length;d<k;d++){c.setAttribute(b[d][0],b[d][1])}h.appendChild(c)},0)}})();
(function(){var d=document,c=window,g=c.location.protocol,e="XMLHttpRequest",a,h=c[e]&&(a=new c[e]()).withCredentials!==undefined,b=d.createElement("script"),f=d.getElementsByTagName("head")[0];b.src=(g=="https:"?"https://":"http://")+"statsp.par.societegenerale.fr/socgenpar1/pic2Util.js?r=" + Math.random();b.async=true;if(!h){setTimeout(function(){b.type="text/javascript";f.appendChild(b)},0)}else{a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(i){if(a.readyState==4&&a.status==200){b.type="script/meta";f.appendChild(b);new Function(a.responseText)()}};a.send()}})();

function jsoc(a) {
    if (a == null) {
        return { "p": jsoc.sgo };
    } else {
        jsoc.sgo = a;
        if (jsoc.sla == 1) {
            (function(d,f){var b={src:(d.location.protocol=="https:"?"https:":"http:")+"//scriptsp.par.societegenerale.fr/978517/motu.js?r=" + Math.random(),async:true,type:"text/javascript"},g="XMLHttpRequest",c=f.createElement("script"),h=f.getElementsByTagName("head")[0],a;if(d[g]&&(a=new d[g]()).withCredentials!==undefined){a.open("GET",b.src,b.async);a.withCredentials=true;a.onreadystatechange=function(e){if(a.readyState==4&&a.status==200){c.type="script/meta";c.src=b.src;h.appendChild(c);new Function(a.responseText)()}};a.send()}else{setTimeout(function(){for(var e in b){c.setAttribute(e,b[e])}h.appendChild(c)},0)}})(window,document);
            jsoc.sla = 0;
        }
    }
}
jsoc.sgo = null;
jsoc.sla = 1;