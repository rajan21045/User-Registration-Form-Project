<?php
if (isset($_POST['submit'])) {
    $name = $_POST["username"];
    $ps = $_POST["password"];
    $rps = $_POST["psw-repeat"];
}


    if($ps != $rps) {
    echo '<p style="color:red; text-align:center; font-weight:bold;">Passwords do not match!</p>';
    exit;
} 

    else {
    echo '<h2 style="color:#28a745;text-align:center;display:flex; justify-content:center; align-items:center; height:100vh; font-weight:bold;">Form Submitted Successfully!</h2>';
}

$hashed_password = password_hash($ps, PASSWORD_DEFAULT);

$filename = "data.txt";
$fp = fopen($filename, "a") or die("Unable to open file!");
$str = "Name: $name, Password: $hashed_password\n"; // Save hashed password
fwrite($fp, $str);
fclose($fp);
?>