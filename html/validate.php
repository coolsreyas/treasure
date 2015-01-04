<?php
require_once("authenticate.php");

// $host = $_SERVER["HTTP_HOST"];
// $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");

require_once('db.php');

function getQuestion($i) {
    global $connection;
	$sql = sprintf("SELECT qname FROM questions WHERE qno='%s'",
                       mysqli_real_escape_string($connection, $i));

        // execute query
        $result = mysqli_query($connection, $sql);
        if ($result === false)
            die("Could not query database");
        if (mysqli_num_rows($result) == 1)
        	return mysqli_fetch_assoc($result)['qname'];
        else
        	{
                $_SESSION['finished'] = true;
                header('Location: finish.php');
                exit;
        	}	
}

function getAnswer($i) {
    global $connection;
	$sql = sprintf("SELECT ans FROM questions WHERE qno='%s'",
                       mysqli_real_escape_string($connection, $i));

        // execute query
        $result = mysqli_query($connection, $sql);
        if ($result === false)
            die("Could not query database");
        return mysqli_fetch_assoc($result)['ans'];	
}

function updateQuestionReached($userid, $i) {
    global $connection;
    $sql = sprintf("UPDATE users SET questionReached='%s', timeofsubmission='%s' WHERE ID='%s'",
                       mysqli_real_escape_string($connection, $i),mysqli_real_escape_string($connection, time()), mysqli_real_escape_string($connection, $userid));

        // execute query
        $result = mysqli_query($connection, $sql);
        if ($result === false)
            die("Could not query database");

}

if(!isset($_SESSION['question']))
{
	$_SESSION['i'] = 1;
	$_SESSION['question'] = getQuestion($_SESSION['i']);

}

if (isset($_POST["answer"]))
{
    // echo $_POST['answer'] . "Ddd" . getAnswer($_SESSION['i']);
	if(strcmp(getAnswer($_SESSION['i']), $_POST["answer"])==0)
	{
		if(isset($_SESSION['error'])) 
            unset($_SESSION['error']);
        
		updateQuestionReached($_SESSION['userid'], $_SESSION['i']);
        $_SESSION['i']=$_SESSION['i']+1;
		$_SESSION['question'] = getQuestion($_SESSION['i']);
        
	}
	else
	{
		$_SESSION['error'] = 1;
	}
}

 header("Location: index.php");

?>