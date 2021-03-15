<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Digistore24 Newsletter</title>
</head>
<body>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/img/logo.png" alt="logo" class="d-block mx-auto">
            </div>
        </div>
    </div>
</section>

<form action="{{url('newsletter-signup')}}" method="POST" class="form" name="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<section class="sign-up">
    <div class="container">

        <div class="row">
            <div class="col">
                <h1 class="heading-primary">
                    Newsletter Sign-Up
                </h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-4">
                    @foreach ($errors->all() as $error)
                        <li class="heading-secondary error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-between">
            <div class="col-md-6">
                <label for="firstName" class="label">First Name</label>
                <input type="text" value="{{old('firstName')}}" id="firstName" name="firstName" required>

                <label for="emailAddress" class="label mt-5">Email Address</label>
                <input type="text" value="{{old('emailAddress')}}" id="emailAddress" name="emailAddress" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="label mt-5 mt-md-0">Last Name</label>
                <input type="text" value="{{old('lastName')}}" id="lastName" name="lastName" required>

                <label for="digistoreID" class="label mt-5">Digistore ID</label>
                <input type="text" value="{{old('digistore24Id')}}" id="digistoreID" name="digistore24Id" required>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <h2 class="heading-secondary">
                    Please select the newsletter<br>
                    you wish to subscribe to
                </h2>

                <div class="sign-up__checkboxes">
                    <label class="checkbox-title first" for="dsFeatures">
                        Digistore24 Features

                        <input type="checkbox" id="dsFeatures" name="list[1]"
                               value="1" {{ in_array(1, old('list', [])) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="sign-up__checkboxes">
                    <label class="checkbox-title" for="webinar">
                        Coffee & Cash Webinar
                        <span class="checkbox-paragraph">
                            For more information,
                            <a target="_blank" href="https://www.coffeeandcash.com/?utm_source=website&utm_medium=referral&utm_campaign=consultant_email_signup">
                                please visit here
                            </a>
                        </span>

                        <input type="checkbox" id="webinar" name="list[2]"
                               value="2" {{ in_array(2, old('list', [])) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="sign-up__checkboxes">
                    <label class="checkbox-title" for="academy">
                        Digistore 24 Academy
                        <span class="checkbox-paragraph">
                            For more information,
                            <a target="_blank" href="https://www.digistoreacademy.com/coming-soon/?utm_source=website&utm_medium=referral&utm_campaign=consultant_email_signup">
                                please visit here
                            </a>
                        </span>

                        <input type="checkbox" id="academy" name="list[3]"
                               value="3" {{ in_array(3, old('list', [])) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row justify-content-center justify-content-sm-start">
            <div class="form__item">
                <button class="button-primary" type="submit" value="Submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</section>

</form>

<section class="member">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h3 class="heading-secondary">
                    Not a Digistore24 member?
                </h3>

                <a href="https://www.digistore24.com/en/signup" target="_blank"><button class="button-primary">
                    Sign Up Here
                </button></a>
            </div>
            <div class="col-md-5 d-none d-md-block">
                <img class="d-block ml-md-auto ml-0" src="/img/logo-2.png" alt="logo symbol">
            </div>
        </div>
    </div>
</section>


<footer class="privacy">
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <a href="https://www.digistore24.com/page/privacy" class="privacy-header">
                    Privacy Policy
                </a>
            </div>
            <div>
                <a href="#" class="privacy-header divider">
                     |
                </a>
            </div>
            <div>
                <a href="https://www.digistore24.com/page/imprint" class="privacy-header">
                    Legal Notice
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="/js/jquery/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

