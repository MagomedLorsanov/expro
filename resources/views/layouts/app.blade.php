<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Products')}}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        {{-- @include('layouts.navigation') --}}

        <header class="bg-white">
            <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{-- {{ $header }} --}}
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>


</body>
</html>