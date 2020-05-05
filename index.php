<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login Form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="col-lg-6">
                <h2>Sign In Form</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sign in </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>