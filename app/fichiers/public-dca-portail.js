window._dcaApi = {
    publicMethodCallsStack : {
        initCall : null,
        processCalls : []
    },
    init : function ()  {
        var me = this;
        me.publicMethodCallsStack.initCall = arguments;
    },
    process : function () {
        var me = this;
        me.publicMethodCallsStack.processCalls.push(arguments);
    }
};
window.dcaApi = window._dcaApi;

(function (root, callback) {

    var jsMainPath = "/icd/static/dcaweb-front/1.0.15/dist/awt-dcaweb.js";

    function initApi() {

        function loadApiScript(scriptUrl, callback) {
                var head = document.getElementsByTagName('head')[0];
                var scriptElement = document.createElement('script');
                scriptElement.type = 'text/javascript';
                scriptElement.src = scriptUrl;

                if (!callback) callback = function () {
                };

                // bind the event to the callback function
                if (scriptElement.addEventListener) {
                    scriptElement.addEventListener("load", callback, false); // IE9+, Chrome, Firefox
                }
                else if (scriptElement.readyState) {
                    scriptElement.onreadystatechange = function () {
                        if (this.readyState === "loaded" || this.readyState === "complete") {
                            callback.apply(this, arguments);
                        }
                    }; // IE8
                }

                // fire the loading
                head.appendChild(scriptElement);
        }

        loadApiScript(jsMainPath, function() {
            callback(window.dcaApi);
        });

    }
    setTimeout(initApi, 0);

}(this, function(dcaApi){
    var overrideConfig = {
        context: {
            media : "site-web"
        },
        logServicesUrls: {
            defaut: false
        },
        services: {
            remoteConfigFetch: {
                url: {
                    defaut : "/pri/static/dcaweb/config.json"
                },
                timeout: "3000"
            },
            contentsIdsFetch: {
                timeout: "3000",
                fallbackJsonpCallBackFunction: ""
            },
            contentFetch: {
                url: {
                    defaut : (typeof window.n2g_isSecureSite === 'function' && window.n2g_isSecureSite()) ? "/com/dca" : "/com/dca".replace("/com", "")
                },
                timeout: "3000"
            }
        }
    };

    dcaApi.init(overrideConfig, function() {
        if(window._dcaApi.publicMethodCallsStack.initCall) {
            dcaApi.init.apply(this, window._dcaApi.publicMethodCallsStack.initCall);
        }
        var call;
        while (call = window._dcaApi.publicMethodCallsStack.processCalls.shift()) {
            dcaApi.process.apply(this, call);
        }
    });
    return dcaApi;
}));