<script src="http://vjs.zencdn.net/5.11.9/video.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.js"></script>
	<script type="text/javascript">
		videojs('videojs_id', {
	        width: "640",
	        height: "360",
	        autoplay: true,
	        language: "vi",
	        sources: <?php echo $sources;?>,
	        plugins: {
	            videoJsResolutionSwitcher: {
	                default: '360p',
	                dynamicLabel: true
	            }
	        }
	    });
	</script>