/**
 * Open inbenta modal
 */
var inbentaOpenModal = null;
/**
 *  Close inbenta modal
 */
var inbentaCloseModal = null;

(function()
{
  var data = {"iname":"c29jaWV0ZV9nZW5lcmFsX2tt","dev":false,"interfaceName":"societe_general_km","instanceParam":"profile","solutionParam":"s","defaultInstance":"default","defaultSolution":"FAQ","assetsDate":"20181016"};
  var pluses = /\+/g;

  var decode = function(s)
  {
    return decodeURIComponent(s.replace(pluses, ' '));
  };

  var converted = function(s)
  {
    if (s.indexOf('"') === 0) {
      // This is a quoted cookie as according to RFC2068, unescape
      s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    }
    return s;
  };

  var getCookie = function(key)
  {
    if (!key) return null;

    var cookies = document.cookie.split('; ');
    var result = null;
    for (var i = 0, l = cookies.length; i < l; i++) {
      var parts = cookies[i].split('=');
      var name = decode(parts.shift());
      var cookie = decode(parts.join('='));

      if (key === name) {
        result = converted(cookie);
        break;
      }
    }

    return result;
  };

  var setCookie = function(key, value, options)
  {
    options = options || {};

    value = String(value);

    document.cookie = [
      encodeURIComponent(key),
      '=',
      encodeURIComponent(value),
      options.path ? '; path=' + options.path : '',
      options.domain ? '; domain=' + options.domain : '',
      options.secure ? '; secure' : ''
    ].join('');
  };

  var insertLink = function(href) {
      var node = document.createElement('link'), s;
      node.rel = 'stylesheet';
      node.href = href;

      if (document.getElementsByTagName('link')[0]) {
        s = (document.getElementsByTagName('link')[0]).parentNode;
      } else {
        s = document.head || document.querySelector('head') || document.documentElement;
      }

      s.appendChild(node);
  };

  var insertScript = function(src, callback)
  {
    var node = document.createElement('script');
    node.type = 'text/javascript';
    node.async = 1;
    node.src = src;
    node.onload = node.onreadystatechange = function(_, isAbort)
    {
      if (isAbort || !node.readyState || /loaded|complete/.test(node.readyState)) {
        // Handle memory leak in IE
        node.onload = node.onreadystatechange = null;
        // Remove the node
        if (node.parentNode) {
          node.parentNode.removeChild(node);
        }

        // Dereference the node
        node = null;

        // Callback if not abort
        if (!isAbort) {
          callback();
        }
      }
    };

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.appendChild(node);
  };

  var baseUrl = 'https://f01.inbenta.com/societe_generale_km/';

  
  data['baseURL'] = baseUrl;

  insertLink(baseUrl+'assets/css/inbenta.css?20181016');

  insertScript(baseUrl+'assets/js/inbenta.js?20181016', function()
  {
    window.Inbenta.baseURL = baseUrl;
    main(data);
  });
})();
