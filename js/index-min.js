$(document).ready(function(){$(function(){$("body a").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);(t=t.length?t:$("[name="+this.hash.slice(1)+"]")).length&&$("html,body").animate({scrollTop:t.offset().top},300)}})})});