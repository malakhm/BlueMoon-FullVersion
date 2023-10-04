<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>user register</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color:#637496">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                       
                        <div class="login-form">
                            <h4>Register</h4>
                            <form  method="POST" action="includes\signup.php">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Your first name here">
                                </div>

                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Your last name here">
                                </div>

                                <div class="form-group">
                                    <label>Date Of Biirth</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>gender</label><br>
                                    <select name="gender">
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="number" class="form-control" placeholder="+ddd dd-dddddd">
                                </div>

                                <div class="form-group">
                                    <label>username</label>
                                    <input type="text" name="username" class="form-control" placeholder="user123">
                                </div>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password"name="password" class="form-control" placeholder="********">
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="passwordConfirm" class="form-control" placeholder="********">
                                </div>
              
                                <button type="submit" style="background-color:#637496;color:white;" class="btn  btn-flat m-b-30 m-t-30">Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have an account ? <a href="login.php"> Login Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>