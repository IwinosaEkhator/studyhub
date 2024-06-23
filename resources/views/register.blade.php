<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub</title>
    <link rel="stylesheet" href="{{url('CSS/login.css')}}">
    <script src="https://kit.fontawesome.com/a7b55340b3.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Favicon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="{{url('img/Books.jpg')}}" alt="">
        </div>
        <div class="form">
            <div class="text">
                <h5>Already have an account?</h5><span><a href="Sign-in.html"><button type="button" class="btnn">SIGN IN</button></a></span>
            </div>
            <div class="sign">
                <h2>Welcome to StudyHub!</h2>
                <p>Register your account</p>
            </div>
            <div class="formbox">
                <form action=" " method="post">
                    <div class="list-group">
                        <label for="name">Name </label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="list-group">
                        <label for=" e-mail"> E-mail </label>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                    </div>
                    <div class="list-group">
                        <label for="rank">Password </label>
                        <div class="password-container">
                            <input type="text" id="password" name="password" placeholder="8+ characters" required>
                            <div class="password-icon">
                                <span>
                                    <i class="fa-regular fa-eye" id="show"></i>
                                    <i class="fa-regular fa-eye-slash" id="hide"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="btn">
                        <button id="button" type="submit" value="Submit">Register</button>
                    </div>
                    
                </form>
            </div>
            <div class="create">
                <p class="str">Create account with</p><span>
                    <div class="icon">
                        <i class="fa-brands fa-facebook-f" title="Facebook"></i>
                        <i class="fa-brands fa-apple" title="Apple"></i>
                        <i class="fa-brands fa-google" title="Google"></i>
                        <i class="fa-brands fa-linkedin-in" title="LinkedIn"></i>
                    </div>
                </span>
            </div>
        </div>
    </div>
</body>
</html>