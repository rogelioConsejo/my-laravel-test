<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <style>
        body{
            font-family: sans-serif;
            font-size: 24px;
            margin: 0;
        }
        header{
            background-color: green;
            color: white;
            padding: 0;
            margin: 0;
            height: 7em;
            line-height: 7em;
        }
        h1{
            margin: 0;
            text-align: center;
        }
        .loginForm{
            display: flex;
            flex-direction: column;
            max-width: 720px;
            margin: 3em auto;
        }
        input{
            margin-bottom: 2em;
            border-radius: 7px;
            border: none;
            background-color: #ffe;
            padding: 1em;
        }
        button{
            border-radius: 7px;
            border: none;
            background-color: white;
            color: green;
            box-shadow: 0 5px 5px lightgrey;
            padding: 1em;
            font-weight: bolder;
            font-size: 24px;
        }
    </style>
</head>
<body>
@yield("content")
</body>
</html>
