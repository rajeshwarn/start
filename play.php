<!DOCTYPE html>
<html>
<link href="css/video-js.css" rel="stylesheet">
  <link href="css/videojs.watermark.css" rel="stylesheet">
<head>

<style type="text/css">
	body {
background-color: #273238;
	}
</style>  	
</head>
<body>

<script src="http://vjs.zencdn.net/5.11.9/video.js"></script>

  <script src="js/video.js"></script>
  
  <!-- <script src="../videojs.watermark.js"></script> -->
  <!-- For debugging -->
  <script src="js/videojs.watermark.js"></script>
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
	/*var my_video_id = videojs('videojs_id');

	  my_video_id.watermark({
  file: 'images/logo (Custom).jpg',
  xpos: 0,
  ypos: 0,
  xrepeat: 0,
  opacity: 0.5
  });*/
	</script>
	
</body>
</html>

