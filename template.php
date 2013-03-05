<!DOCTYPE HTML>
<html lang="en">
<?php
    // $pageName needs to be set because dmw_head.php uses it in the title
    // TODO: bad idea to set a global var like this. Better to pass it in to a function, but for now...
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
    <div id="main">
        <div class="container">




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

<!-- set the active navbar item -->
<script>
    $(document).ready(function(){
        $('#top_navbar li').removeClass('active');

        // target the correct #top_navbar_????? navbar item
        $('#top_navbar_?????').addClass('active');
    });
</script>
<!-- --------------------------------- -->

</body>
</html>