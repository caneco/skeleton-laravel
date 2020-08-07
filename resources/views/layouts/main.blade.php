<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <title>@yield('title', $title ?? '')</title>
    <meta name="description" content="@yield('description', $description ?? '')">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    @stack('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <link href="/favicon.ico" rel="icon">
    <link rel="stylesheet" href="{{ parcel('app.css') }}">
    @stack('style')
    <livewire:styles>
</head>

<body>
@yield('content')
<script src="{{ parcel('app.js') }}"></script>
@stack('script')
<livewire:scripts>
</body>

</html>
