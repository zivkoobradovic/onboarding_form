<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/sumoselect/sumoselect.min.css">
    <link rel="stylesheet" href="/css/onboarding-style.css">
    <link href="/css/app.css" rel="stylesheet">

    <title>TEST!!! Digistore24 Onboarding Form</title>
</head>

@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<body>
    <nav class="nav">
        <div class="container">
            <div class="nav__wrap">
                <div class="nav__logo">
                    <img src="/img/logo.svg" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </nav>

    <section class="onboarding-procedure">
        <div class="container">
            <div class="onboarding-procedure__wrap">
                @if(session('message'))
                <div class="bg-red-400 text-4xl text-white rounded-xl text-center p-5 mb-10">{{ session('message') }}</div>
                @endif
                <h2 class="heading-primary">
                    TEST!!! Digistore24 Onboarding Form
                </h2>

                <h3 class="heading-secondary">
                    Onboarding Procedure
                </h3>

                <div class="onboarding-procedure__popup">
                    <h4 class="heading-tertiary">
                        DIGISTORE24 ONBOARDING PROCEDURE FOR US MARKET:
                    </h4>

                    <ul class="onboarding-procedure__list">
                        <li class="onboarding-procedure__list__item">
                            The first step is for the vendor to clone all web pages in their product funnel (this
                            includes
                            the sales page, any upsells, downsells, OTO, and all others pages).
                        </li>

                        <li class="onboarding-procedure__list__item">
                            The onboarding team will set up the products in Digistore for the vendor and will send over
                            the
                            code for the trust badges, footer, and tracking code to be put on all web pages.
                        </li>

                        <li class="onboarding-procedure__list__item">
                            If the client does not have a programmer to do this, the Digistore24 onboarding team can add
                            the
                            codes for them. The Digistore onboarding team MUST have ALL OF THE ACCESS credentials (API
                            and
                            admin access) to the pages and fulfillment service.
                        </li>

                        <li class="onboarding-procedure__list__item">
                            For all DELIVERABLES (physical products) the vendor must submit a Certificate of Analysis
                            (COA;
                            analysis of ingredients in the product).
                        </li>

                        <li class="onboarding-procedure__list__item">
                            The vendor will need to fill out this form for every product funnel they’d like to add to
                            the
                            platform.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <form action="{{ url('onboarding-signup') }}" method="POST" class="form" name="form">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <section class="contact">
            <div class="container">
                <div class="contact__wrap">

                    <h2 class="heading-secondary">
                        Digistore Team Member Contact Name
                    </h2>

                    <div class="form__flex">

                        <div class="form__item">
                            <label for="contactPerson">
                                Full Name
                            </label>
                            <select class="mb" name="contact_person" id="contactPerson">
                                <option value="">
                                    No contact
                                </option>

                                @foreach($managers as $manager)
                                @if (old('contact_person') == $manager->id)
                                <option value="{{ $manager->id }}" selected>
                                    {{ $manager->name }}
                                </option>
                                @endif
                                    <option value="{{ $manager->id }}">
                                        {{ $manager->name }}
                                    </option>
                                @endforeach


                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="contact__wrap">
                    <h2 class="heading-secondary">
                        Contact Information
                    </h2>

                    <div class="form__flex">
                        <div class="form__item">
                            <label for="fullName">
                                Full Name
                            </label>
                            <input id="fullName" type="text" name="contact_info[full_name]"
                                placeholder="Contact’s full name...">
                        </div>
                        <div class="form__item">

                            <ul class="hide_time">
                                <li>
                                    <strong>
                                        UTC time:
                                    </strong>
                                    <span class="js-TimeUtc">
                                        2017-06-05T19:41:03Z
                                    </span>
                                </li>
                                <li>
                                    <strong>
                                        Local time:
                                    </strong>
                                    <span class="js-TimeLocal"></span>
                                </li>
                            </ul>

                            <label for="timeZone">
                                Time Zone
                            </label>
                            <select id="timeZone" class="js-Selector" name="contact_info[time_zone]">
                                <option value="-12.0">(GMT -12:00)</option>
                                <option value="-11.0">(GMT -11:00)</option>
                                <option value="-10.0">(GMT -10:00)</option>
                                <option value="-9.0">(GMT -9:00)</option>
                                <option value="-8.0">(GMT -8:00))</option>
                                <option value="-7.0">(GMT -7:00))</option>
                                <option value="-6.0">(GMT -6:00)</option>
                                <option value="-5.0">(GMT -5:00)</option>
                                <option value="-4.0">(GMT -4:00)</option>
                                <option value="-3.0">(GMT -3:00)</option>
                                <option value="-2.0">(GMT -2:00)</option>
                                <option value="-1.0">(GMT -1:00)</option>
                                <option value="0.0">(GMT)</option>
                                <option value="1.0">(GMT +1:00)</option>
                                <option value="2.0" selected="selected">(GMT +2:00)</option>
                                <option value="3.0">(GMT +3:00)</option>
                                <option value="4.0">(GMT +4:00)</option>
                                <option value="5.0">(GMT +5:00)</option>
                                <option value="6.0">(GMT +6:00)</option>
                                <option value="7.0">(GMT +7:00)</option>
                                <option value="8.0">(GMT +8:00)</option>
                                <option value="9.0">(GMT +9:00)</option>
                                <option value="9.5">(GMT +9:30)</option>
                                <option value="10.0">(GMT +10:00)</option>
                                <option value="11.0">(GMT +11:00)</option>
                                <option value="12.0">(GMT +12:00)</option>
                            </select>

                        </div>

                        <div class="form__item mt">
                            <label for="emailAddress">
                                E-Mail Address
                            </label>
                            <input id="emailAddress" type="email" name="contact_info[email]"
                                placeholder="Contact email address..." required>
                        </div>

                        <div class="form__item mt">
                            <label for="companyName">
                                Company Name
                            </label>
                            <input id="companyName" type="text" name="contact_info[company_name]"
                                placeholder="Company name..." required>
                        </div>

                        <div class="form__item mt">
                            <label for="phoneNumber">
                                Phone Number
                            </label>
                            <input id="phoneNumber" type="text" name="contact_info[phone]"
                                placeholder="Contact phone number..." required>
                        </div>

                        <div class="form__item mt">
                            <label for="skypeZoom">
                                Skype / Zoom
                            </label>
                            <input id="skypeZoom" type="text" name="contact_info[skype_zoom]"
                                placeholder="Contact’s Skype or Zoom ID..." required>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="access-data">
            <div class="container">
                <div class="access-data__wrap">
                    <div class="access-data__item">
                        <div class="label-flex">
                            <h2 class="heading-secondary">
                                Digistore24 / Svencart
                                <span>
                                    Access Data
                                </span>
                            </h2>
                            <div class="label-flex__item">

                                <div class="label-flex__item__icon">
                                    <a tabindex="0" class="" role="button" data-toggle="popover" data-placement="top"
                                        data-trigger="focus" title="Access Data" data-content="We ask your access data because DS24 is created
                                    as a platform that allows and encourages its vendors to independently
                                    set their products on it. And therefore only the vendors themselves
                                    can make changes to their account. In order for the onboarding team
                                    to make those changes we will have to use your access data.
                                    You can change your password, once the onboarding
                                    team has finished your onboarding.">
                                        <span>
                                            <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                <g>
                                                    <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                    <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                </g>
                                                <g></g>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="access-data__item">
                        <div class="form__flex">
                            <div class="form__item">
                                <div class="form__item">
                                    <label class="hide" for="DigiStore24-ID">
                                        Digistore24 / Svencart ID
                                    </label>
                                    <input id="DigiStore24-ID" type="text" name="platform[name]"
                                        placeholder="Digistore24 / Svencart ID" required>
                                </div>

                                <div class="form__item">
                                    <label class="hide" for="password">
                                        Password
                                    </label>
                                    <input id="password" type="text" name="platform[password]" placeholder="Password..."
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-information">
            <div class="container">
                <div class="product-information__wrap">
                    <h2 class="heading-secondary">
                        Product Information
                    </h2>

                    <div class="form__flex">
                        <div class="form__item">
                            <div class="label-flex">
                                <label for="productName">
                                    Product Name
                                </label>
                                <div class="label-flex__item">

                                    <div class="label-flex__item__icon">
                                        <a tabindex="0" class="" role="button" data-toggle="popover"
                                            data-placement="top" data-trigger="focus" title="Product Name" data-content="This will be the name of your product in the Digistore24
                                        marketplace. This form is for one product funnel only.">
                                            <span>
                                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                    <g>
                                                        <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                        <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                    </g>
                                                    <g></g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <input id="productName" type="text" name="product[product_name]" placeholder="Name of the Product...">
                        </div>

                        <div class="form__item">
                            <div class="label-flex">
                                <label for="techSupport">
                                    Technical Support
                                </label>
                                <div class="label-flex__item">

                                    <div class="label-flex__item__icon">
                                        <a tabindex="0" class="" role="button" data-toggle="popover"
                                            data-placement="top" data-trigger="focus" title="Technical Support"
                                            data-content="Do you have internal programming support?">
                                            <span>
                                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                    <g>
                                                        <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                        <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                    </g>
                                                    <g></g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <select name="techSupport[status]" id="techSupport">
                                <option value='1'>
                                    I have technical support
                                </option>
                                <option value='2'>
                                    I DON’T have technical support
                                </option>
                            </select>
                        </div>

                        <div class="form__item resp mt space-between">
                            <div>
                                <div class="label-flex">
                                    <label for="productType">
                                        Product Type
                                    </label>
                                    <div class="label-flex__item">

                                        <div class="label-flex__item__icon">
                                            <a tabindex="0" class="" role="button" data-toggle="popover"
                                                data-placement="top" data-trigger="focus" title="Product Type"
                                                data-content="Digital - membership area, downloadable.
                                            Physical - books, supplements...">
                                                <span>
                                                    <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                        viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                        <g>
                                                            <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                            <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                        </g>
                                                        <g></g>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <select class="mb" name="product[product_type]" id="productType">
                                    @foreach($productCategories as $productCategory)
                                        <optgroup label="{{ $productCategory->name }}">
                                            @foreach($productCategory->products as $productType)
                                                <option value="{{ $productType->id }}">
                                                    {{ $productType->name }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                <div class="custom-product-opt">
                                    <div class="label-flex mt">
                                        <label for="customProductType">
                                            Custom Product Type
                                        </label>
                                        <div class="label-flex__item">

                                            <div class="label-flex__item__icon">
                                                <a tabindex="0" class="" role="button" data-toggle="popover"
                                                    data-placement="top" data-trigger="focus"
                                                    title="Custom Product Type" data-content="Digital - membership area, downloadable.
                                                Physical - books, supplements...">
                                                    <span>
                                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                            y="0px" viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                            <g>
                                                                <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                                <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                            </g>
                                                            <g></g>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <input id="customProductType" class="custom-product-opt mb" type="text"
                                        placeholder="Custom product type" name="product[custom_product_type]">
                                </div>
                            </div>

                            <div class="form__item__flex">

                                <div>
                                    <div class="label-flex">
                                        <label for="affiliateCommission">
                                            Affiliate Commission
                                        </label>
                                        <div class="label-flex__item">

                                            <div class="label-flex__item__icon">
                                                <a tabindex="0" class="" role="button" data-toggle="popover"
                                                    data-placement="top" data-trigger="focus"
                                                    title="Affiliate Commission" data-content="This is the percent revenue share
                                                you will pay your affiliates. If you
                                                choose to not have affiliates you can put zero.">
                                                    <span>
                                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                            y="0px" viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                            <g>
                                                                <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                                <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                            </g>
                                                            <g></g>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__item__affiliate">
                                        <input id="affiliateCommission" name="product[affiliate_commission]" type="number"
                                            step="any">
                                        <span>
                                            %
                                        </span>
                                    </div>
                                </div>

                                <div>

                                    <div class="label-flex">
                                        <label for="productPrice">
                                            Product Price
                                        </label>
                                        <div class="label-flex__item">

                                            <div class="label-flex__item__icon">
                                                <a tabindex="0" class="" role="button" data-toggle="popover"
                                                    data-placement="top" data-trigger="focus" title="Product Price"
                                                    data-content="This is the amount your customer will pay at check out.">
                                                    <span>
                                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                            y="0px" viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                            <g>
                                                                <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                                <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                            </g>
                                                            <g></g>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="productPrice" name="product[product_price]" type="number" step="any">

                                </div>
                            </div>
                        </div>

                        <div class="form__item mt" id="ifTechSupport">
                            <div class="label-flex">
                                <label for="websiteAccess1">
                                    Website Access Credentials
                                </label>
                                <div class="label-flex__item">

                                    <div class="label-flex__item__icon">
                                        <a tabindex="0" class="" role="button" data-toggle="popover"
                                            data-placement="top" data-trigger="focus" title="Website Access Credentials"
                                            data-content="Website access OPTIONAL!
                                        *In case you don't have anyone to add the code (digi trust badge, digi
                                        footer) we can do that for you, in that case please provide login
                                        credentials for your sales page">
                                            <span>
                                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                    <g>
                                                        <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                        <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                    </g>
                                                    <g></g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <input class="mb" id="websiteAccess1" type="text" name="techSupport[website_access_url]"
                                placeholder="Login url...">

                            <label class="hide" for="websiteAccess2">
                                Username...
                            </label>
                            <input class="mb" id="websiteAccess2" type="text" name="techSupport[website_access_username]"
                                placeholder="Username...">

                            <label class="hide" for="websiteAccess3">
                                Password...
                            </label>
                            <input id="websiteAccess3" type="text" name="techSupport[website_access_password]"
                                placeholder="Password...">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sales-pages">
            <div class="container">
                <div class="sales-pages__wrap">
                    <h2 class="heading-secondary">
                        Sales Pages
                    </h2>

                    <p class="paragraph">
                        Once you clone your product funnel please list the main product sales page URL.
                    </p>

                    <div class="form__flex">
                        <div class="form__item">
                            <div class="label-flex">
                                <label for="salesPage">
                                    Sales Page
                                </label>
                                <div class="label-flex__item">

                                    <div class="label-flex__item__icon sales-page-icon">
                                        <a tabindex="0" class="" role="button" data-toggle="popover"
                                            data-placement="top" data-trigger="focus" title="Sales Page"
                                            data-content="(HTML, custom PHP, WordPress, Clickfunnels, other: which?)">
                                            <span>
                                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                    <g>
                                                        <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                        <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                    </g>
                                                    <g></g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <input class="mb" id="salesPage" type="text" name="product[sales_page]"
                                placeholder="Sales Page URL...">

                            <label class="hide" for="salesPageType">
                                Sales Page Type
                            </label>
                            <select name="product[sales_page_type]" id="salesPageType">
                                <option value="1">
                                    Sales Page Type
                                </option>
                                @foreach ($salesPageTypes as $salesPageType)
                                <option value="{{ $salesPageType->id }}">
                                    {{ $salesPageType->name }}
                                </option>
                                @endforeach
                            </select>

                            <label class="hide" for="thankYouUrl">
                                Thank You Page URL
                            </label>
                            <input type="text" name="product[thank_you_page_url]" id="thankYouUrl" placeholder="Thank You Page URL">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="funnel">
            <div class="container">
                <div class="funnel__wrap">
                    <div class="label-flex">
                        <h2 class="heading-secondary">
                            Upsells / Downsells / OTO
                        </h2>
                        <div class="label-flex__item">


                            <div class="label-flex__item__icon">
                                <a tabindex="0" class="" role="button" data-toggle="popover" data-placement="top"
                                    data-trigger="focus" title="OTO / Upsells / Downsells" data-content="OPTIONAL!

                                *Please provide the name, URL and commission % for all
                                upsell downsell pages etc. that are cloned
                                specially for Digistore24">
                                    <span>
                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            viewBox="0 0 973.1 973.1" xml:space="preserve">
                                            <g>
                                                <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                            </g>
                                            <g></g>
                                        </svg>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="form__flex">

                        <div class="form__grid">

                            <div class="form__item clonedInput">
                                <label class="hide" for="upsellDownsell">
                                    OTO / Upsells / Downsells
                                </label>
                                <select class="browser-default custom-select" name="upsellDownsell" id="upsellDownsell">
                                    <option value="1">
                                        Upsell
                                    </option>

                                    <option value="2">
                                        Downsell
                                    </option>
                                </select>

                                <label class="hide" for="funnelUrl">
                                    funnelURL
                                </label>
                                <input id="funnelUrl" type="text" name="funnelUrl" placeholder="Page URL...">

                                <label class="hide" for="funnelPrice">
                                    funnelURL
                                </label>
                                <input id="funnelPrice" type="number" step="any" name="funnelPrice[]"
                                    placeholder="Product Price">

                                <label class="hide" for="commission">
                                    Affiliate Commission
                                </label>

                                <div class="form__item__affiliate">
                                    <input class="w-20 form__item__affiliate" id="commission" type="number" step="any"
                                        name="funnelCommission[]" placeholder="Affiliate Commission">

                                    <span>
                                        %
                                    </span>
                                </div>
                                <label class="hide" for="upsellThankYou">
                                    Thank you page URL
                                </label>
                                <input id="upsellThankYou" type="text" name="upsellThankYou"
                                    placeholder="Thank you page URL">

                                <button disabled="disabled" value="Delete" class="btnDel" type="button">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5H3H19" stroke="#97A9B6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 5V3C6 2.46957 6.21071 1.96086 6.58579 1.58579C6.96086 1.21071 7.46957 1 8 1H12C12.5304 1 13.0391 1.21071 13.4142 1.58579C13.7893 1.96086 14 2.46957 14 3V5M17 5V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5H17Z"
                                            stroke="#97A9B6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 10V16" stroke="#97A9B6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 10V16" stroke="#97A9B6" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                        </div>

                        <div class="form__item">
                            <button type="button" id="btnAdd" class="btn btn-blue" value="add another name">
                                + Add new variation
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="integrations">
            <div class="container">
                <div class="integrations__wrap">

                    <div class="label-flex">
                        <h2 class="heading-secondary">
                            Integrations
                        </h2>
                        <div class="label-flex__item">

                            <div class="label-flex__item__icon">
                                <a tabindex="0" class="" role="button" data-toggle="popover-link" data-placement="top"
                                    data-trigger="focus">
                                    <span>
                                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            viewBox="0 0 973.1 973.1" xml:space="preserve">
                                            <g>
                                                <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                            </g>
                                            <g></g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="integrations__grid">
                        <div class="integrations__item">
                            <label for="integrationType">
                                Integration Type
                            </label>
                            <select multiple="multiple" name="integrationType[]" id="integrationType">
                                @foreach($integrationCategories as $integrationCategory)
                                    <optgroup label="{{ $integrationCategory->name }}">

                                            @foreach($integrationCategory->integrations as $integration)
                                            <option value="{{ $integration->id }}">
                                                {{ $integration->name }}
                                            </option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        <div class="integrations__item ">
                            <label for="customIntegration">
                                Custom Integration
                            </label>

                            <div class="form__item">
                                <input name="customIntegration" id="customIntegration" type="text"
                                    placeholder="Custom Integration">
                            </div>
                        </div>

                        <div class="integrations__item">
                            <div class="label-flex">
                                <label for="integration-fulfillment">
                                    Fulfillment
                                </label>
                                <div class="label-flex__item">

                                    <div class="label-flex__item__icon">
                                        <a tabindex="0" class="" role="button" data-toggle="popover"
                                            data-placement="top" data-trigger="focus" title="Fulfillment" data-content="In a few sentences please describe
                                        how the customer will receive your product.">
                                            <span>
                                                <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 973.1 973.1" xml:space="preserve">
                                                    <g>
                                                        <path fill="#fff" d="M502.29,788.199h-47c-33.1,0-60,26.9-60,60v64.9c0,33.1,26.9,60,60,60h47c33.101,0,60-26.9,60-60v-64.9
		C562.29,815,535.391,788.199,502.29,788.199z" />
                                                        <path fill="#fff" d="M170.89,285.8l86.7,10.8c27.5,3.4,53.6-12.4,63.5-38.3c12.5-32.7,29.9-58.5,52.2-77.3c31.601-26.6,70.9-40,117.9-40
		c48.7,0,87.5,12.8,116.3,38.3c28.8,25.6,43.1,56.2,43.1,92.1c0,25.8-8.1,49.4-24.3,70.8c-10.5,13.6-42.8,42.2-96.7,85.9
		c-54,43.7-89.899,83.099-107.899,118.099c-18.4,35.801-24.8,75.5-26.4,115.301c-1.399,34.1,25.8,62.5,60,62.5h49
		c31.2,0,57-23.9,59.8-54.9c2-22.299,5.7-39.199,11.301-50.699c9.399-19.701,33.699-45.701,72.699-78.1
		C723.59,477.8,772.79,428.4,795.891,392c23-36.3,34.6-74.8,34.6-115.5c0-73.5-31.3-138-94-193.4c-62.6-55.4-147-83.1-253-83.1
		c-100.8,0-182.1,27.3-244.1,82c-52.8,46.6-84.9,101.8-96.2,165.5C139.69,266.1,152.39,283.5,170.89,285.8z" />
                                                    </g>
                                                    <g></g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <textarea rows="5" name="fulfillment" id="integration-fulfillment"
                                placeholder="Fulfillment"></textarea>
                        </div>

                        <div class="integrations__item">
                            <label for="integration-credentials">
                                Credentials
                            </label>

                            <textarea rows="5" name="credentials" id="integration-credentials"
                                placeholder="Integration Credentials"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="comments">
            <div class="container">
                <div class="comments__wrap">
                    <h2 class="heading-secondary">
                        Comments
                    </h2>

                    <div class="form__flex">
                        <div class="form__item">
                            <label for="comments">
                                Comments
                            </label>

                            <textarea rows="5" placeholder="Comments" name="comments" id="comments"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="submit-form">
            <div class="container">
                <div class="submit-form__wrap">
                    <div class="form__flex">
                        <div class="form__item">

                        </div>

                        <div class="form__item">
                            <button class="btn btn-gray" type="submit" value="Submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

    @livewireScripts
        <script src="/js/jquery/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="/js/jquery/jquery.sumoselect.min.js"></script>
        <script src="https://momentjs.com/downloads/moment.js"></script>
        <script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
        <script src="/js/script.js"></script>
</body>

</html>
