<!-- FOOTER Area START / BY MOHAMED IBRAHIM -->
<div id='footer-wrapper'>
<div class='row'>
<div class='footer' id='footer-1'>
<h2>روابط</h2>
<ul class='LinkList'>
<li><a href="#">موقعى الرسمى </a></li>
<li><a href="http://www.mohamedabodia.co.vu">موقعى الشخصى</a></li>
<li><a href="http://fb.me/mrnet2017">صفحتى على فيس بوك </a></li>
</ul>
</div>
<div class="footer" id="footer-2">
<h2>وسائل الدفع</h2>
<center>
<i class="fa fa-cc-mastercard fa-3x" aria-hidden="true" style="color:#fff;"></i>
<i class="fa fa-cc-paypal fa-3x" aria-hidden="true" style="color:#fff;"></i>
<i class="fa fa-cc-visa fa-3x" aria-hidden="true" style="color:#fff;"></i>
</center>
</div>
<div class="footer" id="footer-3">
<h2>تابعنا</h2>
<ul>
<li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
<li><a href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
</ul>
</div>
</div>
</div>
<div id='copyrights'>
<div class='row'>
<div class='right-copy'>كافة الحقوق محفوظةلـ <a href=''>
سوق.كوم
</a><i class='fa fa-copyright'></i> 2016 | <script type='text/javascript'>
 //<![CDATA[
var _0x755a=["\x3C\x73\x70\x61\x6E\x3E\x20\u062A\u0637\u0648\u064A\u0631\x20\x3A\x20\x3C\x61\x20\x20\x69\x64\x3D\x27\x63\x6F\x64\x65\x72\x27\x20\x68\x72\x65\x66\x3D\x27\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x62\x2E\x63\x6F\x6D\x2F\x6D\x6F\x68\x61\x6D\x65\x64\x2E\x69\x62\x72\x61\x68\x69\x6D\x2E\x32\x30\x33\x36\x27\x20\x74\x61\x72\x67\x65\x74\x3D\x27\x5F\x62\x6C\x61\x6E\x6B\x27\x3E\u0645\u062D\u0645\u062F\x20\u0625\u0628\u0631\u0627\u0647\u064A\u0645\x3C\x2F\x61\x3E","\x77\x72\x69\x74\x65\x6C\x6E","\x3C\x2F\x73\x70\x61\x6E\x3E"];var _0xfb70=[_0x755a[0],_0x755a[1],_0x755a[2]];document[_0xfb70[1]](_0xfb70[0]),document[_0xfb70[1]](_0xfb70[2])
   //]]>
</script>
</div>
</div>
</div>
<!-- FOOTER Area END / BY MOHAMED IBRAHIM -->
<script type='text/javascript'>
 //<![CDATA[
//  SelectNav.js (v. 0.1) -  https://github.com/lukaszfiszer/selectnav.js
window.selectnav=function(){"use strict";var e=function(e,t){function c(e){var t;if(!e)e=window.event;if(e.target)t=e.target;else if(e.srcElement)t=e.srcElement;if(t.nodeType===3)t=t.parentNode;if(t.value)window.location.href=t.value}function h(e){var t=e.nodeName.toLowerCase();return t==="ul"||t==="ol"}function p(e){for(var t=1;document.getElementById("selectnav"+t);t++);return e?"selectnav"+t:"selectnav"+(t-1)}function d(e){a++;var t=e.children.length,n="",l="",c=a-1;if(!t){return}if(c){while(c--){l+=o}l+=" "}for(var v=0;v<t;v++){var m=e.children[v].children[0];if(typeof m!=="undefined"){var g=m.innerText||m.textContent;var y="";if(r){y=m.className.search(r)!==-1||m.parentNode.className.search(r)!==-1?f:""}if(i&&!y){y=m.href===document.URL?f:""}n+='<option value="'+m.href+'" '+y+">"+l+g+"</option>";if(s){var b=e.children[v].children[1];if(b&&h(b)){n+=d(b)}}}}if(a===1&&u){n='<option value="">'+u+"</option>"+n}if(a===1){n='<select class="selectnav" id="'+p(true)+'">'+n+"</select>"}a--;return n}e=document.getElementById(e);if(!e){return}if(!h(e)){return}if(!("insertAdjacentHTML"in window.document.documentElement)){return}document.documentElement.className+=" js";var n=t||{},r=n.activeclass||"active",i=typeof n.autoselect==="boolean"?n.autoselect:true,s=typeof n.nested==="boolean"?n.nested:true,o=n.indent||"â†’",u=n.label||" القائمة ",a=0,f=" selected ";e.insertAdjacentHTML("afterend",d(e));var l=document.getElementById(p());if(l.addEventListener){l.addEventListener("change",c)}if(l.attachEvent){l.attachEvent("onchange",c)}return l};return function(t,n){e(t,n)}}();$(document).ready(function(){;selectnav('nav');selectnav('nav1');});


$( ".menu-cart .mycart" ).click(function() {$( ".menu-cart .bag" ).toggle();});$( "#contact h2.title" ).click(function() {$( "#contact .contact-form-widget" ).toggle("fast");});
$(document).ready(function() {
	$('.item_add').click(function(){
		var $this = $(this);
		$this.toggleClass('productad');
		if($this.hasClass('productad')){
			
$this.html('<i class="fa fa-check-square"></i>تمت الإضافة لعربتك!');		
		} else {
			$this.html('<i class="fa fa-shopping-cart"></i>أضف للعربة');	
		}
	});
});

//]]>
</script>
</script>
</body>
</html>