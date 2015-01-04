<?php
require_once("authenticate.php");
require_once('../includes/helpers.php');
?>


<?php render('header', array('home' => 'class="active"', 'contact'=>'')); ?>


<div class="inner cover">
        <h1 class="cover-heading">Completed! :)</h1>
            <p class="lead">You have completed the all the questions successfully. Thank you for attending Shaastra!</p>
 </div>
<?php render('footer'); ?>
