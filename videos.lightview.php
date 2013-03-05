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
                <a href='http://www.youtube.com/embed/B52fUubeMb0?autoplay=1&amp;autohide=1&amp;border=0&amp;egm=0&amp;showinfo=0&amp;showsearch=0'
                   class='lightview'
                   data-lightview-type="iframe"
                   data-lightview-options="width: 560, height: 315, viewport: 'scale'"
                   data-lightview-title="TEDTalks: Let's use video to reinvent education"
                   data-lightview-caption="Salman Khan talks about how and why he created the remarkable Khan Academy.">
                    <img src="img/CJKC2011Preview.jpg"></a>
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
<script src="js/jquery-1.9.1.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap/2.3.0/bootstrap.min.js"></script>

<!-- Lightview -->
<script src="js/lightview/3.2.8/excanvas.js"></script>
<script src="js/lightview/3.2.8/spinners.min.js"></script>
<script src="js/lightview/3.2.8/lightview.js"></script>

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