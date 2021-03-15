<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico">

    <link rel="stylesheet" href="/css/onboarding-style.css">

    <title>Digistore24 Onboarding Form</title>
</head>
<body>

<nav class="nav">
    <div class="container">
        <div class="nav__logo">
            <img src="/img/logo.svg" alt="logo" class="img-fluid">
        </div>
    </div>
</nav>

<section class="thank-you">
    <div class="container">
        <div class="thank-you__wrap">
            <h2 class="heading-primary">
                Digistore24 Onboarding Form
            </h2>

            <h1 class="heading-secondary">
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </h1>


            <a class="btn btn-blue" href="/">
                Go Back
            </a>

        </div>
    </div>
</section>

<script src="/js/jquery/jquery-3.5.1.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
