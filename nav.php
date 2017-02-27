<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>

<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
                    <a id="brand" class="navbar-brand" href="#"><img src="images/logo.jpg" class="img-responsive" width="30px" height="30px"></img></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> MOVIES<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>HINDI</a></li>
                <li><a href='movie.php'>ENGLISH</a></li>
                 
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav ">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> TV<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='#'>STAR PLUS</a></li>
                <li><a href='#'>LIFE OK</a></li>
                 
              </ul>
            </li>
          </ul>

                     <div class="col-sm-3 col-md-6">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </div>
 <ul class="nav navbar-nav navbar-right">
 
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

      <!-- <li><a href="sign-up-login-form"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

      <li><a href="sign-up-login-form/#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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
</body>
</html>