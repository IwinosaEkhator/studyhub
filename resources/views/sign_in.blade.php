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
                <h5>Don't have an account?</h5><span><a href="{{ route('register') }}"><button type="button" class="btnn">SIGN UP</button></a></span>
            </div>
            <div class="sign">
                <h2>Welcome to StudyHub!</h2>
                <p>Login to your account</p>
            </div>
            <div class="formbox">
                <form action="/auth" method="POST">
                    @csrf
                    <div class="list-group">
                        <label for=" email"> E-mail </label>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                    </div>

                    @if ($errors->has('email'))
                        <div>{{ $errors->first('email') }}</div>
                    @endif

                    <div class="list-group">
                        <label for="password">Password </label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="8+ characters" required>
                            <div class="password-icon">
                                <span>
                                    <i class="fa-regular fa-eye" id="show"></i>
                                    <i class="fa-regular fa-eye-slash" id="hide"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    @if ($errors->has('password'))
                        <div>{{ $errors->first('password') }}</div>
                    @endif

                    
                    <div class="btn">
                        <button id="button" type="submit" value="Submit">Login</button>
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