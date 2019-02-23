<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email ==NULL)
    	$email =false;
    // get the rest of the data for the form
    $password = filter_input(INPUT_POST, 'password');
    $password_1 = filter_input(INPUT_POST, 'password_1');
    if($password != $password_1)
    {
    	$password= false;
    }
    
    
    $phone = filter_input(INPUT_POST, 'phone');
    $first_name = filter_input(INPUT_POST, 'first_name');
    
    $last_name = filter_input(INPUT_POST, 'last_name');
    $birthday = filter_input(INPUT_POST, 'birthday');
    $gender = filter_input(INPUT_POST, 'gender');
    $current_location = filter_input(INPUT_POST, 'current_location');
    if($current_location==NULL)
    {
    	$current_location= "Unknown Location";
    }
    
    $school = filter_input(INPUT_POST, 'school');
    $degree = filter_input(INPUT_POST, 'degree');
    $major = filter_input(INPUT_POST, 'major');
    $website = filter_input(INPUT_POST, 'website');
    
    $job = filter_input(INPUT_POST, 'job');
    $location = filter_input(INPUT_POST, 'location');
    if($location == NULL){
    	$location="No Preference";
    }
    
    
    $salary = filter_input(INPUT_POST, 'salary');
    $start_date = filter_input(INPUT_POST, 'start_date');
    
    
    // for the heard_from radio buttons,
     $heard_from = filter_input(INPUT_POST, 'heard_from');
    // display a value of 'Unknown' if the user doesn't select a radio button
    if($heard_from == null)
        $heard_from = "Unknown";
    // for the wants_updates check box,
    $wants_updates = isset($_POST['wants_updates']);
    if ($wants_updates == NULL){
        $wants_updates = "No";}
    else
    {
        $wants_updates="Yes";
    }
    // display a value of 'Yes' or 'No'
    $contact_via = filter_input(INPUT_POST, 'contact_via');
    $comments = filter_input(INPUT_POST, 'comments');
    $agreement = filter_input(INPUT_POST, 'agreement');
    if($agreement==NULL)
    {
    	$agreement=false;
  	
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo ($phone); ?></span><br>
        
        <label>First Name:</label>
        <span><?php echo htmlspecialchars($first_name); ?></span><br>
        
        <label>Last Name:</label>
        <span><?php echo htmlspecialchars($last_name); ?></span><br>
        
        <label>Birthday:</label>
        <span><?php echo htmlspecialchars($birthday); ?></span><br>

	<label>Gender:</label>
        <span><?php echo htmlspecialchars($gender); ?></span><br>
        
        <label>Current Location:</label>
        <span><?php echo htmlspecialchars($current_location); ?></span><br>
        
        <label>Institute:</label>
        <span><?php echo htmlspecialchars($school); ?></span><br>
        
        <label>Highest Degree:</label>
        <span><?php echo htmlspecialchars($degree); ?></span><br>
        
        <label>Major:</label>
        <span><?php echo htmlspecialchars($major); ?></span><br>
        
        <label>Position:</label>
        <span><?php echo htmlspecialchars($job); ?></span><br>
        
        <label>Location Preference:</label>
        <span><?php echo htmlspecialchars($location); ?></span><br>
        
        <label>Salary Range:</label>
        <span><?php echo htmlspecialchars($salary); ?></span><br>
        
        <label>Start Date:</label>
        <span><?php echo htmlspecialchars($start_date); ?></span><br>
        
        
        
        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from) ;?></span><br>

        <label>Send Updates:</label>
        <span><?php echo htmlspecialchars($wants_updates) ;?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via) ;?></span><br><br>

        <span>Comments:</span><br>
        <span><?php echo htmlspecialchars($comments) ;?></span><br>  
        
        
        <span><?php 
        if($email==NULL)
        {
        	echo '<span style="color:#B40404;text-align:center;">Please enter your email address to complete the registration.</span>';	
        }
        
        ?></span><br>
        
        <span><?php 
        if($password==false)
        {
        	echo '<span style="color:#B40404;text-align:center;">Your passwords do not match! Please go back and type your password again!</span>';	
        }
        ?></span><br>
        
        <span><?php
        if(($agreement==false) ){
  		echo '<span style="color:#B40404;text-align:center;">Your registration is not finished. Please go back and agree the Terms and Privacy Policy.</span>';}
  	else if(($agreement !=false) && ($email !=NULL) && ($password != false))
  	{
  		echo '<span style="color:#0B4C5F;text-align:center;">Your registration is completed. You will recieve an email confirmation shortly.Thank you.</span>';
  		
  	}
        
         ;?></span><br>      
    </main>
</body>
</html>
