<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title"><h4>Login </h4></div>
        <p>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
            <input type="text" name="username" />
        </p>

        <p>
            <input type="text" name="password" />
        </p>

        <p><input type="submit" value="submeta" /></p>
    </div>
</div>
</body>
</html>
