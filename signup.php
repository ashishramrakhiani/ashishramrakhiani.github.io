<?php
ob_start();
session_start();
?>
<?php
$result='';
$success=0;
$flag=0;
if(isset($_POST['sign']))
{
if(empty($_POST['fn']))
{
$result=$result."Full name cannot be empty<br>";
$flag=1;
}
if(is_numeric($_POST['fn']))
{
	$result=$result."Full name cannot contain numbers<br>";
	$flag=1;
}
if(empty($_POST['em']))
{
	$result=$result."Email id is neccessary<br>";
	$flag=1;
}
if(empty($_POST['date']))
{
	$result=$result."date cannot be empty<br>";
	$flag=1;
}
if(empty($_POST['pass']))
{
	$result=$result."Password cannot be empty<br>";
	$flag=1;
}
if(empty($_POST['mon']))
{
	$result=$result."Month cannot be empty<br>";
	$flag=1;
}
if(empty($_POST['year']))
{
	$result=$result."Year cannot be empty<br>";
	$flag=1;
}
if(empty($_POST['gender']))
{
	$result=$result."Gender cannot be empty<br>";
	$flag=1;
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="signupstyle.css">

  
</head>


<body>
  
<div class="container">
  <form action="signup.php" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name"/ name="fn">
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="em"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" nmae="pass"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD" name="date"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM" name="mon"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY" name="year"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
	<?php
		if($flag==1)
			{
				echo '<div class="error">'.$result.'</div>';
			}
						
				?>

	<div class="row">
        <div class="input-group">
          <input type="submit" name="sign" value="Sign Me Up" />
        
        </div>
      </div>

    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
<?php


include_once("dbconfig1.php");

if($flag!=1)
{
if(isset($_POST['sign']))
{
	$fname=test_input($_POST['fn']);
	$eid=test_input($_POST['em']);
	$pass=$_POST['pass'];
	$date=$_POST['date'];
	$month=$_POST['mon'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
	
$sql="INSERT INTO user(fullname,email,password,date,month,year,gender) values('$fname','$eid','$pass',$date,$month,$year,$gender)";
if(mysqli_query($conn,$sql))
{
		

	echo '<script> alert("Sign Up successful") </script>';
	$success=1;
}
else{	
echo '<div class="error">'.mysqli_error($conn).'</div>';
//echo '<script> alert("Error, Try  again ") </script>';
}
	
}

}?>
</body>
</html>
