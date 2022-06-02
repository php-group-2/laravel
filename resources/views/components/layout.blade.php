<!DOCTYPE html>
<html class="h-full" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class=" h-full flex flex-col">


        {{-- @include('components.navbar') --}}
        <x-navbar :links="$links" />
        <div class="container">
        {{ $slot }}
        </div>
        {{-- @include('components.footer') --}}
        <x-footer :siteName="$siteName" />


</body>
</html>
