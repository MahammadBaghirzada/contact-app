<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact App</title>
</head>
<body>
    {{ date('Y') }}
    <br />
    {{ 3+7 }}
    <br />
    {!! "<h3>Hello</h3>" !!}
    <?= "<h3>Hello</h3>" ?>
    <h2>
        Hello @{{ name }}
    </h2>

    @php
        $message = "Hello world";
    @endphp
    <h2>{{ $message }}</h2>
    {{-- This is a comment --}}
</body>
</html>
