<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">

        {{-- @include('components.navbar') --}}
        <x-navbar :links="$links" />
    
        {{ $slot }}
    
        {{-- @include('components.footer') --}}
        <x-footer :siteName="$siteName" />
    
    </div>
</body>
</html>