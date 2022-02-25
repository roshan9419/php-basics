<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Form Validation IsSet()</title>
</head>
<body>
    <style>
        body {
            padding: 20px;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>

    <?php
        // error variables
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";
        $anyError = false;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
                $emailErr = "E-mail is required";
            } else {
                if (is_email_valid($_POST["email"]))
                    $email = test_input($_POST["email"]);
                else
                    $emailErr = "Not a valid email";
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
            $anyError = ($nameErr != "" || $emailErr != "" || $websiteErr != "" || $genderErr != "");
            // echo var_dump($anyError);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = ucfirst($data); //makes first char upper case
            return $data;
        }

        function is_email_valid($email) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    ?>

    <h1>PHP Form Validation</h1>
    <p class="error">* Mandatory Fields</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <b>Name</b><span class="error">*</span>
        <br>
        <input type="text" name="name" value=<?php if (isset($name) && $anyError) echo $name; else echo "";?>>
        <span class="error"><?php echo $nameErr;?></span>
        <br><br>
        
        <b>E-mail</b><span class="error">*</span>
        <br>
        <input type="text" name="email" value=<?php if (isset($email) && $anyError) echo $email; else echo "";?>>
        <span class="error"><?php echo $emailErr;?></span>
        <br><br>
        
        <b>Website</b><span class="error">*</span>
        <br>
        <input type="text" name="website" value=<?php if (isset($website) && $anyError) echo $website; else echo "";?>>
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        
        <b>Comment</b>
        <br>
        <textarea name="comment" rows="5" cols="50"></textarea>
        <br><br>
        
        <b>Gender:</b><span class="error">*</span>
        <br>
        <input type="radio" name="gender" value="female" <?php if (isset($gender) && $anyError && strtolower($gender)=="female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="male" <?php if (isset($gender) && $anyError && strtolower($gender)=="male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="other" <?php if (isset($gender) && $anyError && strtolower($gender)=="other") echo "checked"; ?>> Other
        <span class="error"><?php echo $genderErr;?></span>
        <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
        <span class="success"><?php if (!$anyError && strlen($name) != 0) echo "Successfully Submitted" ?></span>
    </form>

    <?php
        // check if any error, and is not the first time when screen loaded
        if (!$anyError && strlen($name) != 0) {
            echo "<hr><h2>Your Input</h2>";
            echo "<br><b>Name:</b> ".$name;
            echo "<br><b>E-mail:</b> ".$email;
            echo "<br><b>Website:</b> ".$website;
            echo "<br><b>Gender:</b> ".$gender;
            if (strlen($comment) != 0)
                echo "<br><b>Comment:</b> ".$comment;
        }
    ?>

</body>
</html>