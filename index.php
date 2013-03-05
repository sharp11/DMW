<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "Home";
require('dmw_head.php');
?>
<body>
<!-- ----------- Wrap all page content ------------- -->
<div id="wrap">
    <?php
    require('dmw_navbar.php');
    ?>
    <!-- Begin page content -->
    <div class="container">

        <!-- motto -->
        <div class="row">
<!--            <div class="span3">-->
<!--                <img src="img/DaltonMusicworksLogoV2.jpg" alt="Dalton Musicworks Logo">-->
<!--            </div>-->
            <div class="span12 page-header">
                <h3>There is a single belief that guides our business: You know what you want.</h3>
            </div>
        </div>

        <!-- slideshow -->
        <div class="row">
            <div class="span12">
                <div id="home-carousel-id" class="carousel slide"><!-- class of slide for animation -->

                    <ol class="carousel-indicators">
                        <li data-target="#home-carousel-id" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel-id" data-slide-to="1"></li>
                        <li data-target="#home-carousel-id" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active"><!-- class of active since it's the first item -->
                            <img src="img/Strat.jpg" alt="" />
                            <div class="carousel-caption">
                                <p>Dalton Custom S</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/Godin.jpg" alt="" />
                            <div class="carousel-caption">
                                <p>Dalton Custom G</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/335.jpg" alt="" />
                            <div class="carousel-caption">
                                <p>Dalton Custom 35</p>
                            </div>
                        </div>
                    </div><!-- /.carousel-inner -->
                    <!--  Next and Previous controls below href values
                          must reference the id for this carousel -->
                    <a class="carousel-control left" href="#home-carousel-id" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#home-carousel-id" data-slide="next">&rsaquo;</a>
                </div><!-- /.carousel -->
            </div>
        </div>

        <!-- body copy -->
        <div class="row">
            <div class="span6">
                <p>
                    It’s a tone…or a look. It’s a feel thing. It’s better intonation.
                    It’s fit and finish.  It’s a U-shaped, one piece maple neck with a
                    1.65” bone nut and a 7.5” to 9.5” compound radius fingerboard and
                    jumbo frets.
                </p>

                <p>Whatever it is… it’s about you.  You know what you want.</p>
            </div>

            <div class="span6">
                <p>
                    So, welcome to our shop where we offer some very fine guitars and basses,
                    along with an excellent selection of parts for those who prefer to roll
                    their own. We sell only products that we use. If we can help you find what
                    you need, that would be our privilege. If not, maybe we can help point you
                    in the right direction. Never settle. You know what you want.
                </p>
            </div>
        </div>



    </div>
    <!-- End page content -->
    <!-- need this for sticky footer solution -->
    <div id="push"></div>
</div>
<!-- ------------------ /. wrap --------------------- -->
<?php
require('dmw_footer.php');
?>

<!-- --------- Javascript ---------- -->
<!-- jQuery (required for Bootstrap) -->
<script src="js/jquery-1.9.1.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/2.3.0/bootstrap.min.js"></script>

<!-- enable basic responsiveness for <= IE8 -->
<script src="js/respond.min.js"></script>

<!-- Project script (should load last) -->
<script src="js/app.js"></script>
<!-- --------------------------------- -->

</body>
</html>