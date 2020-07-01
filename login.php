<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="documentation/css/login.css">
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/images/rmutr.png" class="logo" width="auto" height="30" >
        </a>
    </nav>
    <center>
        <div class="login-form mt-100">
            <div class="nav-img Regular shadow">
                <img src="Images/hardware_red.jpg!d" class="img-login Regular shadow" alt="">
            </div>
            <div class="nav-login Regular shadow">
                <center>
                    <H2 class="login">Login</H2>
                </center>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="info">ชื่อบัญชี</label>
                        <input type="text" class="form-control w-75 p-3" name="email" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="info">รหัสผ่าน</label>
                        <input type="password" class="form-control w-75 p-3" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submitt" class="btn btn-primary submitt">Login</button>
            </div>
            </form>
        </div>
    </center>
</body>

</html>