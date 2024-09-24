<?php
include('connection2.php');

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 && $count_email == 0) {
        if ($password == $cpassword) {
            $sql = "INSERT INTO signup(username, email, password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: index.php");
                exit();
            }
        } else {
            echo '<script>
                    alert("Passwords do not match")
                    window.location.href = "index2.php";
                </script>';
        }
    } else {
        if ($count_user > 0) {
            echo '<script>
                    window.location.href = "index2.php";
                    alert("Username already exists!!")
                </script>';
        }
        if ($count_email > 0) {
            echo '<script>
                    window.location.href = "index2.php";
                    alert("Email already exists!!")
                </script>';
        }
    }
}
?>
