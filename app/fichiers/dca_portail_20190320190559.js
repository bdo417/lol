// closest() polyfill
if (!Element.prototype.matches) {
    Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}

if (!Element.prototype.closest) {
    Element.prototype.closest = function (selector) {
        var element = this;

        if (!document.documentElement.contains(element)) {
            return null;
        }

        do {
            if (element.matches(selector)) {
                return element;
            }

            element = element.parentElement || element.parentNode;
        } while (element !== null && element.nodeType === 1);

        return null;
    };
}


// mÃ©thode privÃ©e pour le traitement des zones et l'appel Ã  l'API publique
var processZones = function (zones) {
    window.dcaApi.process({zones: getDcaApiZonesData(unique(zones))});
};

// mÃ©thode pour supprimer les Ã©ventuels doublons (sur le zoneId) dans le taleau des zones
var unique = function (array) {
    var result = [];
    for (var i = 0; i < array.length; i++) {
        if (result.indexOf(array[i]) == -1) {
            result.push(array[i]);
        } else {
            console.warn("Zone ignoree car deja presente", e);
        }
    }
    return result;
};

// mÃ©thode pour rÃ©cupÃ©rer le contenu par dÃ©faut (element jquery)
var getDefaultContent = function (zone, callback) {
    // On recherche le contenu par dÃ©faut par classe dans tout l'emplacement
    var parentNode = zone.closest('.dca_emplacement');
    var searchedZone = parentNode.getElementsByClassName('contenu_defaut');
    if (searchedZone.length > 0) {
        var defaultContent = searchedZone[0];
        parentNode.removeChild(searchedZone[0]);
        return defaultContent;
    }
    return null;
};

// mÃ©thode pour constituer les infos nÃ©cessaires pour l'appel Ã  l'API publique DCAWEB
var getDcaApiZonesData = function (domZones) {
    var apiZones = [];
    for (var i = 0; domZones && i < domZones.length; i++) {
        var domZone = domZones[i]
        var apiZone = {divId: domZone['divId'], zoneId: domZone['zoneId'], zoneName: domZone['zoneName']};
        var zone = document.getElementById(domZone['divId']);
        var defaultContent = getDefaultContent(zone);
        if (defaultContent) {
            // DÃ©placement du contenu par dÃ©faut dans la zone
            if (zone) {
                zone.appendChild(defaultContent);
                if (window.vgnextproperties) {
                    defaultContent.style.display = "";
                }
            }
            apiZone['defaultContent'] = {};
            apiZone['defaultContent']['divId'] = defaultContent.getAttribute("id");
        }
        apiZones.push(apiZone);
    }
    return apiZones;
};


var overrideConfig = {
    context: {
        media: "site-web"
    },
    logServicesUrls: {
        defaut: false
    },
    services: {
        remoteConfigFetch: {
            url: {
                defaut: "/pri/static/dcaweb/config.json"
            },
            timeout: "3000"
        },
        contentsIdsFetch: {
            timeout: "3000",
            fallbackJsonpCallBackFunction: ""
        },
        contentFetch: {
            url: {
                defaut: (typeof window.n2g_isSecureSite === 'function' && window.n2g_isSecureSite()) ? "/com/dca" : "/com/dca".replace("/com", "")
            },
            timeout: "3000"
        }
    }
};

window.addEventListener("load",function(event){
    if (window.dcaZones) {

        if (window.vgnextproperties) {
            getDcaApiZonesData(unique(window.dcaZones));
        }
        else {
            if (window.dcaApi && window.dcaApi.init) {
                window.dcaApi.init(overrideConfig, function () {
                    processZones(window.dcaZones);
                });
            }
        }
    }
});