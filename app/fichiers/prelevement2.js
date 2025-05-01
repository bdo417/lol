//////////////////////////////////////////////////////////
// Variable globale, pour callback Ajax.
var main_container;
var div_libelle_presta;
var DEBUG=0;
//////////////////////////////////////////////////////////
// Class pour mise à jour du contenu (liste prélèvements )
function contentUpdater(method, uri, cookie_path, container, divprestation)
{
	this.method = method;
	this.uri = uri;
	this.cookie_path = ""; // deprecated ...
	// Nos container
	this.main_container     = container; // Le contenu en lui même.
	// Nos cookies
	this.idPrestation 	= 0;
	this.numeroPage 	= 0; // 1-99
	this.parametreDeTri 	= 0; // 1: date, 2: statut, 3: créancier, 4: montant, 5: signalétique
	this.sensTri 	= 0; // C: croissant D: décroissant 
	// Copie dans ls variables globales, car faire sans c'est relou
	main_container = container;
	div_libelle_presta = divprestation;
}

function analyse_reponse(transport)
{
	try {
		var root = transport.responseXML.documentElement;
		var code = parseInt(root.getElementsByTagName('code').item(0).firstChild.data);
		if(DEBUG) alert("code" + code);
		if(code == 0)
		{
			var data = root.getElementsByTagName('data').item(0).firstChild.data;
			$jNgp("#"+main_container).html(data);
		}
		else if(code == 1)
		{
			if(DEBUG) alert("/errorCnx.html");
			top.location.replace("/errorCnx.html");
		}
		else
		{
			var clientMsg = root.getElementsByTagName('functionalMsg').item(0).firstChild.data;
			displayErrorMsg(clientMsg);
		}
	} catch (e) {
		displayErrorMsg("");
	}
}

function displayErrorMsg(text)
{
	if(text == "")
		text = "Le service est momentan&eacute;ment indisponible. Merci de bien vouloir nous en excuser.";
	if(text == "niv_auth_insuff")
	{
		text = "Votre session a expir&eacute;. Merci de bien vouloir vous identifier &agrave; nouveau.";
	}

	text2 = "<div style=\"text-align: center; font-weight: bold; color: #308DFF; margin-top: 50px; margin-bottom: 250px;\">"  + text + "</div>"
	try {
		$jNgp("#"+main_container).html(text2);
	} catch (e) {
		if(DEBUG) alert("text : " + text2 + " -- " + e.message);
	}
}

function ajax_call()
{

	var urlcible;

	urlcible = this.uri + '?';
	urlcible += "numeroPage=" + this.numeroPage;
	urlcible += "&parametreDeTri=" + this.parametreDeTri;
	urlcible += "&sensTri=" + this.sensTri;
	urlcible += "&idPrestation=" + this.idPrestation;
	
	this.xml = new Ajax.Request( urlcible, {
		method: this.method,
		onSuccess: function success(transport)
				{
					if(DEBUG) alert("succes");
					analyse_reponse(transport);
					return true;
				},
		onFailure: function failure(transport)
				{
					displayErrorMsg("");
					return true;
				}
	});
}
contentUpdater.prototype.ajax_call = ajax_call;

function sort(param)
{
	var previousParam = this.parametreDeTri;

	// On determine quel est le type de tri
	this.parametreDeTri = param;

	if (this.parametreDeTri==previousParam) {
		// on inverse le sens
		this.sensTri = (this.sensTri=="C") ? "D" : "C";
	} else {
		// changement de critere => sens a C sauf cas particuliers
		this.sensTri = "C";
		if (document.location.href.indexOf("liste_operations")>=0) {
			if ( (this.parametreDeTri==1) || (this.parametreDeTri==5) )
				this.sensTri = "D";
		} else if (document.location.href.indexOf("liste_contestation")>=0) {
			if (this.parametreDeTri==1)
				this.sensTri = "D";
//		} else if (document.location.href.indexOf("liste_creanciers")>=0) {
//			if (this.parametreDeTri==2)
//				this.sensTri = "D";
		}
	}
	this.numeroPage = 1;
	this.ajax_call();
}
contentUpdater.prototype.sort = sort;

function gotoPage(page)
{
	if (page==this.numeroPage) return;
	this.numeroPage = page;
	this.ajax_call();
}
contentUpdater.prototype.gotoPage = gotoPage;

// Format de l'id: numPrestation#libelle
function gotoPrestation(presta)
{
	var presta_array;
	presta_array = presta.split("#");

	this.numeroPage = 1; // On retourne à la premiere page 
	this.idPrestation = presta_array[0];
	$jNgp("#"+div_libelle_presta).html(presta_array[1]);

	this.ajax_call();
}
contentUpdater.prototype.gotoPrestation = gotoPrestation;

