<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<style>
        @use postcss-preset-env {

    stage: 0;
}

/* config.css */

:root {
    --baseColor: #606468;
}

/* helpers/align.css */

.align {
    display: grid;
    place-items: center;
}

.grid {
    inline-size: 90%;
    margin-inline: auto;
    max-inline-size: 20rem;
}

/* helpers/hidden.css */

.hidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

/* helpers/icon.css */

:root {
    --iconFill: var(--baseColor);
}

.icons {
    display: none;
}

.icon {
    block-size: 1em;
    display: inline-block;
    fill: var(--iconFill);
    inline-size: 1em;
    vertical-align: middle;
}

/* layout/base.css */

:root {
    --htmlFontSize: 100%;

    --bodyBackgroundColor: #2c3338;
    --bodyColor: var(--baseColor);
    --bodyFontFamily: "Open Sans";
    --bodyFontFamilyFallback: sans-serif;
    --bodyFontSize: 0.875rem;
    --bodyFontWeight: 400;
    --bodyLineHeight: 1.5;
}

* {
    box-sizing: inherit;
}

html {
    box-sizing: border-box;
    font-size: var(--htmlFontSize);
}

body {
    background-color: var(--bodyBackgroundColor);
    color: var(--bodyColor);
    font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
    font-size: var(--bodyFontSize);
    font-weight: var(--bodyFontWeight);
    line-height: var(--bodyLineHeight);
    margin: 0;
    min-block-size: 100vh;
}

/* modules/anchor.css */

:root {
    --anchorColor: #eee;
}

a {
    color: var(--anchorColor);
    outline: 0;
    text-decoration: none;
}

a:focus,
a:hover {
    text-decoration: underline;
}

/* modules/form.css */

:root {
    --formGap: 0.875rem;
}

input {
    background-image: none;
    border: 0;
    color: inherit;
    font: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    transition: background-color 0.3s;
}

input[type="submit"] {
    cursor: pointer;
}

.form {
    display: grid;
    gap: var(--formGap);
}

.form input[type="password"],
.form input[type="text"],
.form input[type="submit"] {
    inline-size: 100%;
}

.form__field {
    display: flex;
}

.form__input {
    flex: 1;
}

/* modules/login.css */

:root {
    --loginBorderRadus: 0.25rem;
    --loginColor: #eee;

    --loginInputBackgroundColor: #3b4148;
    --loginInputHoverBackgroundColor: #434a52;

    --loginLabelBackgroundColor: #363b41;

    --loginSubmitBackgroundColor: #ea4c88;
    --loginSubmitColor: #eee;
    --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
    color: var(--loginColor);
}

.login label,
.login input[type="text"],
.login input[type="password"],
.login input[type="submit"] {
    border-radius: var(--loginBorderRadus);
    padding: 1rem;
}

.login label {
    background-color: var(--loginLabelBackgroundColor);
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    padding-inline: 1.25rem;
}

.login input[type="password"],
.login input[type="text"] {
    background-color: var(--loginInputBackgroundColor);
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
}

.login input[type="password"]:focus,
.login input[type="password"]:hover,
.login input[type="text"]:focus,
.login input[type="text"]:hover {
    background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type="submit"] {
    background-color: var(--loginSubmitBackgroundColor);
    color: var(--loginSubmitColor);
    font-weight: 700;
    text-transform: uppercase;
}

.login input[type="submit"]:focus,
.login input[type="submit"]:hover {
    background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

p {
    margin-block: 1.5rem;
}

.text--center {
    text-align: center;
}
    </style>
