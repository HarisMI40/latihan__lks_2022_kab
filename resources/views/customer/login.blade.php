<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('customer.login')}}" method="post">
        @CSRF
        @method("POST")
        <p>Email : <input type="email" name="email" id=""></p>
        <p>Password : <input type="password" name="password" id=""></p>
        <button type="submit">Login</button>
    </form>
</body>
</html>