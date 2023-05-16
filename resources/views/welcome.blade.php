<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{!! url('css/bootstrap/bootstrap.min.css') !!}"> 
@vite(['resources/js/app.js'])
<h1 class="alert alert-success">My First Project</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-outline-primary" href="{{route('region.index')}}">Creation de Motivation</a>
    <a class="btn btn-outline-primary" href="{{route('region.show')}}">Liste des Motivations</a>
</body>
</html>