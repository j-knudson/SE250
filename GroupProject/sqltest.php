<?php
//$email = get_post($conn, 'email');
//$password = get_post($conn, 'password');
//$first = get_post($conn, 'first');
//$last = get_post($conn, 'last');

$email = $_POST ["email"];
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
if (!preg_match ($pattern, $email) ){
    $ErrMsg = "Email is not valid.";
            echo $ErrMsg;
} else {
    echo "Your valid email address is: " .$email;
}
$password =$_POST ["password"];
$pwleno = strlen ($password);

if ( $pwleno < 8 || $pwleno > 15) {
    $ErrMsg = "PW must have 8 - 15 characters.";
            echo $ErrMsg;
}

echo <<<_END
  <form action="sqltest.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="Enter Email" name="email" required>


  <label for="password"><b>Password</b></label>
  <input type="text" placeholder="Enter Password" name="password" required>

  <label for="first"><b>First name</b></label>
  <input type="text" placeholder="Enter First Name" name="first" required>

  <label for="last"><b>Last name</b></label>
  <input type="text" placeholder="Enter Last Name" name="last" required>
  </div>
  <p><strong> Please Enter your address </strong></p>
   <div class="container"
    <label for="street"><b>Address</b></label>
    <input type="text" placeholder="Street address" name="street">

    <label for="city"><b>City</b></label>
    <input type="htext" placeholder="City" name="city">

    <label for="State"><b>State</b></label>
    <select>
          <option value="NA">None</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District Of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachusetts</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
         </select>

 <label for="zip"><b>Zip Code</b></label>
 <input type="text" placeholder="Zip Code" name="zip">
 <div class="clearfix">
   <button type="button" class="cancelbtn">Cancel</button>
   <button type="submit" value="ADD RECORD" class="signupbtn">Sign Up</button>
 </div>
</div>
</form>
_END;
