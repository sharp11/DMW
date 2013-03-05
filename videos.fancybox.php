<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "Videos";
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

        <div class="row">
            <div class="span6 offset3">
                <h3 id="VideosHeader">Mauris faucibus sagittis sapien sit!</h3>
            </div>
        </div>

        <div class="row">
            <div class="container pagination-centered">
                <a class="various fancybox.iframe" title="CJKC 2011 Preview" href="http://www.youtube.com/embed/B52fUubeMb0?autoplay=1"><img src="img/CJKC2011Preview.jpg"></a>
                <p class="text-center">We will be able to pop-up videos and see all the great gear in action.</p>
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
<script src="js/jquery-1.7.1.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/2.3.0/bootstrap.fancybox.fix.js"></script>

<!-- fancyBox 2 -->
<script src="js/fancybox/2.1.4/jquery.fancybox.pack.js"></script>
<script src="js/fancybox/2.1.4/jquery.fancybox-buttons.js"></script>
<script src="js/fancybox/2.1.4/jquery.fancybox-thumbs.js"></script>
<!-- <script src="js/jquery.easing-1.3.pack.js"></script> -->
<!-- <script src="js/jquery.mousewheel-3.0.6.pack.js"></script> -->
<script src="js/fancybox/2.1.4/jquery.fancybox-instantiate.js"></script>

<!-- enable basic responsiveness for <= IE8 -->
<script src="js/respond.min.js"></script>

<!-- Project script (should load last) -->
<script src="js/app.js"></script>

<!-- set the active navbar item -->
<script>
    $(document).ready(function(){
        $('#top_navbar li').removeClass('active');
        $('#top_navbar_videos').addClass('active');
    });
</script>
<!-- ------------------------------- -->

</body>
</html>