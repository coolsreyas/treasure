<?php
require_once("authenticate.php");
require_once('../includes/helpers.php');
if (!isset($_SESSION["i"]))
	$_SESSION['i'] = 1;
if(!isset($_SESSION['question'])) {
    header("Location: validate.php");
    exit;
}
if(isset($_SESSION['finished'])) {
    header("Location: finish.php");
    exit;
}
?>


<?php render('header', array('home' => 'class="active"', 'contact'=>'')); ?>


<div class="inner cover">
        <h1 class="cover-heading">Question <?php echo $_SESSION['i']?></h1>
            <p class="lead"><?php echo $_SESSION['question']?></p>
       		<form id="question" name="question" method="post" action="validate.php">
            <textarea class="form-control" name="answer" id="answer" rows="4"></textarea><br>
            <?php if(isset($_SESSION['error']))
            	echo "<p class='warning'>Please check your answer and submit again</p>" ?>
            <p class="lead">
              <input type="submit" class="btn btn-lg btn-default" name="button" id="button" value="Submit Answer!" />
         	</p>
 </div>
<?php render('footer'); ?>
