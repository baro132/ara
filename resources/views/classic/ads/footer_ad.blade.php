@if(Request::is(['*/login', '*/register', '*/forgot']))
@else
<div class="custom-footer-ad" style="width: 100%;margin: 0 auto;text-align: center;padding-bottom: 15px;">
	 <script type="text/javascript">
	atOptions = {
		'key' : '548d4a6e30eeba9b52735edf4d3addc3',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://sunstrokeload.com/548d4a6e30eeba9b52735edf4d3addc3/invoke.js"></scr' + 'ipt>');
</script>
</div>
@endif