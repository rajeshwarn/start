
<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a id="brand" class="navbar-brand" href="#">DAILY.TV</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">MOVIES</a></li>
                        <li><a href="#about">SERIES</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
 <ul class="nav navbar-nav navbar-right">
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">HELLO <?php  if($_SESSION['email']) {echo $_SESSION['email'];} elseif ($_SESSION['FULLNAME']){echo $_SESSION['FULLNAME'];} ?>

  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href='../1.0/sign-up-login-form/forlogout.php'>Logout</a></li>
   
  </ul>
</div>
      <!-- <li><a href="sign-up-login-form"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

      <li><a href="sign-up-login-form/#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    </ul>

                </div>
                <!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

    