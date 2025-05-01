(function (getGlobalManager) {
    var globals = {
        alerting: {
            alertingIntervalTime: "5",
            urlAlertDetail: "/com/icd-web/alerting/fil-alertes.html#fil-alertes/detail/",
            urlAlerts: "/com/icd-web/alerting/fil-alertes.html#fil-alertes/",
            urlAlertingSignature: "/com/icd-web/alerting/fil-alertes.html",
            sessionKey: "alerting_counter"
        },
        simulator: {
            current_env: "prod",
            time_out: 1000,
        },
        gms: {
            gmsIntervalTime: "5",
            urlGmsSignature: "/gms/gmsListeMessages.html",
        },
        interact: {
            activateGlobalChatbot: true
        },
        fab: {
            fabOrder: [{name: "contextual"}, {name: "interact"}]
        },
        gsa : {
            gsaResultsInsecure: "/app/sea/search",
            gsaResultsSecure: "/app/sea/secure/search",
            gsaResultsToDisplay : 10,
            startItem : 0,
            numItem : 1000,
            numSpLinks : 50
        },
        sinequa : {
            sinequaResults: "/app/sea/xrest",
            sinequaResultsSecure: "/app/sea/secure/xrest",
            sinequaResultsXsearch: "/app/sea/xsearch",
            sinequaResultsXsearchSecure: "/app/sea/secure/xsearch",
            sinequaResultsToDisplay : 10,
            startItem : 0,
            numItem : 400,
            numSpLinks : 50,
            backupGsa: false,
            methodXsearch : false
        },
        inbenta : {
            inbentaXKey: "xbVK+wDEDScZXjgfWuYaFk10tBfV6MdSmAmL4ETKfSA=",
            inbentaAuthUrl: "https://api.inbenta.io/v1/auth",
            inbentaTokenUrl: "https://api.inbenta.io/v1/refreshToken",
            inbentaApisUrl: "https://api.inbenta.io/v1/apis",
            inbentaTokenStorage : "inbenta_token"
        }
    };

    initialize({
        globalManager: getGlobalManager()
    });

    function initialize(modules) {
        if (modules.globalManager) {
            var globalManager = modules.globalManager;

            globalManager.add("alertingConfig", globals.alerting);
            globalManager.add("gmsConfig", globals.gms);
            globalManager.add("fabConfig", globals.fab);
            globalManager.add("gsaConfig", globals.gsa);
            globalManager.add("sinequaConfig", globals.sinequa);
            globalManager.add("simulatorConfig", globals.simulator);
            globalManager.add("inbentaConfig", globals.inbenta);
            globalManager.add("interactConfig", globals.interact);
        }
    }
})(function () {
    /* GlobalManager */
    var GLOBAL_NAMESPACE = "cmsGlobals";

    return {
        add: function (namespace, global) {
            if (!isGlobalNamespaceDefined()) {
                createGlobalNamespace(GLOBAL_NAMESPACE);
            }

            window[GLOBAL_NAMESPACE][namespace] = global;
        }
    };

    function isGlobalNamespaceDefined() {
        return !!window[GLOBAL_NAMESPACE];
    }

    function createGlobalNamespace(namespace) {
        window[namespace] = {};
    }
});