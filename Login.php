<?php
session_start();

$servername = "localhost:8889";
$username = "tarun";
$password = "9904";
$dbname = "ChefOnDemand";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname = $_POST["username"];
$password1 = $_POST["password"];

$sql = "SELECT * FROM users WHERE username ='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // echo $user['password'];
    if (password_verify($password1, $user['password'])) {
        $_SESSION["user"] = $user;
        header("Location: sucess.html");
    } else {
        echo "Invalid email or password.";
        header("Refresh:2; url=Login_user.html");
    }
} else {
    echo "Invalid email or password. ";
    header("Refresh:2; url=Login_user.html");
}

$sql = "SELECT * FROM chef_reg WHERE username ='$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo $user['password'];
    if (password_verify($password1, $user['password'])) {
        $_SESSION["user"] = $user;
        header("Location: csuccess.html");
    } else {
        echo "Invalid email or password.";
        header(" url=Login_user.html");
    }
} else {
    echo "Invalid email or password. ";
    header("Refresh:2; url=Login_user.html");
}

$sql = "SELECT * FROM cadmin WHERE username ='$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password1, $user['password'])) {
        $_SESSION["user"] = $user;
        header("Location: /test/Breeze-Free-Bootstrap-Admin-Template-master/template/index.html");
    } else {
        echo "Invalid email or password.";
        header("Refresh:2; url=Login_user.html");
    }
} else {
    echo "Invalid email or password. ";
    header("Refresh:2; url=Login_user.html");
}

$conn->close();
