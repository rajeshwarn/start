<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></a>

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">
                      <img src="images/logo (Custom).jpg"></img>
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                    <li><a href='movie.php'>HOME</a></li>
                   
                    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> SHOW<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>HINDI</a></li>
                <li><a href='movie.php'>ENGLISH</a></li>
                 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> MOVIES<b class="caret"></b></a>
              <ul class="dropdown-menu">
               
               <li><a href='movie.php'>HINDI</a></li>
                <li><a href='movie.php'>ENGLISH</a></li>
                 
              </ul>
            </li>
            <li><a href='movie.php'>KIDS</a></li>
            <li><a href='movie.php'>SHORT FILMS</a></li>


          </ul>

                     <div class="col-sm-3 col-md-4">
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
                </div>
                <!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

    