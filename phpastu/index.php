<?php
include 'header.php';
?>

<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to our Camera Store!</h1>
        <p class="lead">We offer the best quality cameras for all your photography needs.</p>
    </div>
    <div class="row">
        <div class="col-lg-6">
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
        <div class="col-lg-6">
            <div class="card shadow-lg mb-5">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form action="personregister.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
