
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Insert your data here
        </div>

        <div class="links">
            <a href="{{ route('my_about_route') }}">About</a>
            <a href="{{ route('my_contact_route') }}">Contact</a>
            <a href="https://github.com/ozaswei">GitHub</a>
        </div>
    </div>
    <div class="container">
        <form class="form-group" method="post" action="api//blog/insert">
            <input type="text" class="form-control" placeholder="Type your title here">
            <input type="text" class="form-control" placeholder="Type your summary here">
            <textarea class="form-control">Type your details here</textarea>
            <input type="submit" name="submit" value='insert' class="btn btn-primary">
        </form>
    </div>

</div>
</body>
</html>

