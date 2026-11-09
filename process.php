
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST["fullname"] ?? ""), ENT_QUOTES, "UTF-8");
    $email = htmlspecialchars(trim($_POST["email"] ?? ""), ENT_QUOTES, "UTF-8");
    $phone = htmlspecialchars(trim($_POST["phone"] ?? ""), ENT_QUOTES, "UTF-8");
    $dob = htmlspecialchars($_POST["dob"] ?? "", ENT_QUOTES, "UTF-8");
    $gender = htmlspecialchars($_POST["gender"] ?? "", ENT_QUOTES, "UTF-8");
    $course = htmlspecialchars($_POST["course"] ?? "", ENT_QUOTES, "UTF-8");
    $address = htmlspecialchars(trim($_POST["address"] ?? ""), ENT_QUOTES, "UTF-8");

    if (
        empty($name) || empty($email) || empty($phone) ||
        empty($dob) || empty($gender) || empty($course) ||
        empty($address) ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !preg_match("/^[0-9]{10}$/", $phone)
    ) {
        die("Invalid information. Please go back and fill the form correctly.");
    }

} else {
    die("Please submit the registration form first.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="result">
        <h2>✓ Your response has been recorded!</h2>

        <p>Thank you for completing the Online Registration Form. Your submitted details are displayed below.</p>

        <hr>

        <p><b>Full Name:</b> <?php echo $name; ?></p>
        <p><b>Email Address:</b> <?php echo $email; ?></p>
        <p><b>Phone Number:</b> <?php echo $phone; ?></p>
        <p><b>Date of Birth:</b> <?php echo $dob; ?></p>
        <p><b>Gender:</b> <?php echo $gender; ?></p>
        <p><b>Course:</b> <?php echo $course; ?></p>
        <p><b>Address:</b> <?php echo $address; ?></p>

        <hr>

        <a href="index.html">Submit another response</a>
    </div>
</body>
</html>
