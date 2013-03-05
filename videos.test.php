<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "template";
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

        <div class="modal hide" id="video">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4>PHIL'S FILLS - Episode 1:&nbsp; The Dalton Custom S</h4>
            </div>
            <div class="modal-body">
                <p>This text gets replaced with video modal.</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
        </div>

        <div class="row">
            <div class="span6 offset3">
                <h4 id="VideosHeader">Check out another episode of PHIL'S FILLS!</h4>
            </div>
        </div>

        <div class="row">
            <div class="container pagination-centered">
                <a data-toggle="modal" href="#video"><img src="img/CJKC2011Preview.jpg"></a>
            </div>
            <p class="text-center">We will be able to pop-up videos and see all the great gear in action.</p>
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

<!-- instantiate video modal -->
<script src="js/video-modal.js"></script>

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