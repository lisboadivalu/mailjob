<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center;">Laravel Email job</h2>
    <p>Hello, {!! $email['email'] !!}!!</p>
    <br>
    <p>{!! $email['subject_text'] !!}</p>
</body>
</html>