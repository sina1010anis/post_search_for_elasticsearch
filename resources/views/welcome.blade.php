<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Product</title>

        <style>
            .box{
                width: 650px;
                max-width: 650px;
            }
        </style>

        @vite('resources/css/app.css')

    </head>
    <body>

        <div id="app">
            <div class="box">
                <form-search> </form-search>
            </div>

        </div>

    </body>

    @vite('resources/js/app.js')

</html>
