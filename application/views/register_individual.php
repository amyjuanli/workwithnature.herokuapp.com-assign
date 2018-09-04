<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Individual Donor Registrations</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		h3 {
			color: #43c86a;
		}

	</style>

</head>
<body>
	<div class="container">
	<form action="/donate_now" method="POST">

	    <h3>Yes, I would like to adopt rainforest!</h3>

		<?php
			if (isset($errorsRegister)) {
				echo '<div class="alert alert-danger" role="alert">' . $errorsRegister . '</div>';
			}
		?>

		<?php
			if (isset($success)) {
				echo '<div class="alert alert-success" role="alert">'; 
				echo "<p>" . $success . "</p>";	
				echo "<a href='/assign'>Click here to select your own part of adopted forest!</a>";
				echo '</div>';
			}
		?>

		<div class="donationarea">
			<strong>I would like to adopt:*</strong>
			<fieldset class="form-group">
				<div class="form-check">
		           <input class="form-check-input" type="radio" name="squaremeter" value="1" <?php if (isset($_POST['squaremeter']) && $_POST['squaremeter']=="1") echo "checked";?>> 
		           <label class="form-check-label">
		               1 m2 (€ 2,50)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="squaremeter" value="4" <?php if (isset($_POST['squaremeter']) && $_POST['squaremeter']=="4") echo "checked";?>> 
		           <label class="form-check-label">
		               4 m2 (€ 10,-)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="squaremeter" value="10" <?php if (isset($_POST['squaremeter']) && $_POST['squaremeter']=="10") echo "checked";?>> 
		           <label class="form-check-label">
		               10 m2 (€ 25,-)
		           </label>
		       	</div>
		       	<div class="form-check">
		           <input class="form-check-input" type="radio" name="squaremeter" value="20" <?php if (isset($_POST['squaremeter']) && $_POST['squaremeter']=="20") echo "checked";?>> 
		           <label class="form-check-label">
		               20 m2 (€ 50,-)
		           </label>
		       	</div>
				<div class="form-check">
		           <input class="form-check-input" type="radio" name="squaremeter">
		           <label class="form-check-label">
		              Otherwise, namely (m2): <input type="text" name="sqm" placeholder="m2">
		           </label>
		       	</div> 
	  		</fieldset>
			 
       	</div> 

		

	    <hr>

		<div class="form-group">
		    <label for="timeframe">Per:</label>
		    <select class="form-control" id="timeframe" name="timeframe">
		    	<option value="month" selected>Month</option>
				<option value="quarter">Quarter</option>
				<option value="year">Year</option>
				<option value="onetime">One-time donation</option>
		    </select>
  		</div>

	    <hr>
		
		<div class="iban form-check">
		    <label class="form-check-label">
		      <input type="checkbox" class="form-check-input" name="iban_agree">
		      Yes, I agree with the automatic bank draft of Adopt Rainforest*
		    </label>

		    <div class="form-group">
			    <input type="iban" class="form-control" id="iban" name="iban" aria-describedby="iban" placeholder="IBAN *" value='<?php echo set_value('iban')?>'>
		  </div>
		</div> 

		<hr>

		<fieldset class="form-group">
		    <h3>Pay Safe</h3>
		    <p><strong>You can pay safe and easy through:</strong></p>
		    <div class="form-check">
		      <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="ideal" value="ideal" <?php if (isset($_POST['paymentmethod']) && $_POST['paymentmethod']=="ideal") echo "checked";?>>
		        iDeal
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="creditcard" value="creditcard" <?php if (isset($_POST['paymentmethod']) && $_POST['paymentmethod']=="creditcard") echo "checked";?>>
		        Credit Card
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="bancontact" value="bancontact" <?php if (isset($_POST['paymentmethod']) && $_POST['paymentmethod']=="bancontact") echo "checked";?>>
		        Bancontact
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="paypal" value="paypal" <?php if (isset($_POST['paymentmethod']) && $_POST['paymentmethod']=="paypal") echo "checked";?>>
		        PayPal
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="paymentmethod" id="sofort" value="sofort" <?php if (isset($_POST['paymentmethod']) && $_POST['paymentmethod']=="sofort") echo "checked";?>>
		        SOFORT
		      </label>
		    </div>
		</fieldset>
		
		<hr>

		<h3>My details</h3>	

		<fieldset class="form-group">
	    	<p><strong>Salutation:</strong></p>
		    <div class="form-check">
	     		<label class="form-check-label">
	        	<input type="radio" class="form-check-input" name="salutation" id="male" value="male" <?php if (isset($_POST['salutation']) && $_POST['salutation']=="male") echo "checked";?>>
	        	Mr.
	      		</label>
	    	</div>
		    <div class="form-check">
			    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="salutation" id="female" value="female" <?php if (isset($_POST['salutation']) && $_POST['salutation']=="female") echo "checked";?>>
	        	Mrs.
	      		</label>
	    	</div>
	    </fieldset>
		
		<div class="form-group">
		    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name*" value='<?php echo set_value('firstname')?>'>
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="insertion" name="insertion" placeholder="Insertion" value='<?php echo set_value('insertion')?>'>
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Surname*" value='<?php echo set_value('lastname')?>'>
		</div>		

		<label for="DOB">Date of birth:</label> <br>
			<input type="date" name="birthdate" value='<?php echo set_value('birthdate')?>'> 
		
		<br>
		<br>

		<div class="form-group">
		    <input type="text" class="form-control" id="address" name="address" placeholder="Street + Number" value='<?php echo set_value('street')?>'>
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Postal/ZIP code" value='<?php echo set_value('zipcode')?>'>
		</div>
		<div class="form-group">
		    <input type="text" class="form-control" id="location" name="location" placeholder="Location" value='<?php echo set_value('location')?>'>
		</div>
		<div class="form-group">
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email address*" value='<?php echo set_value('email')?>'>
		</div>
		<div class="form-group">
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password*">
		</div>
		<div class="form-group">
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password*">
		</div>

		<div class="form-group">
			<label for="referral_method">How did you find us?</label> <br>
    		<input type="text" class="form-control" id="referral_method" name="referral_method" value='<?php echo set_value('referral_method')?>'>
  		</div>

  		<fieldset class="form-group">
		    <h3>Your gift</h3>
		    <p><strong>Did you choose for a periodically donation, then please choose your gift:</strong></p>
		    <div class="form-check">
		      <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="toucan" value="toucan" <?php if (isset($_POST['gift']) && $_POST['gift']=="toucan") echo "checked";?> >
		        Wonderful high resolution PDF of a watercolor painting (Toucan)
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="jaguar" value="jaguar" <?php if (isset($_POST['gift']) && $_POST['gift']=="jaguar") echo "checked";?> >
		        Wonderful high resolution PDF of a watercolor painting (Jaguar)
		      </label>
		    </div>
		    <div class="form-check">
		    <label class="form-check-label">
		        <input type="radio" class="form-check-input" name="gift" id="nogift" value="nogift" <?php if (isset($_POST['gift']) && $_POST['gift']=="nogift") echo "checked";?> >
		        No, thanks
		      </label>
		    </div>
		</fieldset>

		<div class="donatenow">
			<input class="btn btn-success" type="submit" name="donatenow" value="Donate now!">
            <button type="reset" class="btn btn-info" >Clear form</button>

		</div>		
        <br> 
        <a href="/">Go back to main page</a>   	 	
	</form>


</div> <!-- ./div class="container"-->
</body>
</html>


