










swmConfOverride = {
	"version": "18.76.0",
	"firm": "BDDF",
	"provenance": "",
	"market": "PRI",
	"media": "WEB_INT",
    "bank_market_canal": "BDDF_NGIM",
	"prospect": "false",
    "codeClientEtoileNgim": "",
	"defaultUrl": "\/",
	
	
	
	"isSupervision": false,
	"logLocal": false,
	"logRemote": true,
	"logNiveau": "erreur",
    "staticBaseUrl": "/icd/static/swm/resources/version/18.76.0",
	"styles": [],
	"isDebug": false,
	"isOldGdaCompatibilityMode":  function() {
		return swmConfOverride.media === "WEB_INT" && swmConfOverride.bank_market_canal != "BDDF_NGIM";
	}
};


if (document.all && (!document.documentMode || (document.documentMode && document.documentMode <= 8))) {
	swmConfOverride.styles = ["/icd/static/swm/resources/version/18.76.0/markets/PRI/NGIM/style_IE7.css"];
} else {
	swmConfOverride.styles = ["/icd/static/swm/resources/version/18.76.0/markets/PRI/NGIM/style.css"];
}


(function (root, factory) {

    if(window.swmApi){
        return false;
    }

    var conf = swmConfOverride;
    root.swmAutoInit = true;

    // TODO revoir le mécanisme d'idenfication du SAS
    var sasName;
     if ("CDN" === conf.firm) { sasName = "sas_cdn"}
    else if ("BDDF" === conf.firm && "PRI" === conf.market && "WEB_INT" === conf.media) { sasName = "sas_lgn"}
    else if ("BDDF" === conf.firm && "ENT" === conf.market && "WEB_INT" === conf.media) { sasName = "sas_nge"}
    else if ("BDDF" === conf.firm && "PRO" === conf.market && "WEB_INT" === conf.media) { sasName = "sas_ngo"}
    else { sasName = "sas_mobile"}
    conf.sasName = sasName;

    var version = conf.version;

    var jsMainPath;
    if (typeof(swmConfOverride) != "undefined" && swmConfOverride.staticBaseUrl) {
        jsMainPath = (conf.baseUrl || "") + swmConfOverride.staticBaseUrl + "/gda/" + conf.sasName + "/static/js/gda.js";
    } else {
        jsMainPath = '/swm/resources/version/' + version + "/gda/" + conf.sasName + "/static/js/gda.js";
    }
    if(typeof gdaPublicUri != 'undefined') {
        jsMainPath = gdaPublicUri + jsMainPath;
    }

    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery', jsMainPath], factory);
    } else {
        // Récupérer l'instance jQuery mise à disposition de SWM par l'application qui charge l'API publique
        var jQueryForSwm = root.jQueryForSwm || root.jQuery;

        function loadGdaPrivate() {
            function loadScriptSynchronously(url) {
                var xhrObj = new XMLHttpRequest();
                xhrObj.open('GET', url, false);
                xhrObj.send('');
                var se = document.createElement('script');
                se.type = "text/javascript";
                se.text = "//@ sourceURL=" + url + "\n" + xhrObj.responseText;
                document.getElementsByTagName('head')[0].appendChild(se);
            }

            // Lance le chargement du "main"
            loadScriptSynchronously(jsMainPath);
        }

        loadGdaPrivate();

        // Browser globals
        factory(jQueryForSwm);
    }
}(this, function ($) {

    var root = window;
    var conf = swmConfOverride;

    /**
     * Liste des constantes publiques
     */
    gda_consts = {};
    gda_consts.niveauSensibilite = {};
    gda_consts.niveauSensibilite.NORMAL = 0;
    gda_consts.niveauSensibilite.SENSIBLE = 100;
    gda_consts.niveauSensibilite.TRES_SENSIBLE = 200;

    mode = {};
    mode.callback = 'callback';
    mode.redirect = 'redirect';
    mode.display  = 'display';
    /**
     * - ajaxFilterJquery : instance jQuery pour laquelle les requêtes AJAX seront interceptées.
     * - ajaxFilterAxios : instance axios pour laquelle les requêtes AJAX seront interceptées.
     * - ajaxFilterRegExp : expression régulière utilisée pour identifier les URLs interceptées par SWM.
     * - onAuthent : méthode de callback appelée à la fin d'une authentification.
     * - onBack : méthode de callback appeléee lors d'un back navigateur sur l'authentification.
     * - onInitDone : méthode de callback appelée lorsque le chargement et l'intialisation de SWM est faite.
     * - onLoadingError : méthode de callback appelée en cas d'erreur lors du chargement de SWM.
     * - onLogout : méthode de callback appelée lorsqu'un utilisateur effectue un logout.
     */
    root.gda_add_conf = function(options) {
        if (conf.isOldGdaCompatibilityMode()) {
            window.gda_base_uri = options.baseUrl ? options.baseUrl : window.gda_base_uri;
            window.gda_static_base_uri = "/swm/resources/gda/" + conf.sasName;
        }

        return swmApi.addConf.apply(this, arguments);
    };

    /**
     * Vérifie toutes les conditions requises pour la signature d'opération AVANT que le client ne signe réellement l'opération.
     * Méthode asynchrone. La méthode n'étant pas bloquante c'est à l'application web appelante de gérer ce delai (loader ou blocage).
     *
     * Cette méthode permet de vérifier en amont si le client va pouvoir signer une opération avec un certain niveau de sensibilité.
     * Elle doit être appelée au tout début d'une procédure qui va nécessiter une signature, afin de déterminer dès le départ si le client pourra finaliser son opération.
     *
     * @param params : Objet contenant les champs suivants :
     * - actionLevel : Niveau de sensibilité de la signature, valant 0 (normal), 100 (sensible), ou 200 (très sensible).
     * - jetonTransaction : Jeton de la transaction, optionnel selon le niveau de sensibilité de l'opération.
     * - callback : Fonction exécutée lorsque l'information est disponible. La fonction 'callback' attend 2 paramètres :
     * 					- canSign : Booléen indiquant la factulté à signer (true si la signature peut se faire, false sinon).
     * 					- err : Objet de type SwmError renseigné lorsque canSign==false, renseignant sur la nature de l'erreur.
     *
     *
     * Exemple d'utilisation :
     * gda_check_sign({
	 * 		"actionLevel": gda_consts.niveauSensibilite.SENSIBLE, // =100
	 * 		"jetonTransaction": "SmV0b25UcmFuc2FjdGlvbg==",
	 * 		"callback": function(canSign, err) {
	 * 			if (canSign) {
	 * 				// Signature possible, on laisse le client continuer son opération.
	 * 			}
	 * 			else {
	 * 				// Signature impossible, affichage d'une erreur ou redirection.
	 * 			}
	 * 		}
	 * });
     *
     */
    root.gda_check_sign = function(params) {
        // "action_level" est le nom historique du paramètre de la fonction issue de l'ancienne librairie gda (on le convertit pour la compatibilité ascendante)
        params.actionLevel = params.actionLevel || params.action_level;
        return swmApi.checkSign(params);
    };


    /**
     * @deprecated Méthode remplacée par gda_check_sign
     */
    root.gda_check_tel = function() {
        if (conf.isOldGdaCompatibilityMode() || conf.bank_market_canal == "BDDF_NGIM") {
            return _gda_check_tel();
        } else {
            throw new Error("gda_check_tel non disponible");
        }
    };

    /**
     * @deprecated Méthode remplacée par gda_secure_json.
     */
    root.gda_secure = function() {
        if (conf.isOldGdaCompatibilityMode() || conf.bank_market_canal == "BDDF_NGIM") {
            _gda_secure.apply(this, arguments);
        } else {
            throw new Error("gda_secure non disponible");
        }
    };


    root.logout = function() {
            swmApi.logout.apply(this, arguments);
    };
    /**
     * Gestion d'erreur apres interception du SAS pour le mode Data
     * function public exposée au partenaires afin de leur permettre de deleguer la gestion des erreurs à SWM
     * Elle doit etre appeler avec un ensemble de parametres : params = {...., error: ,...}
     *
     */

    root.gda_sign_json_error = function() {
        if (conf.isOldGdaCompatibilityMode() || conf.bank_market_canal == "BDDF_NGIM" || "CDN" === conf.firm) {
            return _gda_sign_json_error.apply(this, arguments);
        } else {
            throw new Error("gda_sign_json_error non disponible");
        }
    };

    /**
     * Déclenche une signature d'opération avec un certain moyen de sécurité (CV, CSA-T, OOB) déterminé dynamiquement.
     * Méthode asynchrone. La méthode n'étant pas bloquante c'est à l'application web appelante de gérer ce delai (loader ou blocage).
     *
     * Cettte méthode permet de signer une opération avec un certain niveau de sensibilité.
     * Elle doit être appelée à la fin d'une procédure pour la valider (ex: virement, ajout de tiers, ...).
     *
     * @param params : Objet contenant les champs suivants :
     * - actionLevel : Niveau de sensibilité de la signature, valant 0 (normal), 100 (sensible), ou 200 (très sensible).
     * - jetonTransaction : Jeton de la transaction, optionnel selon le niveau de sensibilité de l'opération.
     * - container : Sélecteur jQuery d'une zone de la page dans laquelle le moyen de signature doit s'insérer (optionnel).
     * - callback : Fonction exécutée lorsque l'information est disponible. La fonction 'callback' attend 1 paramètre :
     * 					- secureParams : objet avec les paramètres de signature sous forme de clé/valeur si la signature s'est bien déroulée,
     * 									 ou objet de type SwmError si une erreur est survenue. L'application appelante
     * 									 doit faire cette vérification.
     *
     * Lorsque la signature s'est bien déroulée, l'application appelante doit ajouter les 'secureParams' obtenus à ses propres données du formulaire.
     *
     * Exemple d'utilisation :
     * gda_secure({
	 * 		"actionLevel": gda_consts.niveauSensibilite.SENSIBLE, // =100
	 * 		"jetonTransaction": "SmV0b25UcmFuc2FjdGlvbg==",
	 * 		"callback": function(secureParams) {
	 * 			if (!(secureParams instanceof SwmError) {
	 * 				// Signature ok
	 * 				// addSecureParamsToFormAndSubmit(secureParams);
	 * 			}
	 * 			else {
	 * 				// Signature ko, affichage d'une erreur ou redirection.
	 * 			}
	 * 		}
	 * });
     *
     */
    root.gda_secure_json = function(params) {
        if (conf.isOldGdaCompatibilityMode()) {
            var gdaBackwardCompatibiltyParams = {
                success: params.success || params.callback,
                context: params.context || params.jetonTransaction,
                action_level: params.action_level || params.actionLevel
            };

            return _gda_secure_json(gdaBackwardCompatibiltyParams);
        } else {
            return swmApi.sign(params);
        }
    };

    /**
     * Transférer le code secret dans la requête.
     */
    root.gda_record_vk = function() {
        return _gda_record_vk.apply(this, arguments);
    };

    /**
     * Transférer le code secret dans la requête en mode JSON.
     */
    root.gda_record_vk_json = function(params) {
        if (conf.isOldGdaCompatibilityMode()) {
            var compatibiltyParams = {
                success: params.success || params.callback
            };

            return _gda_record_vk_json(compatibiltyParams);
        } else {
            return swmApi.record(params);
        }
    };

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.getDateDerniereConnexion = function () {
        return swmApi.getDateDerniereConnexion();
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.getCanalDerniereConnexion = function () {
        return swmApi.getCanalDerniereConnexion();
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.getDroits = function () {
        return swmApi.getDroits();
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.isStockageJetonActif = function (callback) {
        return swmApi.isStockageJetonActif(callback);
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.setStockageJetonActif = function (actif) {
        return swmApi.setStockageJetonActif(actif);
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.getIdStat = function () {
        return swmApi.getIdStat();
    }

    /**
     * @deprecated Méthode obsolète: données à récupérer coté serveur.
     */
    root.changeCodeSecret = function (callbackSuccess, callbackError, options) {
        return swmApi.changeCodeSecret(callbackSuccess, callbackError, options);
    }


    // ******************************************************
    // Interface privée
    // ******************************************************

    function init() {
        
        root.gda_add_conf({
            ajaxFilterRegExp: /.*/
        });
    }

    // ******************************************************
    // Initialisation
    // ******************************************************

    init();

}));