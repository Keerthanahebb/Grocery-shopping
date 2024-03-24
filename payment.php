<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: aquamarine;
        }
    </style>
</head>
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset ($user_id)) {
    header('location:login.php');
}
;


if (isset ($_POST['order'])) {
    if ($method == 'debit card') {
        $card_number = $_POST['card_number'];
        $card_number = filter_var($card_number, FILTER_SANITIZE_STRING);
        $month = $_POST['month'];
        $year = $_POST['year'];
        $cvv = $_POST['cvv'];

        

        // Process the debit card information here

        // Show an alert to the user

    }
    

}





?>


<body>
    <h1>Enter Your Payment Details</h1>
    <form id="paymentForm">
        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" maxlength="16" required><br><br>

        <label for="expiryDate">Expiry Date (MM/YYYY):</label>
        <input type="text" id="expiryDate" name="expiryDate" pattern="(0[1-9]|1[0-2]|[1-9])\/[0-9]{4}"
            placeholder="MM/YYYY" required><br><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" required><br><br>

        <button type="submit" id="submitPayment">Submit Payment</button>
    </form>

    <script>
        document.getElementById("submitPayment").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent form submission

            // Perform payment processing here

            alert("Payment submitted successfully!");
            window.location.href = "home.php";
        });
    </script>
</body>

</html>


</body>

</html>