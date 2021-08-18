<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #enc{
            background-color: red;

        }
        #cont{
            background-color: gray;
        }
    </style>
</head>
<body>
<div id="enc">
    ESCUELA FULANITA DE TAL .... <hr>
    @yield('encabezado')
</div>
<div id="cont">
    @yield('contenido')
</div>


</body>
</html>