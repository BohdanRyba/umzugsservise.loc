/*
 * @license Multi Input Mask plugin for jquery
 * https://github.com/andr-04/inputmask-multi
 * Copyright (c) 2012-2016 Andrey Egorov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 * Version: 1.2.0
 *
 * Requriements:
 * https://github.com/RobinHerbots/jquery.inputmask
 */
!function(t){t.masksLoad=function(e){var s;return t.ajax({url:e,async:!1,dataType:"json",success:function(t){s=t}}),s},t.masksSort=function(e,s,i,n){return e.sort(function(e,a){for(var r=0,o=0;r<e[n].length&&o<a[n].length;){var h=e[n].charAt(r),c=a[n].charAt(o);if(i.test(h))if(i.test(c)){if(-1!=t.inArray(h,s)&&-1==t.inArray(c,s))return 1;if(-1==t.inArray(h,s)&&-1!=t.inArray(c,s))return-1;if(-1==t.inArray(h,s)&&-1==t.inArray(c,s)&&h!=c)return c>h?-1:1;r++,o++}else o++;else r++}for(;r<e[n].length||o<a[n].length;)if(r<e[n].length&&!i.test(e[n].charAt(r)))r++;else if(o<a[n].length&&!i.test(a[n].charAt(o)))o++;else{if(r<e[n].length)return 1;if(o<a[n].length)return-1}return 0}),e};var e=function(t,e){if("number"!=typeof t){if(this.setSelectionRange)t=this.selectionStart,e=this.selectionEnd;else if(document.selection&&document.selection.createRange){var s=document.selection.createRange();t=0-s.duplicate().moveStart("character",-1e5),e=t+s.text.length}return{begin:t,end:e}}if(e="number"==typeof e?e:t,this.setSelectionRange)this.setSelectionRange(t,e);else if(this.createTextRange){var s=this.createTextRange();s.collapse(!0),s.moveEnd("character",e),s.moveStart("character",t),s.select()}},s=Object.keys||function(t){if(t!==Object(t))throw new TypeError("Invalid object");var e=[];for(var s in t)e[e.length]=s;return e},i=function(t){for(var e=this.inputmasks.options,i="",n=0;n<t.length;n++){var a=t.charAt(n);if(a==this.inputmasks.placeholder)break;e.match.test(a)&&(i+=a)}for(var r in e.list){for(var o=e.list[r][e.listKey],h=!0,c=0,u=0;c<i.length&&u<o.length;){var l=o.charAt(u),p=i.charAt(c);if(e.match.test(l)||l in this.inputmasks.defs){if(!(l in this.inputmasks.defs&&this.inputmasks.defs[l].test(p)||p==l)){h=!1;break}c++,u++}else u++}if(h&&c==i.length){var m=-1==o.substr(u).search(e.match);o=o.replace(new RegExp([e.match.source].concat(s(this.inputmasks.defs)).join("|"),"g"),e.replace);var d=-1==o.substr(u).search(e.replace);return{mask:o,obj:e.list[r],determined:m,completed:d}}}return!1},n=function(t,e,s){var i=this.inputmasks.options;if(!t)return 0;for(var n=0,a=0;n<s.begin;n++)t.charAt(n)==i.replace&&a++;for(var r=0;n<s.end;n++)t.charAt(n)==i.replace&&r++;for(n=0;n<e.length&&(a>0||e.charAt(n)!=i.replace);n++)e.charAt(n)==i.replace&&a--;for(a=n;n<e.length&&r>0;n++)e.charAt(n)==i.replace&&r--;return r=n,{begin:a,end:r}},a=function(){t(this).off(".inputmasks")},r=function(){events=t._data(this,"events");var e=["keydown","keypress","paste","dragdrop","drop","setvalue","reset","cut","blur"],s=this;t.each(e,function(e,i){t.each(s.inputmask.events[i],function(e,n){t(s).off(i,n)})})},o=function(e){var s=this;t.each(this.inputmask.events[e.type],function(t,i){i.call(s,e)})},h=function(){t(this).on("keydown.inputmasks",l).on("keypress.inputmasks",p).on("paste.inputmasks",d).on("dragdrop.inputmasks",d).on("drop.inputmasks",d).on("cut.inputmasks",d).on("setvalue.inputmasks",m).on("blur.inputmasks",m).on("reset.inputmasks",m)},c=function(s,i){var a=this.inputmasks.options;if(s&&(void 0!==i||s.mask!=this.inputmasks.oldmatch.mask)){var o;void 0===i?o=n.call(this,this.inputmasks.oldmatch.mask,s.mask,e.call(this)):(this.inputmask&&this.inputmask.remove(),this.value=i),t(this).inputmask(s.mask,t.extend(!0,a.inputmask,{insertMode:this.inputmasks.insertMode})),r.call(this),void 0===i&&e.call(this,o.begin,o.end)}this.inputmasks.oldmatch=s,a.onMaskChange.call(this,s.obj,s.determined)},u=function(t,e,s){var n=i.call(this,e);return n&&n.obj==this.inputmasks.oldmatch.obj&&n.determined==this.inputmasks.oldmatch.determined?(o.call(this,t),!0):(n?s?(c.call(this,n),o.call(this,t)):(o.call(this,t),c.call(this,n)):s&&this.inputmasks.insertMode||f.call(this,e),!1)},l=function(t){if(t.metaKey)return o.call(this,t),!0;var s=this.inputmasks.options;t=t||window.event;var i=t.which||t.charCode||t.keyCode;if(8==i||46==i||this.inputmasks.iphone&&127==i){var n=this.inputmask._valueGet(),a=e.call(this);if(a.begin==a.end){var r=a.begin;do{46!=i&&r--;var h=n.charAt(r);n=n.substring(0,r)+n.substring(r+1)}while(r>0&&r<n.length&&h!=this.inputmasks.placeholder&&!s.match.test(h))}else n=n.substring(0,a.begin)+n.substring(a.end);return u.call(this,t,n,!1)}return 45==i&&(this.inputmasks.insertMode=!this.inputmasks.insertMode),o.call(this,t),!0},p=function(t){if(t.metaKey)return o.call(this,t),!0;var s=this.inputmask._valueGet();t=t||window.event;var i=t.which||t.charCode||t.keyCode,n=String.fromCharCode(i);return caretPos=e.call(this),s=caretPos.begin==caretPos.end&&s.charAt(caretPos.begin)==this.inputmasks.placeholder?s.substring(0,caretPos.begin)+n+s.substring(caretPos.end+1):s.substring(0,caretPos.begin)+n+s.substring(caretPos.end),u.call(this,t,s,!0)},m=function(t){return f.call(this),!0},d=function(t){var e=this;return setTimeout(function(){f.call(e)},0),!0},f=function(t){void 0===t&&(t=this.inputmask&&this.inputmask._valueGet?this.inputmask._valueGet():this.value);for(var e=i.call(this,t);!e&&t.length>0;)t=t.substr(0,t.length-1),e=i.call(this,t);c.call(this,e,t)},k=function(e){e=t.extend(!0,{onMaskChange:t.noop},e);var s={};for(var i in e.inputmask.definitions){var n=e.inputmask.definitions[i].validator;switch(typeof n){case"string":s[i]=new RegExp(n);break;case"object":"test"in e.definitions[i].validator&&(s[i]=n);break;case"function":s[i]={test:n}}}e.inputmask.definitions[e.replace]={validator:e.match.source,cardinality:1},this.inputmasks&&t(this).inputmasks("remove"),this.inputmasks={},this.inputmasks.options=e,this.inputmasks.defs=s,this.inputmasks.iphone=null!=navigator.userAgent.match(/iphone/i),this.inputmasks.oldmatch=!1,this.inputmasks.placeholder=e.inputmask.placeholder||Inputmask.prototype.defaults.placeholder,this.inputmasks.insertMode=void 0!==e.inputmask.insertMode?e.inputmask.insertMode:Inputmask.prototype.defaults.insertMode,f.call(this)};t.fn.inputmasks=function(e){switch(e){case"remove":a.call(this),this.inputmasks=void 0,t(this).inputmask("remove");break;case"isCompleted":var s=i.call(this[0],this[0].inputmask&&this[0].inputmask._valueGet()||this[0].value);return s&&s.completed;default:return this.each(function(){k.call(this,e),h.call(this)}),this}}}(jQuery);