<?php
session_start();
if (isset($_SESSION['username']) && isset($_POST['role'])) {
    header("Location: index.php");
}
else if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        require_once 'includes/db.inc.php';

        $sql = "SELECT * FROM user_tb WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] === $password && $row['role'] == $role)
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];

                header("Location: index.php");
            }
            else 
            {
                echo "<script>alert('Username or password is wrong')</script>";
            }
        }
    }
?>