<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'radhyanagf' && $password == '100603') {
        echo "<h2>Welcome, ".$username." !</h2><br>";
        include "loginInc.php";
        echo "Nama&emsp;: ".$name."<br>";
        echo "Email&emsp;: ".$email."<br>";
        echo "Waktu login : ".$time."<br>";
    } elseif ($username != 'radhyanagf' || $password != '100603') {
        header("Location: redirect.php");
    }
?>