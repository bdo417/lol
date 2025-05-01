<!-- begin usabilla live embed code -->
if (typeof idUsabilla !== 'undefined') {
	/*{literal}<![CDATA[*/window.lightningjs||function(c){function g(b,d){d&&(d+=(/\?/.test(d)?"&":"?")+"lv=1");c[b]||function(){var i=window,h=document,j=b,g=h.location.protocol,l="load",k=0;(function(){function b(){a.P(l);a.w=1;c[j]("_load")}c[j]=function(){function m(){m.id=e;return c[j].apply(m,arguments)}var b,e=++k;b=this&&this!=i?this.id||0:0;(a.s=a.s||[]).push([e,b,arguments]);m.then=function(b,c,h){var d=a.fh[e]=a.fh[e]||[],j=a.eh[e]=a.eh[e]||[],f=a.ph[e]=a.ph[e]||[];b&&d.push(b);c&&j.push(c);h&&f.push(h);return m};return m};var a=c[j]._={};a.fh={};a.eh={};a.ph={};a.l=d?d.replace(/^\/\//,(g=="https:"?g:"http:")+"//"):d;a.p={0:+new Date};a.P=function(b){a.p[b]=new Date-a.p[0]};a.w&&b();i.addEventListener?i.addEventListener(l,b,!1):i.attachEvent("on"+l,b);var q=function(){function b(){return["<head></head><",c,' onload="var d=',n,";d.getElementsByTagName('head')[0].",d,"(d.",g,"('script')).",i,"='",a.l,"'\"></",c,">"].join("")}var c="body",e=h[c];if(!e)return setTimeout(q,100);a.P(1);var d="appendChild",g="createElement",i="src",k=h[g]("div"),l=k[d](h[g]("div")),f=h[g]("iframe"),n="document",p;k.style.display="none";e.insertBefore(k,e.firstChild).id=o+"-"+j;f.frameBorder="0";f.id=o+"-frame-"+j;/MSIE[ ]+6/.test(navigator.userAgent)&&(f[i]="javascript:false");f.allowTransparency="true";l[d](f);try{f.contentWindow[n].open()}catch(s){a.domain=h.domain,p="javascript:var d="+n+".open();d.domain='"+h.domain+"';",f[i]=p+"void(0);"}try{var r=f.contentWindow[n];r.write(b());r.close()}catch(t){f[i]=p+'d.write("'+b().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};a.l&&setTimeout(q,0)})()}();c[b].lv="1";return c[b]}var o="lightningjs",k=window[o]=g(o);k.require=g;k.modules=c}({});
	window.usabilla_live = lightningjs.require("usabilla_live", "//w.usabilla.com/"+idUsabilla+".js");
	//Modification du z-index
	window.usabilla_live("setButtonZIndex", "500");
	/*]]>{/literal}*/
	/*
	 * Permission is hereby granted, free of charge, to any person obtaining a
	 * copy of this software and associated documentation files (the
	 * "Software"), to deal in the Software without restriction, including
	 * without limitation the rights to use, copy, modify, merge, publish, dis-
	 * tribute, sublicense, and/or sell copies of the Software, and to permit
	 * persons to whom the Software is furnished to do so, subject to the fol-
	 * lowing conditions:
	 *
	 * The above copyright notice and this permission notice shall be included
	 * in all copies or substantial portions of the Software.
	 *
	 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
	 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABIL-
	 * ITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT
	 * SHALL THE AUTHOR BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
	 *
	 */

	/**
	 * setEventCallback Function for Usabilla for Websites
	 *
	 * Entails the following:
	 * - Remove any URL/Search parameters from the feedback.
	 */

	window.usabilla_live('setEventCallback', function(
		category,
		action,
		label,
		value
	) {
		var type = null;
		//Fonction SG
		function o(e){
			function n(a){
				return a=(a=(a=(a=(a=(a=(a=(a=(a=(a=(a=a.toLowerCase()).replace(new RegExp("[àáâãäå]","g"),"a")).replace(new RegExp("æ","g"),"ae")).replace(new RegExp("ç","g"),"c")).replace(new RegExp("[èéêë]","g"),"e")).replace(new RegExp("[ìíîï]","g"),"i")).replace(new RegExp("ñ","g"),"n")).replace(new RegExp("[òóôõö]","g"),"o")).replace(new RegExp("œ","g"),"oe")).replace(new RegExp("[ùúûü]","g"),"u")).replace(new RegExp("[ýÿ]","g"),"y")
			}
			var t=new XMLHttpRequest;
			var strReplace = " [Informations filtrées] ";
			if(t.open("GET","/pri/static/feedback/mots-sensibles.txt",!1),t.send(),200===t.status){
				var f=t.responseText.split("\n");
				e=n(e);
				for(var r=0;r<f.length;r++){
					word=n(f[r]),word=word.trim();
					var c=new RegExp("\\b"+word+"\\b","gi");
					e=e.replace(c,strReplace);
				}
			} else console.log(t.status+" ("+t.statusText+")");
			e=e.replace(/\b[a-z0-9]*([.|\-|_][a-z0-9]*)*@[a-z0-9]*\.[a-z]{1,5}\b/gi,strReplace).replace(/^[0]\d([ |.|\-|/]?\d{2}){4}(?=\s|$)/g,strReplace).replace(/[ ][0]\d([ |.|\-|/]?\d{2}){4}(?=\s|$)/g,strReplace).replace(/\b(https?:\/\/)?(www\.)?\S+\.(com|fr)\b/gi,strReplace).replace(/\b[a-z]{2}[ |\-|_]?[0-9]{3}[ |\-|_]?[a-z]{2}(?=\s|\.|$)\b/gi,strReplace).replace(/\b[0-9]{2}[ |\-|_]?[a-z]{2}[ |\-|_]?[0-9]{5}(?=\s|\.|$)\b/gi,strReplace).replace(/\b[0-9]{4}([ |\-|_]?[0-9]{4}){3}(?=\s|\.|$)\b/g,strReplace).replace(/\b[1|2][ |\-|_]?[0-9]{2}[ |\-|_]?([0][1-9]|[1][0-2])[ |\-|_]?[0-9]{2}([ |\-|_]?[0-9]{3}){2}[ |\-|_]?([0-9]{2})?(?=\s|\.|$)\b/g,strReplace).replace(/\b[0-9]{5}[ |\-|_]?[0-9]{5}[ |\-|_]?[0-9]{11}[ |\-|_]?[0-9]{2}(?=\s|\.|$)\b/g,strReplace).replace(/\b[0-9]{12}(?=\s|\.|$)\b/g,strReplace).replace(/\b([a-z]{4}(FR|RE|MQ|GF|PF|NC)([a-z]|[0-9]){2})\b/gi,strReplace).replace(/\b[0-9]{11}\b/g,strReplace).replace(/\bFR\d{2}[ |_|-]?\d{4}[ |_|-]?\d{4}[ |_|-]?\d{4}[ |_|-]?\d{4}[ |_|-]?\d{4}[ |_|-]?\d{3}\b/gi,strReplace).replace(/\b\d{1,2}[ -/.]\d{1,2}[ -/.]\d{2,4}\b/gi,strReplace).replace(/[0-9]{4,}/g,strReplace);
			return e;
		}

		function deactivatePrototype() {
			if(window.Prototype) {
					delete Object.prototype.toJSON;
					delete Array.prototype.toJSON;
					delete Hash.prototype.toJSON;
					delete String.prototype.toJSON;
			}
		}
		/**
		 * Function for masking any privacy sensitive information before sending it to the server.
		 * @param {*} vData
		 */
		function sendReplacement(vData) {
			//Désactivation de prototype pour éviter conflit avec JSON.stringify
			deactivatePrototype();
			//console.log("before action vData: "+vData);
			var data = JSON.parse(vData);
			var URL = data.url.split("?");
			data.url = URL[0];
			if (typeof data.comment !== 'undefined') {
				//console.log("before action data.comment: "+data.comment);
				data.comment = o(data.comment);
				//console.log("after action data.comment: "+data.comment);
			}
			if (typeof data.custom !== 'undefined') {
				//console.log("before action custom: "+data.custom);
				var custom = data.custom;
				if (custom.comment) {
					//console.log("before action custom.comment: "+custom.comment);
					custom.comment = o(custom.comment);
					//console.log("after action custom.comment: "+custom.comment);
				}
				data.custom = custom;
			}
			vData = JSON.stringify(data);
			//console.log("after action vData: "+vData);
			//console.log("before action arguments: "+typeof arguments+"\n arguments[0]: "+ arguments[0]);
			realSend.apply(this, arguments);
		}

		/**
		 * Send replacement request to Usabilla that contains the masked feedback.
		 */
		var realSend = XMLHttpRequest.prototype.send;
		ub_window = document.getElementById(
			'lightningjs-frame-usabilla_live_feedback'
		).contentWindow;
		ub_window.XMLHttpRequest.prototype.send = sendReplacement;
		if (window.XDomainRequest) {
			realSend = XDomainRequest.prototype.send;
			ub_window.XDomainRequest.prototype.send = sendReplacement;
		}

		// Switch for the different types of events that can occur
		switch (action) {
		// This event is raised when a user starts the feedback process, this can be by clicking the feedback button or via a Boost campaign.
		case 'Feedback:Open':
			type = 'feedback';
			xt_click(this,'C',19,'open_feedback','A');
			break;

			// This event is raised when a user has successfully completed the feedback process.
		case 'Feedback:Success':
			type = 'feedback';

			break;

			// Event of the Campaign form that shows up
		case 'Campaign:Open':
			type = 'campaign';
			break;

			// This event is raised whenever a user actively closes a campaign by either clicking on the close button or the cancel link.
		case 'Campaign:Close':
			type = 'campaign';
			break;

			// This event is raised in addition to the Campaign Success event when a Boost campaign is successful.
		case 'Campaign:Feedback Clicked':
			type = 'campaignClose';
			break;

			// This event is raised whenever a campaign is successful:
			// - gives feedback while a boost campaign is active
			// - clicks the recruit button for a recruit campaign
			// - finishes a slide-out or full survey campaign
		case 'Campaign:Success':
			type = 'campaign';
			break;

			// This event is raised whenever a user clicks the submit button for a multi-page campaign (slideout and full survey campaigns).
		case 'Campaign:Page switch':
			type = 'campaign';
			break;
		}

		if (action != 'Feedback:Open') {
			return;
		}
	});
}
else {console.log("Pas d'identifiant Usabilla")};
