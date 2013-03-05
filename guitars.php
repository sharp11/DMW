<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "Guitars";
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
            <div class="span12">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="guitar_details.php">
                                <img src="img/Guitar.jpg" alt="Guitar">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Guitar</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="guitar_details.php" role="button" class="btn btn-primary">View details &raquo;</a>
                            </p>
                        </div>
                    </li>
                </ul>
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

<!-- set the active navbar item -->
<script>
    $(document).ready(function(){
        $('#top_navbar li').removeClass('active');
        $('#top_navbar_guitars').addClass('active');
    });
</script>
<!-- --------------------------------- -->

</body>
</html>