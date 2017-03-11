<style type="text/css">
	body {
background-color: #273238;
	}
</style>  

<script src="http://vjs.zencdn.net/5.11.9/video.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.js"></script>


	<script type="text/javascript">
		videojs('videojs_id', {
	       
	        fluid: true,
	        autoplay: true,
	         width: "800px",
	        height: "500px",
	        language: "vi",
	        sources: <?php echo $sources;?>,
	        plugins: {
	            videoJsResolutionSwitcher: {
	                default: '360p',
	                dynamicLabel: true
	            }
	        }
	    });
	    var video = videojs('videojs_id');
    video.on('pause', function() {
      this.bigPlayButton.show();

      // Now the issue is that we need to hide it again if we start playing
      // So every time we do this, we can create a one-time listener for play events.
      video.one('play', function() {
        this.bigPlayButton.hide();
      });
    });
	</script>
	