
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-head/>

    <title>NGO</title>

    @yield('styles')

</head>
<body>

    <x-navigation />

    <section class='layout-content'>
    @yield('contents')
    </section>


    <x-footer />

</body>
</html>

@yield('scripts')