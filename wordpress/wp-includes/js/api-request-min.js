!function(d){var s=window.wpApiSettings;function n(e){return e=n.buildAjaxOptions(e),n.transport(e)}n.buildAjaxOptions=function(e){var n=e.url,t=e.path,a,o,p,r,i;if("string"==typeof e.namespace&&"string"==typeof e.endpoint&&(a=e.namespace.replace(/^\/|\/$/g,""),t=(o=e.endpoint.replace(/^\//,""))?a+"/"+o:a),"string"==typeof t&&(n=s.root+t.replace(/^\//,"")),r=!(e.data&&e.data._wpnonce),p=e.headers||{},r)for(i in p)if(p.hasOwnProperty(i)&&"x-wp-nonce"===i.toLowerCase()){r=!1;break}return r&&(p=d.extend({"X-WP-Nonce":s.nonce},p)),delete(e=d.extend({},e,{headers:p,url:n})).path,delete e.namespace,delete e.endpoint,e},n.transport=d.ajax,window.wp=window.wp||{},window.wp.apiRequest=n}(jQuery);