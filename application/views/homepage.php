<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Work with Nature</title>
  
    <!-- adding for social -->

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/social-share-kit.css" type="text/css">
    <!-- <script src="main.js"></script> -->
    <script type="text/javascript" src="<?=base_url() ?>/assets/js/social-share-kit.js"></script>
    <script type="text/javascript">
       SocialShareKit.init({ forceInit: true });
    </script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>

    html, body {
        height: 100%;
        background-image: url("https://images.unsplash.com/photo-1473134090548-69219f9cbb80?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=62343964adc102604ce5ede2c12e9eac&auto=format&fit=crop&w=1500&q=80");
        background-size: cover;
        color: white;
        }

    .logo {
        margin: 0;
        padding-left: 50px;
        padding-top: 25px;
    }

    .left {
        /*background-color: #f8f8ff;*/
        float: left;
        width: 50%;
        /*height: 100%;*/
        padding-top: 15%;
        text-align: center;
        /*border: 3px solid red;*/
    }

    .right {
        /*background-color: #fff8f8;*/
        float: left;
        width: 50%;
        /*height: 100%;*/
        padding-top: 15%;
        text-align: center;
        /*border: 3px solid red;*/
    }

    .textstyling {
        padding-top: 5%;
        padding-left: 10%;
        padding-right: 10%;
    }
    
    .placeholder_image {
      /*width: 100%;*/
    }

    /*html {
      position: relative;
      min-height: 100%;
    }*/

    .button {
        margin-right: 15px;
        margin-left: 15px;
        border-radius: 50px;
        color: white;
        background-color: #43c86a;
        border: 2px solid white;
        padding: 10px 30px 10px 30px;
        font-weight: bold;
        font-size: 18px;
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 85px;
        /*background-color: #f5f5f5;*/
        background-color:rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .footer p {
        color: white;
        padding-top: 7px;
        font-size: 16px;
    }

  
    </style>

</head>
<body>
  
    <h1 class="logo">Work with Nature</h1>

    <div class="left">
        <div class="container-fluid">
            <h2>Individual donors</h2>
            <p class="lead textstyling">Thank you for your interest in saving the Costa Rican rainforest. Click below to proceed to the adoption of your own piece of rainforest and to view your own pieces of rainforest.</p>
        </div>
        
        
        <form action="individualcontroller/logged_in" method="POST">
            <input class="button" type="submit" value="View my forest" name="viewforest">
        </form>

        <br>

        <form action="individualcontroller/register_individual" method="POST">
            <input class="button" type="submit" value="Donate now" name="donatenow">
        </form>


    </div>

    <div class="right">
        <div class="container-fluid">
            <h2>Company donors</h2>
            <p class="lead textstyling">Interested in donating to Work With Nature as a company? Click below to leave your contact details and we will reach out to you.</p>

            <form action="companycontroller/index" method="POST">
            <input class="button" type="submit" value="Contact form" name="contact">
        </form>

        </div> 
    </div> <!-- end div class="container-fluid" -->

    <footer class="footer">
        <div class="container">
        <p class="text-muted">Tell others about us through one of the platforms below.</p>
            <div class="ssk-group">
                <a href="http://www.facebook.com/sharer.php?u=http://www.adoptrainforest.com" class="ssk ssk-facebook" target="_blank"></a>     
                <a href="http://twitter.com/share?text=Adopt Rain Forest Now&url=http://www.adoptrainforest.com" class="ssk ssk-twitter" data-url="http://url-for-twitter" data-text="Text for twitter" target="_blank"></a>
                <a href="https://plus.google.com/share?url=http://www.adoptrainforest.com" class="ssk ssk-google-plus" target="_blank"></a>
                <a href="http://pinterest.com/pin/create/button/?url=http://www.adoptrainforest.com" class="ssk ssk-pinterest" target="_blank"></a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.adoptrainforest.com" class="ssk ssk-linkedin" target="_blank"></a>
            </div>
        </div>
    </footer>

 
</body>

