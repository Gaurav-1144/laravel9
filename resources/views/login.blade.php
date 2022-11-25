<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="loginpost" method="post">
        @csrf
        <input type="text" name="name" id="name">
        <input type="password" name="pwd" id="pwd">
        <button type="submit">Save Record</button>
    </form>
</body>
</html>