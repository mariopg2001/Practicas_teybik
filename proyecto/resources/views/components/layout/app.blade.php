<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hola-{{$title ?? ''}}</title>
    {{-- <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script> --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>
    
</head>
<body>
   
    <x-layout.navegation />
    @if (session('status'))
    <div >
    {{ session('status') }}
    </div>
    @endif
    {{$slot}}

</body>
</html>