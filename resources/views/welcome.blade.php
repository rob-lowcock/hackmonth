<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>HackMonth 2019</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>
        <div id="app">
            <div class="content billboard">
                <div class="container">
                    <h1>hack<span>month <strong>2019</strong></span></h1>
                    <h2>Challenge yourself to code something in 30 days</h2>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 how-it-works">
                            <h1>How it works</h1>
                            <ul>
                                <li><img src="/img/space-rocket-flying.svg" alt="" width="24px"> Build a launch a project in just one month</li>
                                <li><img src="/img/developer-community-github-1.svg" alt="" width="24px"> Link your GitHub account to track progress</li>
                                <li><img src="/img/multiple-chat.svg" alt="" width="24px"> Get support and encouragement from other people attempting the same thing</li>
                                <li><img src="/img/business-climb-top.svg" alt="" width="24px"> When you tag your v1 release, you're done!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-call-to-action">
                                <h4>Get Started</h4>
                                <github-sign-in-button></github-sign-in-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
