<?php
$host="localhost";
$user="root";
$password="";
$db="database1";
$db1=mysqli_connect($host,$user,$password,$db);
if(!$db1)
	{
		echo "Not Connected to database";
	}
echo "<br>";
if(isset($_POST['submit_form']) && !(empty($_POST['owner'])) &&  !(empty($_POST['previous'])) &&  !(empty($_POST['survey'])) &&  !(empty($_POST['patta']))&&  !(empty($_POST['village'])) &&  !(empty($_POST['district'])) &&  !(empty($_POST['state'])) &&  !(empty($_POST['acker'])) &&  !(empty($_POST['date'])))
{
	$s1="SELECT * FROM register WHERE owner='$_POST[owner]' && prev-owner='$_POST[previous]' && survey-num='$_POST[survey]' && patta-num='$_POST[patta]' && village='$_POST[village]' && district='$_POST[district]' && state='$_POST[state]' && ackers='$_POST[acker]' && date='$_POST[date]'";
	$res=mysqli_query($db1,$s1);

	if(mysqli_num_rows($res)>0)
	{
		echo'<h1>Record is already exists,please enter a new record...!</h1>';
		die();
	}
	else
	{
		$query=mysqli_query($db1,"INSERT INTO register(owner,prev-owner,survey-num,patta-num,village,district,state,ackers,date) VALUES('$_POST[owner]','$_POST[previous]','$_POST[survey]','$_POST[patta]','$_POST[village]','$_POST[district]','$_POST[state]','$_POST[acker]','$_POST[date]')");
		if($query)
		{
			echo '<h1 style="color:red">data entered successfully</h1>';
		}
		else 
		{
		echo "data not entered";
		}
	}
}

?>
