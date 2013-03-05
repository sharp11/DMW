<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "Basses";
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
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
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
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
                            </p>
                        </div>
                    </li>

                    <li class="span4">
                        <div class="thumbnail">
                            <p class="text-center"><a href="#BassDetailsModal" data-toggle="modal">
                                <img src="img/JazzBass.jpg" alt="Bass">
                            </a>
                            </p>
                            <h3 class="text-center">Awesome Bass</h3>
                            <p>In auctor felis at sem blandit vestibulum eget non urna. Aenean facilisis nisl quis lorem porta tempor. Integer facilisis aliquet.</p>
                            <p class="text-center">
                                <a href="#BassDetailsModal" role="button" class="btn btn-primary" data-toggle="modal">View details &raquo;</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bass details Modal -->
        <div id="BassDetailsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="BassDetailsModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="BassDetailsModalLabel" class="text-center">Awesome Bass</h3>
            </div>

            <div class="modal-body">
                <p class="text-center"><img src="img/JazzBassCloseUp.jpg"></p>
                <p>Quisque porttitor aliquam leo sit amet porta! Aenean aliquam nisl eget orci scelerisque adipiscing! Cum sociis natoque penatibus et magnis dis parturient montes</p>
            </div>


            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- --------- -->

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
        $('#top_navbar_basses').addClass('active');
    });
</script>
<!-- --------------------------------- -->
</body>
</html>