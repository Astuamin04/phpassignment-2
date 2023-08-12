<?php
include 'header.php';
include 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
        session_start();
        $_SESSION['login_user'] = $email;
        header("location: userpersonaldetails.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<div class="container">
    <div class="card shadow-lg mb-5">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form action="signin.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
