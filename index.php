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

    <!-- Form -->
    <main class="main container">
        <div class="row justify-content-center align-items-center">
            <div class="form col-md-6">
                <form action="thankYou.php" method="POST" class="needs-validation" novalidate>

                    <div class="form-group">
                        <input name='name' type="text" class="form-control" id="name" placeholder="*Full Name" required>
                        <div class="invalid-feedback">
                            Please provide your name.
                        </div>
                    </div>

                <!-- Connect Section -->
                    <div onclick=selectConnect() class="headers">
                        <h1>Connect</h1>
                    </div>
                    <div id="connectSection" class="hidden">
                        <div class="form-row justify-content-center updating">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="updating" name="updating">
                            <label class="form-check-label" for="updating">
                                Updating Contact Information?
                            </label>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="form-row justify-content-center">
                        <div class="form-group col-md-4">
                            <label for="apt">Apt.</label>
                            <input id="apt" name="apt" class="form-control">
                            </input>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-5">
                                <label for="birthday">Birthday</label>
                                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="age">Age</label>
                                <select id="age" name="age" class="form-control">
                                <option selected>select range</option>
                                <option>under 12</option>
                                <option>12-19</option>
                                <option>20-29</option>
                                <option>30-39</option>
                                <option>40-49</option>
                                <option>50-59</option>
                                <option>60+</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-5">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="attendance">Attendance</label>
                                <select id="attendance" name="attendance" class="form-control">
                                <option selected>select one</option>
                                <option>1st time guest</option>
                                <option>2nd time guest</option>
                                <option>Regular attender</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="invitedBy">How did you hear about NWLife?</label>
                            <textarea class="form-control" id="invitedBy" name="invitedBy" rows="3" placeholder="Name of person who invited you, website, church sign, invitation card..."></textarea>
                        </div>
                    </div>

                <!-- Next Steps Section -->
                    <div onclick=selectNS() class="headers">
                        <h1>Next Steps</h1>
                    </div>
                    <div id="nextStepsSection" class="hidden">
                        <div class="form-row">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nextStepRelationship" name="nextStepRelationship">
                            <label class="form-check-label" for="nextStepRelationship">
                                <strong>I'm coming home to relationship with God.</strong>
                            </label>
                            </div>
                        </div>
                        <ul>
                            <li>For you are all children of God through faith In Christ Jesus. (Galatians 3.26)</li>
                            <li>You are members of God's family. (Epheslans 2.19)</li>
                        </ul>
                        <div class="form-row rts">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="readyToServe" name="readyToServe">
                            <label class="form-check-label" for="readyToServe">
                                <strong>I'm ready to jump in and serve at NWLife.</strong>
                            </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nextStepOther" name="nextStepOther">
                            <label class="form-check-label" for="nextStepOther">
                                <strong>Other:</strong>
                            </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="otherContent" name="otherContent" rows="2"></textarea>
                        </div>
                    </div>

                <!-- Prayer & Praise Section -->
                    <div onclick=selectReport() class="headers">
                        <h1>Prayer & Praise</h1>
                    </div>
                    <div id="reportSection" class="hidden">
                        <div class="form-group">
                            <label for="pAndPraise">Prayer Request / Praise Report:</label>
                            <textarea class="form-control" id="pAndPraise" name="pAndPraise" rows="3" placeholder="Let us know anything we can keep in prayer and/or praise God with you for..."></textarea>
                        </div>
                    </div>

                <!-- Submit Button  -->
                    <div class="row justify-content-center">
                        <button id="submitPHP" type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>

            </div>

    <!-- Links -->
            <div class="links col-md-5">
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