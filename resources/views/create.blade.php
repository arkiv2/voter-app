<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter h-screen font-sans">
<div id="app">
    <header class="w-full">
        <nav class="container w-1/3 mt-3 mx-auto bg-white px-8 pt-2 rounded shadow-md pin-t pin-r pin-l">
            <div class="-mx-b flex justify-center">
                <a class="no-underline hover:text-teal-dark text-grey-dark border-b-2 hover:border-teal-dark border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8"
                    href="#">Home</a>
                <a class="no-underline hover:text-teal-dark text-grey-dark border-b-2 hover:border-teal-dark border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8"
                    href="#">Products</a>
                <a class="no-underline hover:text-teal-dark text-grey-dark border-b-2 hover:border-teal-dark border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8"
                    href="#">Discounts</a>
                <a class="no-underline hover:text-teal-dark text-grey-dark border-b-2 hover:border-teal-dark border-transparent uppercase tracking-wide font-bold text-xs py-3"
                    href="#">Customers</a>
            </div>
        </nav>
    </header>
    <div class="w-full">
        <div container="container py-6 bg-white rounded-lg shadow-md">
            <div class="flex h-screen mt-6 mr-2 ml-2">
                <voters-list></voters-list>
                <div class="container w-2/3 ml-2 mb-4 items-center bg-white rounded shadow-md">
                    <h1 class="pt-2 text-center font-hairline">
                        Vote Candidate
                    </h1>
                    <candidate-item></candidate-item>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>