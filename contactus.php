<!DOCTYPE HTML>
<html lang="en">
<?php
// $pageName needs to be set because dmw_head.php uses it in the title
$pageTitle = "Contact Us";
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
            <div class="span6">
                <!-- Email Form -->
                <h3>Get in Touch!</h3>

                <form>
                    <label>Your Name</label>
                    <input type="text" class="span4" id="yourName" placeholder="Stik E. Frets">

                    <label>Your Email</label>
                    <input type="text" class="span4" id="yourEmail" placeholder="guitarHero@shredme.com">

                    <label>What's Up?</label>
                    <textarea rows="10" class="span5" placeholder="You guys rock!"></textarea>

                    <!-- why do we need this just to have the submit button line up under the message box???? -->
                    <label></label>
                    <input type="submit" value="Send">
                </form>
            </div>

            <div class="span6">
                <!--Map-->
                <h3>Where We are:</h3>
                <!-- Clicking this placeholder fires the mapModal Reveal modal -->
                <p>
                    <a href="#myModal" role="button" class="btn" data-toggle="modal"><img src="img/Map.jpg" /></a>
                </p>
                <p><a href="#myModal" role="button" class="btn" data-toggle="modal">View Map</a></p>
                <p>
                    123 Awesome St.<br />
                    Somewhere, Earth<br />
                    NCC-1701
                </p>

                <!-- Map Modal -->
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Where We Are</h3>
                    </div>

                    <div class="modal-body">
                        <p><img src="img/MapBig.jpg"></p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>
                </div>
                <!-- --------- -->
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
        $('#top_navbar_contactus').addClass('active');
    });
</script>
<!-- --------------------------------- -->

</body>
</html>