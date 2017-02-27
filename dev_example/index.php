<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/flex.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
        <!-- Filter Controls - Simple Mode -->
        <div class="row">
            <!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
            for an unfiltered gallery and then the values of your categories to filter between them -->
            <ul class="simplefilter">
                MAI KUCH BHI KAR SAKTI HU
                <li class="active" data-filter="all">SEASON 1</li>
                <li data-filter="1">SEASON 2 </li>
                <li data-filter="2">SEASON 3</li>
                <li data-filter="3">SEASON 4</li>
                <li data-filter="4">SEASON 5</li>
                <li data-filter="5">SEASON 6</li>
            </ul>
        </div>

        <!-- Search control -->
        <div class="row search-row">
            Search control:
            <input type="text" class="filtr-search" name="filtr-search" data-search>
        </div>

        <div class="row">
            <!-- This is the set up of a basic gallery, your items must have the categories they belong to in a data-category
            attribute, which starts from the value 1 and goes up from there -->
            <div class="filtr-container">
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort="Busy streets">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 5" data-sort="Luminous night">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 4" data-sort="City wonders">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="In production">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 4" data-sort="Industrial site">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort="City lights">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Dreamhouse">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="Restless machines">
                    <img class="img-responsive" src="images/industrial_1.jpg" alt="sample image">
                    <span class="item-desc">MAI KUCH BHI KAR SAKTI HU</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery & Filterizr -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="filterizr/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
  </body>
</html>
