<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Form Validation</title>
</head>
<body>
    <style>
        body {
            padding: 20px;
        }
        .error {
            color: red;
        }
    </style>

    <?php
        // error variables
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "E-mail is required";
            } else {
                $email = test_input($_POST["email"]);
            }
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            if (empty($_POST["website"])) {
                $websiteErr = "Website is required";
            } else {
                $website = test_input($_POST["website"]);
            }
            // comment not mandatory
            $comment = test_input($_POST["comment"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h1>PHP Form Validation</h1>
    <p class="error">* Mandatory Fields</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <b>Name:</b> <input type="text" name="name">
        <span class="error">*<?php echo $nameErr;?></span>
        <br><br>
        
        <b>E-mail:</b> <input type="email" name="email">
        <span class="error">*<?php echo $emailErr;?></span>
        <br><br>
        
        <b>Website:</b> <input type="text" name="website">
        <span class="error">*<?php echo $websiteErr;?></span>
        <br><br>
        
        <b>Comment:</b> <textarea name="comment" rows="5" color="40"></textarea>
        <br><br>
        
        <b>Gender:</b>
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="other"> Other
        <span class="error">*<?php echo $genderErr;?></span>
        <br><br>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    echo "<hr><h2>Your Input</h2>";
    echo "<br><b>Name:</b>".$name;
    echo "<br><b>E-mail:</b>".$email;
    echo "<br><b>Website:</b>".$website;
    echo "<br><b>Gender:</b>".$gender;
    echo "<br><b>Comment:</b>".$comment;
    ?>

</body>
</html>