<?php
require_once('../includes/helpers.php');
?>

<?php render('header', array('contact' => 'class="active"', 'home'=>'')); ?>


<?php

require_once('db.php'); 


$sql = "SELECT * 
FROM users  
ORDER BY questionReached DESC, timeofsubmission ASC";

// execute query
$result = mysqli_query($connection, $sql);
if ($result === false)
    die("Could not query database");

if (mysqli_num_rows($result) > 0)
  {?>
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
            <th>
              Email
            </th>
            <th>
              Phone Number
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
            <td>
              <?php echo $row['email']?>
            </td>
            <td>
              <?php echo $row['phone']?>
            </td>
          </tr>
          
        <?php
          }
  }
else
  { 
    echo '<h1 class="cover-heading">No Response yet</h1>';
  } 
 
?>

  </tbody>
      </table>
      

<?php render('footer'); ?>