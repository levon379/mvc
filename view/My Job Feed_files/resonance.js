//resxclsx.js v5.3 Copyright 2004-2015 Certona Corporation www.certona.com. All rights reserved.
//victoriassecret.com
var certonaResx=function(){"use strict";var e,n="certonaResx.showResponse",r="",t,i,s=false,c,f,l,a,o,u;function d(e){return parseInt(e,10)}function x(e){try{var n;if(e!==undefined&&e!==null&&e!=="null"&&e!==""){n=true;return n}}catch(r){}return false}function m(){return resx.rrelem}function h(e){try{var n=null,r,t;if(x(e)){n=[];if(x(document.getElementById(e))){n[0]=e}else{t=e.replace(/[,;\-:]/g,".").split(".");for(r=0;r<t.length;r+=1){if(t[r]!==""&&x(document.getElementById(t[r]))){n[r]=t[r]}else{n[r]=""}}}}return n}catch(i){}return null}function p(){try{var e,n,r;if(resx.rrelem!==undefined){r=h(m());if(r!==undefined&&r!==null){for(e=0;e<r.length;e+=1){if(r[e]!==""){n=document.getElementById(r[e])}else{n=null}if(x(n)){n.style.visibility="visible"}}}}}catch(t){}}function g(e,n){try{if(!s){s=true;r=e+"|"+(n.number!==undefined?n.number:"undefined")+"|"+(n.name!==undefined?n.name:"undefined")+"|"+(n.description!==undefined?n.description:"undefined")}}catch(t){}finally{p()}}function y(e){try{var n,r,t;if(document.cookie.length>0){n=document.cookie;r=n.indexOf(e+"=");if(r!==-1){r+=e.length+1;t=n.indexOf(";",r);if(t===-1){t=n.length}return decodeURIComponent(n.slice(r,t))}}}catch(i){g("",i)}return null}function R(e,n,r,t){try{var i=new Date;if(r!==null){i.setTime(i.getTime()+r*3600*1e3)}document.cookie=e+"="+encodeURIComponent(n)+(r!==null?"; expires="+i.toGMTString():"")+"; path=/"+(x(t)?"; domain="+t:"")}catch(s){g("",s)}}function v(e,n){try{var r;if(n!==undefined&&n!==null){for(r=0;r<n.length;r+=1){if(n[r]===e){return true}}}}catch(t){}return false}function k(){try{var e,n,r,t,c;n=resx.rrec!==undefined&&(resx.rrec===true||resx.rrec==="true")&&a==="1"&&resx.rrelem!==undefined&&resx.rrelem!==null&&!s;if(n){if(!i){n=false;c=h(m());if(c!==undefined&&c!==null){for(e=0;e<c.length;e+=1){if(x(c[e])){n=true;break}}}}if(n){if(!x(resx.useitems)){n=false;if(resx.rrnum!==undefined){r=resx.rrnum;r+="";r=r.replace(/,/g,";");t=r.split(";");for(e=0;e<t.length;e+=1){if(!isNaN(t[e])&&d(t[e])>0){n=true;break}}}}}}return n}catch(f){}return false}function N(e){try{var n,r="";e+="";for(n=e.length-1;n>=0;n-=1){r+=e.charAt(n)}return r}catch(t){}return""}function w(){try{var e,n,r,t,i;if(navigator.userAgent.toLowerCase().indexOf("mac")===-1){i=Math.floor(Math.random()*1e15);i+=""}else{r=Math.floor(Math.random()*1e6);e=new Date;n=e.getTime();n+="";t=N(n);r+="";i=r+t.slice(0,11)}return i}catch(s){g("guid",s)}return""}function b(e,n,r,t,i,s){try{var c,f,l,a="",o,u,d,m,h,p,y,R,k,N,w="";if(typeof e==="object"){f=document.getElementsByTagName("a")}else{l=document.getElementById(e);if(x(l)){f=l.getElementsByTagName("a");a=e}}if(f!==undefined&&f!==null){p=[];if(n!==undefined&&n!==null){for(o=0;o<n.length;o+=1){if(n[o]!==""){h=document.getElementById(n[o])}else{h=null}if(x(h)){N=h.getElementsByTagName("a");for(d=0;d<N.length;d+=1){p.push(N[d])}}}}y=0;for(o=0;o<f.length;o+=1){if(y===s){break}c=f[o];if(x(c)){u="";k=encodeURIComponent(c);if(x(r)){k=k.match(r);k+=""}if(x(k)){u=k.match(t);u+=""}if(x(u)){if(!v(c,p)){m=k.match(i);m+="";R=u+encodeURIComponent("|")+a+encodeURIComponent("|")+(x(m)?m:"")+";";if(w.indexOf(R)===-1){w+=R;y+=1}}}}}}return w}catch(b){g("gpl",b)}return""}function I(e){try{t=true;var n,r,s,c;if(!i){for(n=0;n<e.Resonance.Response.length;n+=1){r=false;s=e.Resonance.Response[n].scheme;if(e.Resonance.Response[n].display==="yes"){r=true;c=document.getElementById(s);if(x(c)){c.innerHTML=e.Resonance.Response[n].output}}if(typeof resonanceResponseLoaded==="function"){resonanceResponseLoaded(s,r)}}if(typeof resonanceResponseLoadedAll==="function"){resonanceResponseLoadedAll()}}}catch(f){}finally{p()}}function C(){try{if(!t&&!i){if(e<2e3){e=e+25;window.setTimeout("certonaResx.checkCallback()",25)}else{i=true;p()}}}catch(n){p()}}function E(e){try{var r="",t="",i;if(typeof e==="boolean"&&e===true){if(x(resx.rrcall)){r=resx.rrcall}else{r=n}}else if(typeof e==="string"){r=e}if(r.length>0){if(r===n){t="&cb="}else{t="&ccb="}t+=r}i=(x(resx.useitems)?"&ui="+resx.useitems:"&no="+resx.rrnum)+(x(resx.exitemid)?"&ex="+resx.exitemid:"")+(x(resx.rrqs)?"&"+resx.rrqs:"")+t;return i}catch(s){}return""}function B(){try{var e,n,r=window.location.hostname;if(x(r)){if(!r.match(/(\d{1,3}\.){3}\d{1,3}/)){e=r.split(".");if(e.length>1){r="."+e[e.length-2]+"."+e[e.length-1];n=/\.(co|com)\.\w{2}$/;if(r.toLowerCase().match(n)&&e.length>2){r="."+e[e.length-3]+r}}}return r}}catch(t){g("gsd",t)}return null}function T(e){try{return decodeURI(window.location.search.replace(new RegExp("^(?:.*[&\\?]"+encodeURI(e).replace(/[\.\+\*]/g,"\\$&")+"(?:\\=([^&]*))?)?.*$","i"),"$1"))}catch(n){}return null}function U(){try{var e,n="",r;for(e=0;e<51;e+=1){if(resx["cv"+e]!==undefined){r=resx["cv"+e];r+="";r=r.replace(/\+/g,"%2B");n+="&cv"+e+"="+encodeURIComponent(r)}}return n}catch(t){g("gcv",t)}return""}function L(v){try{var N={callback:false},I,C,E,U,L,S,M,O,q,A,D,$,j,G,_,H,K;if(v===undefined){v=N}else{for(U=0;U<N.length;U+=1){if(v[U]===undefined){v[U]=N[U]}}}s=false;r="";u="";o="";a="";f="";l="";c=false;t=false;i=false;e=0;I=B();$="RES_TRACKINGID";D="RES_SESSIONID";A="ResonanceSegment";if(window.location.search.indexOf("resxtrack=")>0&&!x(resx.trackingid)){u=T("resxtrack")}if(!x(resx.trackingid)){if(!isNaN(d(u))){R($,u,17520,I);if(!x(y($))){R($,u,null,I)}R(D,"",-1,I)}else{u=y($);if(isNaN(d(u))){u=w()}R($,u,17520,I);if(!x(y($))){R($,u,null,I)}}if(!x(resx.segment)){K=d(u);if(!isNaN(K)&&K>0){K+="";K=K.slice(1,6);K=d(K);j=d(resx.top1);G=d(resx.top2);_=d(resx.top3);H=1e5;if(!(isNaN(j)&&isNaN(G)&&isNaN(_))){if(isNaN(j)){j=0}if(isNaN(G)){G=j}if(isNaN(_)){_=G}if(K<j){a="1"}else if(K<G){a="2"}else if(K<_){a="3"}else if(K<H){a="4"}}}R(A,a,1440,I);if(!x(y(A))){R(A,a,null,I)}}}else{u=resx.trackingid}if(!x(resx.sessionid)&&!x(resx.trackingid)){o=y(D);if(!x(o)){o=w()}R(D,o,.5,I);if(!x(y(D))){R(D,o,null,I)}}else{o=resx.sessionid}if(x(resx.segment)){a=resx.segment;a+=""}if(isNaN(d(a))){a="1"}if(x(resx.pageid)){f=resx.pageid}else{f=w()}C=resx.links!==undefined?String(resx.links):"";if(x(C)){E=C.replace(/\,/g,";").replace(/\|/g,"%7C").split(";",50);for(U=0;U<E.length;U+=1){l+=E[U]+";"}}M=resx.maxl!==undefined&&!isNaN(d(resx.maxl))?d(resx.maxl):20;L=resx.lkmatch!==undefined?resx.lkmatch:"";S=resx.ltmatch!==undefined?resx.ltmatch:"";if(x(L)){O=resx.plkmatch!==undefined?resx.plkmatch:"";if(resx.rrelem!==undefined){q=h(m())}if(q!==undefined&&q!==null&&q.length>0){for(U=0;U<q.length;U+=1){if(x(q[U])){l+=b(q[U],null,O,L,S,50)}}}if(M>0){l+=b(document,q,O,L,S,M)}}if(typeof v.callback==="string"&&v.callback!==n||v.callback===false||x(resx.rrcall)&&resx.rrcall!==n){i=true}c=k()&&x(u)&&x(f);if(!c){p()}}catch(z){g("pv",z)}}function S(e){try{var n,t,i,d,h,p,g,y="5.3x";if(a==="1"||a==="2"||a==="3"){if(c){window.setTimeout("certonaResx.checkCallback();",50)}t=window.location.protocol.toLowerCase()==="https:"?"https://":"http://";h="www.res-x.com";if(x(resx.host)){h=resx.host}i="appid="+(resx.appid!==undefined?resx.appid:"")+"&tk="+(x(u)?u:"")+"&ss="+(x(o)?o:"")+"&sg="+(x(a)?a:"")+"&pg="+(x(f)?f:"")+"&vr="+y+"&bx="+c;g="";if(resx.rrelem!==undefined&&resx.rrelem!==null){p=m().replace(/[,;\-:]/g,".").split(".");if(p!==null){for(n=0;n<p.length;n+=1){g+="&sc="+p[n]}}}i+=g+(resx.event!==undefined?"&ev="+resx.event:"")+(resx.itemid!==undefined?"&ei="+resx.itemid:"")+(resx.qty!==undefined?"&qty="+resx.qty:"")+(resx.price!==undefined?"&pr="+resx.price:"")+(resx.shipping!==undefined?"&sh="+resx.shipping:"")+(resx.total!==undefined?"&tt="+resx.total:"")+(resx.currencycode!==undefined?"&cc="+resx.currencycode:"")+(resx.customerid!==undefined?"&cu="+resx.customerid:"")+(resx.transactionid!==undefined?"&tr="+resx.transactionid:"");i+=(c?E(e):"")+U()+"&ur="+encodeURIComponent(window.location.href.slice(0,400))+"&plk="+(x(l)?l:"")+"&rf="+encodeURIComponent(document.referrer)+(s===true?"&er="+s+"&em="+encodeURIComponent(r):"");d=t+h+"/ws/r2/Resonance.aspx"+"?"+i;return d.slice(0,2083)}}catch(R){}return""}function M(e){try{if(e!==""){var n=document.createElement("script"),r=document.getElementsByTagName("script")[0];n.type="text/javascript";n.async=true;n.src=e;r.parentNode.insertBefore(n,r)}}catch(t){}}function O(e){var n={callback:false},r;if(e===undefined){e=n}else{for(r=0;r<n.length;r+=1){if(e[r]===undefined){e[r]=n[r]}}}return S(e.callback)}function q(){L({callback:true});var e=S(true);M(e)}return{checkCallback:function(){C()},showResponse:function(e){I(e)},getURL:function(e){L(e);return O(e)},run:function(){q()}}}();
var ready=function(){function g(){if(!a.isReady){try{document.documentElement.doScroll("left")}catch(b){setTimeout(g,1);return}a.ready()}}var e,c,m={"[object Boolean]":"boolean","[object Number]":"number","[object String]":"string","[object Function]":"function","[object Array]":"array","[object Date]":"date","[object RegExp]":"regexp","[object Object]":"object"},a={isReady:!1,readyWait:1,holdReady:function(b){b?a.readyWait++:a.ready(!0)},ready:function(b){if(!0===b&&!--a.readyWait||!0!==b&&!a.isReady){if(!document.body)return setTimeout(a.ready,1);a.isReady=!0;!0!==b&&0<--a.readyWait||e.resolveWith(document,[a])}},bindReady:function(){if(!e){e=a._Deferred();if("complete"===document.readyState)return setTimeout(a.ready,1);if(document.addEventListener)document.addEventListener("DOMContentLoaded",c,!1),window.addEventListener("load",a.ready,!1);else if(document.attachEvent){document.attachEvent("onreadystatechange",c);window.attachEvent("onload",a.ready);var b=!1;try{b=null==window.frameElement}catch(f){}document.documentElement.doScroll&&b&&g()}}},_Deferred:function(){var b=[],f,c,e,h={done:function(){if(!e){var c=arguments,d,g,j,l,k;f&&(k=f,f=0);d=0;for(g=c.length;d<g;d++)j=c[d],l=a.type(j),"array"===l?h.done.apply(h,j):"function"===l&&b.push(j);k&&h.resolveWith(k[0],k[1])}return this},resolveWith:function(a,d){if(!e&&!f&&!c){d=d||[];c=1;try{for(;b[0];)b.shift().apply(a,d)}finally{f=[a,d],c=0}}return this},resolve:function(){h.resolveWith(this,arguments);return this},isResolved:function(){return!(!c&&!f)},cancel:function(){e=1;b=[];return this}};return h},type:function(a){return null==a?String(a):m[Object.prototype.toString.call(a)]||"object"}};document.addEventListener?c=function(){document.removeEventListener("DOMContentLoaded",c,!1);a.ready()}:document.attachEvent&&(c=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",c),a.ready())});return function(b){a.bindReady();a.type(b);e.done(b)}}();
function getPageType(){try{var e="",t="";if(e===undefined||e===""){if(typeof certona!=="undefined"){e=certona.pagetype!==undefined?certona.pagetype:""}t=window.location.href;switch(true){case e==="HOME":case/\.victoriassecret\.com\/$/.test(t):e="home";break;case e==="PINKHOME":e="pinkhome";break;case e==="CATEGORY":e="category";break;case e==="COLLECTION":e="collection";break;case e==="BRAEXP":e="braexp";break;case e==="PRODUCT":if(jQuery("div#outer-wrapper div#wrapper header hgroup h1").text()==="QUICK VIEW"){e="quickview"}else{e="product"}break;case e==="SEARCH":e="search";break;case e==="NOSEARCH":e="nosearch";break;case e==="ACCOUNT":e="account";break;case e==="WISHLIST":case/\/lovelist\/view$/.test(t):e="lovelist";break;case e==="CART":case e==="CHECKOUT":e="cart";break;case e==="PURCHASE":e="purchase";break;default:e="";break}}return e}catch(r){}return""}function addToCart(e,t){try{resx.event=e;resx.itemid=t;certonaResx.run()}catch(r){}}function getAppId(){try{var e="",t="";if(typeof certona!=="undefined"){e=certona.device!==undefined?certona.device:"";t=certona.appid!==undefined?certona.appid:""}if(t===undefined||t===""){switch(e){case"DESKTOP":case"TABLET":t="victoriassecret01";break;case"MOBILE":t="victoriassecret02";break}}return t}catch(r){}return""}var resx={appid:"victoriassecret01",top1:1e5,top2:1e5};ready(function(){try{var e=getPageType(),t,r="",a="",c="",i="",n=0,o="",d="",s,u,p,f="",l="",m="";if(typeof certona!=="undefined"&&e!==""){resx.appid=getAppId();resx.pageid=certona.pageid!==undefined?certona.pageid:"";resx.customerid=certona.customerid!==undefined?certona.customerid:"";resx.links=certona.recitems!==undefined?certona.recitems:""}switch(e){case"home":break;case"pinkhome":break;case"category":break;case"collection":jQuery("ul.products a.loveItIcon").click(function(){try{a=jQuery(this).attr("data-product-path").match(/ProductID\=\d+/)+"";a=a.match(/\d+/)+"";resx.event="wishlist_op";resx.itemid=a;resx.links="";certonaResx.run()}catch(e){}});jQuery("button.fab-btn--primary-small").click(function(){try{resx.links="";a=jQuery(this).closest("li").find("a.loveItIcon").attr("data-product-path").match(/ProductID\=\d+/)+"";a=a.match(/\d+/)+"";window.setTimeout(function(){addToCart("addtocart_op",a)},50)}catch(e){}});break;case"braexp":break;case"quickview":if(typeof certona!=="undefined"){r=certona.itemid!==undefined?certona.itemid:""}f=window.location.href;if(f.indexOf("origin=pRecommend")>-1||f.indexOf("origin=iRecommend")>-1){l="quickview_opr";m="addtocart_opr"}else{l="quickview_op";m="addtocart_op"}resx.event=l;resx.itemid=r;jQuery("button.fab-btn--primary").click(function(){try{window.setTimeout(function(){resx.links="";addToCart(m,r)},50)}catch(e){}});break;case"product":if(typeof certona!=="undefined"){r=certona.itemid!==undefined?certona.itemid:""}resx.event="product";resx.itemid=r;jQuery("button.fab-btn--primary.add-to-bag").click(function(){try{window.setTimeout(function(){resx.links="";addToCart("addtocart_op",r)},50)}catch(e){}});jQuery("section.product div#mainView a.loveItIcon").click(function(){try{a=jQuery(this).attr("data-product-path").match(/ProductID\=\d+/)+"";a=a.match(/\d+/)+"";resx.event="wishlist_op";resx.itemid=a;resx.links="";certonaResx.run()}catch(e){}});break;case"search":break;case"nosearch":break;case"account":break;case"lovelist":resx.event="wishlist";if(typeof certona!=="undefined"){resx.itemid=certona.itemid!==undefined?certona.itemid:""}break;case"cart":resx.event="viewcart";if(typeof certona!=="undefined"){resx.itemid=certona.itemid!==undefined?certona.itemid:""}break;case"purchase":if(typeof certona!=="undefined"){r=certona.itemid!==undefined?certona.itemid:"";c=certona.qty!==undefined?certona.qty:"";i=certona.price!==undefined?certona.price:"";o=certona.total!==undefined?certona.total:"";d=certona.transactionid!==undefined?certona.transactionid:""}s=r.split(";");u=c.split(";");p=i.split(";");i="";for(t=0;t<s.length;t+=1){n=parseInt(u[t],10)*parseFloat(p[t]);i+=n.toFixed(2)+";"}resx.event="purchase";resx.itemid=r;resx.qty=c;resx.price=i;resx.total=o;resx.transactionid=d;break;default:return}certonaResx.run()}catch(k){}});