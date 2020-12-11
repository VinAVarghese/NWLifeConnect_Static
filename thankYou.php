<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/icon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>NWLife Connect</title>
</head>
<body>
    <!-- Hero -->
    <header class="hero">
        <div id="scrollHere"></div>
        <div class="filter"></div>
        <a href="https://nwlife.church/">
            <img class="logo" src="./assets/nwlifelogo.png" alt="logo">
        </a>
    </header>
    <div id="scrollHere"></div>

    <!-- Thank You -->
    <main class="main container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md">
            <div class="ty-header">
                <h1>Thank You!</h1>
            </div>
    <!-- Links -->
            <div class="links col-md">
                <div class="row justify-content-around align-items-center">
                    <a class="col-5 tile-size give-img" href="https://pushpay.com/g/nwlifechurch?src=hpp">
                        <h3>Give</h3>
                    </a>
                    <a class="col-5 tile-size attend-img" href="http://www.nwlifechurch.com/attend/">
                        <h3>Attend</h3>
                    </a>
                    <a class="col-5 tile-size toy-img" href="https://www.target.com/gift-registry/giftgiver?registryId=e60318b7191f44738b46ed9af7432b8a&lnk=registry_custom_url">
                        <h3>Toy Give</h3>
                    </a>
                    <a class="col-5 tile-size christmas-img" href="http://www.nwlifechurch.com/christmas/">
                        <h3 class="longText">Christmas Eve</h3>
                    </a>
                </div>
            </div>
        </div>
    </main>

    
    <!-- JavaScript Links -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="index.js"></script>
</body>
</html>

<!-- PHP CODE -->

<?php

$name = $_POST['name'];
$updating = $_POST['updating']; // Checkbox that will post "on" if selected and left blank if not
$address = $_POST['address'];
$apt = $_POST['apt'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$age = $_POST['age'];
$occupation = $_POST['occupation'];
$attendance = $_POST['attendance'];
$invitedBy = $_POST['invitedBy'];
$nextStepRelationship = $_POST['nextStepRelationship']; // Checkbox that will post "on" if selected and left blank if not
$readyToServe = $_POST['readyToServe']; // Checkbox that will post "on" if selected and left blank if not
$nextStepOther = $_POST['nextStepOther']; // Checkbox that will post "on" if selected and left blank if not
$otherContent = $_POST['otherContent'];
$pAndPraise = $_POST['pAndPraise'];

// Test code: echo "$name <br> 'updating:' $updating <br> $address <br> $apt <br> $city <br> $zip <br> $email <br> $phone <br> $birthday <br> $age <br> $occupation <br> $attendance <br> $invitedBy <br> 'NSR:' $nextStepRelationship <br> 'RTS:' $readyToServe <br> 'NSO:'$nextStepOther <br> $otherContent <br> $pAndPraise";
?>