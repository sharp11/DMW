<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
// TODO: change this to a function rather than setting a "global" var
$pageTitle = "About Us";
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

        <img id="ProfilePic" src="img/Philip.jpg" alt="About Philip Picture"/>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel augue vel mauris vestibulum luctus eu ac dui. In at fermentum nisi. Curabitur lobortis tortor in sapien viverra lacinia pellentesque turpis auctor. Nam varius ante vel purus aliquet lobortis. Donec mauris libero, elementum ac tincidunt ac, luctus ac lorem. Integer ut erat eu ipsum scelerisque imperdiet eget id purus. Mauris vitae augue elit, sed faucibus ipsum. Donec diam est, bibendum non feugiat ac, iaculis pellentesque augue. Morbi sed leo urna. Phasellus sit amet ligula lacus. Suspendisse potenti. Donec placerat porttitor quam, in pulvinar ante aliquet a? Donec adipiscing interdum elit id ornare. Nullam scelerisque consectetur gravida! Suspendisse lacinia fermentum tristique. Nulla ut velit ligula.</p>
        <p>Integer ornare ante ut mauris tempus id pellentesque turpis facilisis. Fusce a urna ac mi interdum venenatis. Aenean ornare dolor sed risus dapibus fringilla bibendum ipsum vehicula. Curabitur metus libero, ultricies eget fermentum et, tempus in nibh. In enim tortor, facilisis nec vestibulum eu, elementum id eros? Donec sed imperdiet odio? In hac habitasse platea dictumst. Morbi justo mi, viverra ut scelerisque ut, pellentesque ac nisi. Praesent ut diam eget diam commodo varius et placerat nulla. Phasellus posuere consequat justo vitae consequat. Morbi scelerisque, nunc nec dapibus ullamcorper, metus quam euismod turpis, eget congue ligula orci non dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed ac eros elit, ac ultricies est.</p>
        <p>Nam risus odio, rutrum at dictum et, vehicula at est. Aenean varius viverra neque, nec lacinia urna hendrerit vitae. Donec risus purus, placerat ac suscipit id, lobortis at urna. Donec et rhoncus magna. Vestibulum consequat fringilla aliquet. Quisque hendrerit consequat orci, a venenatis purus tristique eu! Aliquam malesuada eleifend volutpat. Morbi mi erat, posuere quis tincidunt ut, iaculis sed justo. Phasellus imperdiet est sit amet leo malesuada vel malesuada odio lobortis. Fusce pulvinar rutrum augue vitae consectetur. Ut at vulputate mauris! Fusce vel nunc dolor. Sed in eros dui.</p>

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

<!-- set the active navbar item -->
<script>
    $(document).ready(function(){
        $('#TOP_NAVBAR li').removeClass('active');
        $('#TOP_NAVBAR_ABOUTUS').addClass('active');
    });
</script>
</body>
</html>