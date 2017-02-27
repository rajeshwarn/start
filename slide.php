<!DOCTYPE html>
<html lang="en">
    <head>
    <title>lightSlider Demo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="stylesheet"  href="css/lightslider.css"/>
    <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		}
        .content-slider img{
            width: 400px;
            height: auto;
        }
		.demo{
			width: 1000px;
		}
        .item-a { width:200px; height: 200px;background-color: blue;}
.item-b { width:340px;height: 200px; }
.item-c { width:290px;height: 200px; }
.item-d { width:220px; height: 200px;}
.item-e { width:350px; height: 200px;}
@media (max-width: 768px) {
    .item-a { width:100px; height: 200px;}
    .item-b { width:240px;height: 200px; }
    .item-c { width:190px; height: 200px;}
    .item-d { width:120px; height: 200px;}
    .item-e { width:250px; height: 200px;}
}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/lightslider.js"></script> 
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
</head>
<body>
	<div class="demo">
        
        <div class="item">
            <ul id="content-slider" class="content-slider">
           <li class="item-a"></li>
  <li class="item-b"><h1>whdwqbwbbcibiewb</h1></li>
  <li class="item-c"></li>
  <li class="item-d"></li>
  <li class="item-e"></li>
            </ul>
        </div>

    </div>	
</body>
