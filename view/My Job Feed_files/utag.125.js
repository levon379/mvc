//tealium universal tag - utag.125 ut4.0.201512071640, Copyright 2015 Tealium.com Inc. All Rights Reserved.
window.SSKY=[];try{(function(id,loader){var u={};utag.o[loader].sender[id]=u;if(utag===undefined){utag={};}if(utag.ut===undefined){utag.ut={};}if(utag.ut.loader===undefined){u.loader=function(o){var a,b,c,l;a=document;if(o.type==="iframe"){b=a.createElement("iframe");b.setAttribute("height","1");b.setAttribute("width","1");b.setAttribute("style","display:none");b.setAttribute("src",o.src);}else if(o.type==="img"){utag.DB("Attach img: "+o.src);b=new Image();b.src=o.src;return;}else{b=a.createElement("script");b.language="javascript";b.type="text/javascript";b.async=1;b.charset="utf-8";b.src=o.src;}if(o.id){b.id=o.id;}if(typeof o.cb==="function"){if(b.addEventListener){b.addEventListener("load",function(){o.cb();},false);}else{b.onreadystatechange=function(){if(this.readyState==="complete"||this.readyState==="loaded"){this.onreadystatechange=null;o.cb();}};}}l=o.loc||"head";c=a.getElementsByTagName(l)[0];if(c){utag.DB("Attach to "+l+": "+o.src);if(l==="script"){c.parentNode.insertBefore(b,c);}else{c.appendChild(b);}}};}else{u.loader=utag.ut.loader;}
u.ev={'view':1,'link':1};u.initialized=false;u.map={};u.extend=[];u.send=function(a,b){if(u.ev[a]||u.ev.all!==undefined){var c,d,e,f,i;u.data={"base_url":"//cdn1-res.sundaysky.com/vop/t.js","order_id":"","product_id":"","product_category":"","order_total":"","cart_add_prod":"","cart_add_cat":"","page_type":"","page_category":""};for(d in utag.loader.GV(u.map)){if(b[d]!==undefined&&b[d]!==""){e=u.map[d].split(",");for(f=0;f<e.length;f++){u.data[e[f]]=b[d];}}}
u.loader_cb=function(){u.initialized=true;u.data.order_id=u.data.order_id||b._corder||"";u.data.order_total=b._ctotal||"";u.data.product_id=u.data.product_id||b._cprod||"";u.data.product_category=u.data.product_category||b.page_category_id||b._ccat||"";u.data.page_type=u.data.page_type||b.page_type||"";u.data.page_category=u.data.page_category||b.category_id||"";if(b.page_type=="product"||b.page_type=="search"){SSKY.push(["t.browse",{account:"vs",profile:"1",user_id:"",attrs:{pv:u.data.product_id[0].toString(),cat:u.data.product_category,ctl:[],ptv:u.data.page_type,yal:[],kw:""}}]);}
if(b.page_type=="category"||b.page_type=="collection"){SSKY.push(["t.browse",{account:"vs",profile:"1",user_id:"",attrs:{pv:"",cat:u.data.page_category,ctl:[],ptv:u.data.page_type,yal:[],kw:""}}]);}
if(b.page_name=="SHOPPING CART: ADD"){u.data.cart_add_prod=b.product_id.toString();u.data.cart_add_cat=b.product_category;SSKY.push(["t.addToCart",{account:"vs",profile:"1",user_id:"",attrs:{pa:u.data.cart_add_prod,ca:u.data.cart_add_cat}}])}
if(typeof b._corder!='undefined'&&b._corder!=""){SSKY.push(["t.conversion",{account:"vs",profile:"1",user_id:"",order_id:u.data.order_id,order_value:b._csubtotal,attrs:{pp:u.data.product_id,cp:u.data.product_category}}]);}
};if(!u.initialized){u.loader({"type":"script","src":u.data.base_url,"cb":u.loader_cb,"loc":"script","id":'utag_125'});}else{u.loader_cb();}
}};utag.o[loader].loader.LOAD(id);})("125","victoriassecret.main");}catch(error){utag.DB(error);}