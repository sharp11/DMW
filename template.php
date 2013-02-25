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

<!-- set the active navbar item -->
<script>
    $(document).ready(function(){

        $('#TOP_NAVBAR li').removeClass('active');
        $('#TOP_NAVBAR_?????').addClass('active');
    });
</script>
<!-- --------------------------------- -->

</body>
</html>