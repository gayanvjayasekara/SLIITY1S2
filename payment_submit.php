<?php
include "config.php";
if (isset($_POST['submit_payment'])) { ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>PAYMENT SUBMIT</title>
        <link rel="stylesheet" href="payment.css" />
    </head>

    <body>
        <?php

        $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
        $inquiry = isset($_POST['inquiry']) ? $_POST['inquiry'] : '';
        $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : '';
        $insurance_type = isset($_POST['insurance_type']) ? $_POST['insurance_type'] : '';
        $claim_type = isset($_POST['claim_type']) ? $_POST['claim_type'] : '';
        $res = mysqli_query($con, "INSERT INTO payments (insurance_type, claim_type, first_name, last_name, email, contact_no, amount, inquiry) VALUES ('$insurance_type', '$claim_type', '$first_name', '$last_name', '$email', '$contact_no', '$amount', '$inquiry')");

        if ($res) {
            ?>
            <div style="width: 50%;
                    margin-left: 25%;
                    margin-top: 100px;
                    border:solid 1px #446;
                    padding:15px;">
                <div style="text-align: center">
                    <h2>Payment Success!</h2>
                </div>
                <hr>
                <div>First Name : <?php echo $first_name; ?> </div>
                <div>Last Name : <?php echo $last_name; ?> </div>
                <div>Email : <?php echo $email; ?> </div>
                <div>Contact Number : <?php echo $contact_no; ?> </div>
                <div>Amount : <?php echo $amount; ?> </div>
                <hr>
                <div>Insurance Type : <?php echo $insurance_type; ?> </div>
                <div>Claim Type : <?php echo $claim_type; ?> </div>
                <div>inquiry : <?php echo $inquiry; ?> </div>
            </div>

        </body>


        </html>


        <?php

        } else {
            ?>
        <h3>
            SOMETHING WENT WRONG!
        </h3>

        <?php
        }
} else {
    ?>
    <p>Error 401</p>
    <br>

    <?php
}

?>
<br>
<a href="index.html" style="color:black; font-size: larger; margin-left:700px; padding-top:50px;">Done</a>
