<?php
require_once('../includes/helpers.php');
?>

<?php render('header', array('contact' => 'class="active"', 'home'=>'')); ?>


<?php

require_once('db.php'); 


$sql = "SELECT * 
FROM users
WHERE questionReached>0  
ORDER BY questionReached DESC, timeofsubmission ASC
LIMIT 5";

// execute query
$result = mysqli_query($connection, $sql);
if ($result === false)
    die("Could not query database");

if (mysqli_num_rows($result) > 0)
  {?>
<div class="inner-cover">
<table class="table">
        <thead>
          <tr>
            <th>
              Time of submission
            </th>
            <th>
              Name
            </th>
            <th>
              Question Reached
            </th>
          </tr>
        </thead>
        <tbody>
    <?php
      while($row = mysqli_fetch_array($result)) { ?>
         
            <td>
              <?php echo date('m/d/Y H:i:s', $row['timeofsubmission']);?>
            </td>
            <td>
              <?php echo $row['name']?>
            </td>
            <td>
              <?php echo $row['questionReached']?>
            </td>
          </tr>
          
        <?php
          }
  }
else
  { 
    echo '<h1 class="cover-heading">You are the first here</h1>';
  } 
 
?>

    </tbody>
  </table>
</div>
      

<?php render('footer'); ?>