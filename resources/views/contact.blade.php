<!DOCTYPE html>
<html lang="en">
{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us!</title>
    <link rel="shortcut icon" href="Favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a7b55340b3.js" crossorigin="anonymous"></script>
     <!-- Bootstrap Javascript -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
     crossorigin="anonymous"
   />
    <link rel="stylesheet" href="{{url('CSS/contact.css')}}">
</head> --}}
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyHub: Contact Us </title>
    <link rel="shortcut icon" href="Favicon.png" type="image/x-icon"></head>

    <!-- Icons -->
    <script
      src="https://kit.fontawesome.com/a7b55340b3.js"
      crossorigin="anonymous"
    ></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Slick -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    />

    <!-- Bootstrap Javascript -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Slick -->
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    ></script>

    <link rel="stylesheet" href="{{url('CSS/style.css')}}" />
    <link rel="stylesheet" href="{{url('CSS/responsive.css')}}" />
  </head>
<body>
    @include('includes.navbar')
    <div class="contact-head">
        <hr>
        <h1>Contact Us!</h1>
    </div>
    <div class="embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.134924279751!2d5.650923032932098!3d6.19308155685793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d9ef14c80181%3A0x77372b977cb812ba!2sBenson%20Idahosa%20University%20(Legacy%20Campus)!5e0!3m2!1sen!2sng!4v1718553286080!5m2!1sen!2sng"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="box">
        <h1 class="inf">Contact Information</h1>
        <p class="quote"> We will answer any questions you may have about our online sales, rights or partnership service right here.</p>
        <div class="location">
            <div class="locate1">
                <div class="address">
                    <h3>Okha Branch</h3>
                    <p>BIU Legacy campus, Okha Community, Off Sapele Road, Benin city, Nigeria.</p>
                </div>
                <div class="conc">
                    <a href="mailto:johndoe@gmail.com"><p>johndoe@gmail.com</p></a>
                    <a href="tel:+234 803 456 7890"><p>+234 803 456 7890</p></a>
                </div>
            </div>
            <div class="locate2">
                <div class="address">
                    <h3>Ugbor Branch</h3>    
                    <p>PMB 1100,
                    University Way.
                    Off Upper Adesuwa Road
                    GRA.
                    Benin City
                    Nigeria.</p>
                    <div class="conc">
                        <a href="mailto:johndoe@gmail.com"><p>johndoe@gmail.com</p></a>
                        <a href="tel:+234 803 456 7890"><p>+234 803 456 7890</p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <h3>Social Media</h3>
            <div class="icons">
                <i class="fa-brands fa-instagram" id="insta"></i>
                <i class="fa-brands fa-facebook-f" id="facebook"></i>
                <i class="fa-brands fa-youtube" id="youtube"></i>
                <i class="fa-brands fa-x-twitter" id="x-twitter"></i>
                <i class="fa-brands fa-pinterest" id="pinterest"></i>
            </div>
        </div>
        <div class="formbox">
            <h1>Get in Touch</h1>
            <form action="" method="post">
                <div class="list">
                    <div class="list-group">
                        <label for="name">Name <span class="red">*</span></label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="list-group">
                        <label for="name">Email <span class="red">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                
                <div class="list-group">
                    <label for="name">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="list-group">
                    <label for="name">Details please! Your review helps other shoppers</label>
                    <textarea name="details" id="details" placeholder="What did you like or dislike? What should other shoppers know before buying?"></textarea>
                </div>
                <div class="list-group">
                    <button type="submit" class="sub">Submit Message</button>
                </div>
            </form>
        </div>
    </div>
    <hr class="full-width">

@include("includes.footer")
<script src="{{url('js/index.js')}}"></script>
</body>
</html>