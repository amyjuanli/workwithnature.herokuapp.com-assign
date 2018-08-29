<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Work With Nature
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        h2, h3 {
            color: #43c86a;
        }
    </style>

</head>

<body>

    <div class="container">
    <?php
        if (!empty($errorsMsg)) {
            echo '<div class="alert alert-danger" role="alert">' . $errorsMsg . '</div>';
        }
        ?>
        <h2> Company Registration Form</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
            <form action="/addCompany" method ="POST">
                <div class="form-group">
                        <input type="text" class="form-control" name="company_name" placeholder="Company Name*">
                </div>
                <h3> Company Representative's details</h3>
                    <div class="form-group"> 
                            <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="First Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="lastname" placeholder="Last Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="zipcode" placeholder="Zip Code">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Phone Number*">
                    </div>   
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="timetype" id="exampleRadios1" value="once" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            We want to donate one time
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="timetype" id="exampleRadios2" value="periodically">
                        <label class="form-check-label" for="exampleRadios2">
                            We want to donate periodically
                        </label>
                    </div>        
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">How did you find us?</label>
                        <textarea class="form-control rounded-0" name="referral_method" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    
                    <div class="form-check">
                        <button type="submit" class="btn btn-success">Please contact me</button>
                        <button type="reset" class="btn btn-info" >Clear form</button>
                    </div>
            <br>
            <a href="/">Go back to main page</a>   	 	 
            </form>
            </div>
        <div>   
    </div>   
    </body>
</html>