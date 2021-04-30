/*!
 * VERSION: 0.2.2
 * DATE: 2017-06-19
 * UPDATES AND DOCS AT: http://greensock.com
 *
 * @license Copyright (c) 2008-2017, GreenSock. All rights reserved.
 * This work is subject to the terms at http://greensock.com/standard-license or for
 * Club GreenSock members, the software agreement that was issued with your membership.
 * 
 * @author: Jack Doyle, jack@greensock.com
 **/
var _gsScope="undefined"!=typeof module&&module.exports&&"undefined"!=typeof global?global:this||window;(_gsScope._gsQueue||(_gsScope._gsQueue=[])).push(function(){"use strict";var a,b,c=/(\d|\.)+/g,d=["redMultiplier","greenMultiplier","blueMultiplier","alphaMultiplier","redOffset","greenOffset","blueOffset","alphaOffset"],e={aqua:[0,255,255],lime:[0,255,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,255],navy:[0,0,128],white:[255,255,255],fuchsia:[255,0,255],olive:[128,128,0],yellow:[255,255,0],orange:[255,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[255,0,0],pink:[255,192,203],cyan:[0,255,255],transparent:[255,255,255,0]},f=function(a){return""===a||null==a||"none"===a?e.transparent:e[a]?e[a]:"number"==typeof a?[a>>16,a>>8&255,255&a]:"#"===a.charAt(0)?(4===a.length&&(a="#"+a.charAt(1)+a.charAt(1)+a.charAt(2)+a.charAt(2)+a.charAt(3)+a.charAt(3)),a=parseInt(a.substr(1),16),[a>>16,a>>8&255,255&a]):a.match(c)||e.transparent},g=function(b,c,e){if(!a&&(a=_gsScope.ColorFilter||_gsScope.createjs.ColorFilter,!a))throw"EaselPlugin error: The EaselJS ColorFilter JavaScript file wasn't loaded.";for(var g,h,i,j,k,l=b.filters||[],m=l.length;--m>-1;)if(l[m]instanceof a){h=l[m];break}if(h||(h=new a,l.push(h),b.filters=l),i=h.clone(),null!=c.tint)g=f(c.tint),j=null!=c.tintAmount?Number(c.tintAmount):1,i.redOffset=Number(g[0])*j,i.greenOffset=Number(g[1])*j,i.blueOffset=Number(g[2])*j,i.redMultiplier=i.greenMultiplier=i.blueMultiplier=1-j;else for(k in c)"exposure"!==k&&"brightness"!==k&&(i[k]=Number(c[k]));for(null!=c.exposure?(i.redOffset=i.greenOffset=i.blueOffset=255*(Number(c.exposure)-1),i.redMultiplier=i.greenMultiplier=i.blueMultiplier=1):null!=c.brightness&&(j=Number(c.brightness)-1,i.redOffset=i.greenOffset=i.blueOffset=j>0?255*j:0,i.redMultiplier=i.greenMultiplier=i.blueMultiplier=1-Math.abs(j)),m=8;--m>-1;)k=d[m],h[k]!==i[k]&&e._addTween(h,k,h[k],i[k],"easel_colorFilter");if(e._overwriteProps.push("easel_colorFilter"),!b.cacheID)throw"EaselPlugin warning: for filters to display in EaselJS, you must call the object's cache() method first. "+b},h=[1,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,1,0],i=.212671,j=.71516,k=.072169,l=function(a,b){if(!(a instanceof Array&&b instanceof Array))return b;var c,d,e=[],f=0,g=0;for(c=0;4>c;c++){for(d=0;5>d;d++)g=4===d?a[f+4]:0,e[f+d]=a[f]*b[d]+a[f+1]*b[d+5]+a[f+2]*b[d+10]+a[f+3]*b[d+15]+g;f+=5}return e},m=function(a,b){if(isNaN(b))return a;var c=1-b,d=c*i,e=c*j,f=c*k;return l([d+b,e,f,0,0,d,e+b,f,0,0,d,e,f+b,0,0,0,0,0,1,0],a)},n=function(a,b,c){isNaN(c)&&(c=1);var d=f(b),e=d[0]/255,g=d[1]/255,h=d[2]/255,m=1-c;return l([m+c*e*i,c*e*j,c*e*k,0,0,c*g*i,m+c*g*j,c*g*k,0,0,c*h*i,c*h*j,m+c*h*k,0,0,0,0,0,1,0],a)},o=function(a,b){if(isNaN(b))return a;b*=Math.PI/180;var c=Math.cos(b),d=Math.sin(b);return l([i+c*(1-i)+d*-i,j+c*-j+d*-j,k+c*-k+d*(1-k),0,0,i+c*-i+.143*d,j+c*(1-j)+.14*d,k+c*-k+d*-.283,0,0,i+c*-i+d*-(1-i),j+c*-j+d*j,k+c*(1-k)+d*k,0,0,0,0,0,1,0,0,0,0,0,1],a)},p=function(a,b){return isNaN(b)?a:(b+=.01,l([b,0,0,0,128*(1-b),0,b,0,0,128*(1-b),0,0,b,0,128*(1-b),0,0,0,1,0],a))},q=function(a,c,d){if(!b&&(b=_gsScope.ColorMatrixFilter||_gsScope.createjs.ColorMatrixFilter,!b))throw"EaselPlugin error: The EaselJS ColorMatrixFilter JavaScript file wasn't loaded.";for(var e,f,g,i=a.filters||[],j=i.length;--j>-1;)if(i[j]instanceof b){g=i[j];break}for(g||(g=new b(h.slice()),i.push(g),a.filters=i),f=g.matrix,e=h.slice(),null!=c.colorize&&(e=n(e,c.colorize,Number(c.colorizeAmount))),null!=c.contrast&&(e=p(e,Number(c.contrast))),null!=c.hue&&(e=o(e,Number(c.hue))),null!=c.saturation&&(e=m(e,Number(c.saturation))),j=e.length;--j>-1;)e[j]!==f[j]&&d._addTween(f,j,f[j],e[j],"easel_colorMatrixFilter");if(d._overwriteProps.push("easel_colorMatrixFilter"),!a.cacheID)throw"EaselPlugin warning: for filters to display in EaselJS, you must call the object's cache() method first. "+a;d._matrix=f};_gsScope._gsDefine.plugin({propName:"easel",priority:-1,version:"0.2.2",API:2,init:function(a,b,c,d){this._target=a;var e,f,h,i,j,k,l;for(e in b)if(j=b[e],"function"==typeof j&&(j=j(d,a)),"colorFilter"===e||"tint"===e||"tintAmount"===e||"exposure"===e||"brightness"===e)h||(g(a,b.colorFilter||b,this),h=!0);else if("saturation"===e||"contrast"===e||"hue"===e||"colorize"===e||"colorizeAmount"===e)i||(q(a,b.colorMatrixFilter||b,this),i=!0);else if("frame"===e){if(this._firstPT=f={_next:this._firstPT,t:a,p:"gotoAndStop",s:a.currentFrame,f:!0,n:"frame",pr:0,type:0,m:Math.round},"string"==typeof j&&"="!==j.charAt(1)&&(k=a.labels))for(l=0;l<k.length;l++)k[l].label===j&&(j=k[l].position);f.c="number"==typeof j?j-f.s:parseFloat((j+"").split("=").join("")),f._next&&(f._next._prev=f)}else null!=a[e]&&(this._firstPT=f={_next:this._firstPT,t:a,p:e,f:"function"==typeof a[e],n:e,pr:0,type:0},f.s=f.f?a[e.indexOf("set")||"function"!=typeof a["get"+e.substr(3)]?e:"get"+e.substr(3)]():parseFloat(a[e]),f.c="number"==typeof j?j-f.s:"string"==typeof j?parseFloat(j.split("=").join("")):0,f._next&&(f._next._prev=f));return!0},set:function(a){for(var b,c=this._firstPT,d=1e-6;c;)b=c.c*a+c.s,c.m?b=c.m(b,c.t):d>b&&b>-d&&(b=0),c.f?c.t[c.p](b):c.t[c.p]=b,c=c._next;this._target.cacheID&&this._target.updateCache()}})}),_gsScope._gsDefine&&_gsScope._gsQueue.pop()(),function(a){"use strict";var b=function(){return(_gsScope.GreenSockGlobals||_gsScope)[a]};"undefined"!=typeof module&&module.exports?(require("../TweenLite.min.js"),module.exports=b()):"function"==typeof define&&define.amd&&define(["TweenLite"],b)}("EaselPlugin");