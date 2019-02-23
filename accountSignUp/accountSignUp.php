<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <center><p>Join Now - It's Free. Get your Dream Job Today!</p></center>
    <hr>

    <h1>Account Sign Up</h1>
    <form action="display_result.php" method="post">

    <fieldset> 
    <legend>Account Information</legend>
        <label>E-Mail *:</label>
        <input type="text" name="email"  placeholder="you@example.com" value="" class="textbox">
        <br>

        <label>Password *:</label>
        <input type="password" name="password" value="" class="textbox">
        <br>
        
        <label>Re-enter Password * :</label>
        <input type="password" name="password_1" value="" class="textbox">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" placeholder="(888) 123-4567"value="" class="textbox">
    </fieldset>

    <fieldset>
    <legend>Personal Information</legend>
        <label>First Name:</label>
        <input type="text" name="first_name" value="" class="textbox">
        <br>
        <label>Last Name:</label>
        <input type="text" name="last_name" value="" class="textbox">
        <br>

        <label>Birthday:</label>
        <input type="text" name="birthday" value="" placeholder="mm/dd/yyyy"class="textbox">
        <br>
        <label> Gender:</label>
        <select name="gender">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="Other">Other</option>
        </select><br>
        <label>Current location:</label>
        <input type="text" name="current_location" placeholder="zip code or city" value="" class="textbox">
        <br>
        



    </fieldset>

    <fieldset>
    <legend>Education Reference</legend>
        <label>Institution:</label>
        <input type="text" name="school" value="" class="textbox">
        <br>
        
        <label>Highest degree:</label>
        <select name="degree">
                <option value="B.S">B.S</option>
                <option value="A.S">A.S</option>
                <option value="High School">High School</option>
                <option value="Certification">Certification</option>
        </select><br>
        <label>Major:</label>
        <input type="text" name="major" value="" class="textbox">
        <br>
        <label>website:</label>
        <input type="text" name="website" value="" placeholder="http://" class="textbox">
        <br>
    </fieldset>

    <fieldset>
    <legend>Career Preference</legend>
        <p>What position are you looking for?</p>
        <input type="text" name="job" value="" placeholder="i.e. Web developer"class="text box">
        <br>

        <p>Which location do you prefer? </p>
        <input type="radio" name="location" value="Los Angeles">
        Los Angeles<br>
        <input type="radio" name="location" value="San Francisco">
        San Francisco<br>
        <input type=radio name="location" value="San Diego">
        San Diego<br>
        <input type=radio name="location" value="Local">
        Local<br>

        <p>Salary Range:</p>
        <select name="Salary">
                <option value="$10000-$30000">$10000-$30000</option>
                <option value="$30001-$50000">$30001-$50000</option>
                <option value="$50001-$90000">$50001-$90000</option>
                <option value="No preference">No preference</option>
        </select>
        <p>When are you available to start?</p>
        <input type="text" name="start_date" placeholder="mm/dd/yyyy" value="" class="textbox">
        
     </fieldset>


    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine">
        Search engine<br>
        <input type="radio" name="heard_from" value="Friend">
        Job board<br>
        <input type=radio name="heard_from" value="Career Fair">
        Career Fair<br>
       <input type=radio name="heard_from" value="Other">
        Other<br>

        <p>Would you like to receive notifications about new job posting
           and job search skills?</p>
        <input type="checkbox" name="wants_updates">YES, I'd like to receive
        information about new job posting and job search skills.<br>

        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>

        <p >By signing up you agree to our Terms of Service and Privacy Policy</p>
        <input type="checkbox" name="agreement">YES, I have read and agreed.<br>
       
    </fieldset>


    <input type="submit" value="Submit">
    <br>

     
    </form>
    </main>
</body>
</html>
