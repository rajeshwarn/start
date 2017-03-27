<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  /* Underline From Center */
.hvr-underline-from-center {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  position: relative;
  overflow: hidden;
}
.hvr-underline-from-center:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 50%;
  right: 50%;
  bottom: 0;
  background: #2098D1;
  height: 4px;
  -webkit-transition-property: left, right;
  transition-property: left, right;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-underline-from-center:hover:before, .hvr-underline-from-center:focus:before, .hvr-underline-from-center:active:before {
  left: 0;
  right: 0;
}
</style>
<body>

<nav id="header" class="navbar navbar-static-top">
            <div id="header-container" class="container navbar-container">
                
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
                    <a id="brand" class="navbar-brand" href="#"> <img src="images/logo (Custom).jpg"></img></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ">
                    <li><a href='index.php' class="hvr-underline-from-center active">HOME</a></li>
                   
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> SHOW<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>Hindi</a></li>
                <li><a href='movie.php'>English</a></li>
                 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> MOVIES<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>Hindi</a></li>
                <li><a href='movie.php'>English</a></li>
                 
              </ul>
            </li>
            <li><a href='movie.php'>KIDS</a></li>
            <li><a href='movie.php'>SHORT FILMS</a></li>


          </ul>
          
                     <div class="col-sm-3 col-md-4">
        <div class="input-group">
            <input type="text" name="search" placeholder="Search..">
        </div>
        </div>
 <ul class="nav navbar-nav navbar-right">
 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php  

  if($_SESSION['email']) 
    {echo $_SESSION['email'];
  } ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='logout.php'>Logout</a></li>
              </ul>
              
            </li>
        

    
    </ul>
</div>
                </div>
                <!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

    <script type="text/javascript">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<script type="text/javascript">
  if ($(window).width() < 760) {

    $('#header').addClass('navbar-static-top');
    $('#menu2').removeClass('navbar-fixed-top');
} else {
    $('#header').addClass('navbar-fixed-top');
    $('#menu2').removeClass('navbar-static-top');
}
</script>
</body>
</html>