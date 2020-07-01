<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - page</title>
    <style>
        .header{
            color: green;
        }
        .content{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="header">
        @section('header')
            <h1>Header is common</h1>
        @show
    </div>
    <div class="content">
        @section('content')
            
        @show
    </div>
</body>
</html>