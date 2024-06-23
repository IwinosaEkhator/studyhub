<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us!</title>

     <!-- Bootstrap Javascript -->
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
     crossorigin="anonymous"
   />
    <link rel="stylesheet" href="{{url('CSS/about.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <link rel="shortcut icon" href="Favicon.png" type="image/x-icon">
</head>
<body>
    @include('includes.navbar')
    <div class="">

    </div>
    <div class="head">
        <hr>
        <h1>About Us!</h1>
    </div>
    <div class="image">
        <div class="img"></div>
        <div class="box">
            <h1>Welcome to StudyHub</h1>
            <p class="quote" style="font-weight: 400;"> "A library is not a luxury but one of the necessities of life."</p>
            <h3>What we really do?</h3>
            <p class="objective">
                Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.
                Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper.
                Proin sed ultrices erat. Praesent varius ultrices massa at faucibus.
                Aenean dignissim, orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue.
                Pellentesque vitae eros eget enim mollis placerat. Aliquam non tincidunt urna.
                Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat.
                Praesent varius ultrices massa at faucibus. Aenean dignissim,
                orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet augue.
                Pellentesque vitae eros eget enim mollis placerat.
            </p>
            <div class="vision">
                <div class="vis1">
                    <h3>Our Vision</h3>
                    <p>Pellentesque sodales augue eget ultricies ultricies.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Curabitur sagittis ultrices condimentum</p>
                </div>
                <div class="vis2">
                    <h3>Our Vision</h3>
                    <p>Pellentesque sodales augue eget ultricies ultricies.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Curabitur sagittis ultrices condimentum</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="full-width">
    
    @include("includes.footer")
    <script src="{{url('js/index.js')}}"></script>
</body>
</html>
