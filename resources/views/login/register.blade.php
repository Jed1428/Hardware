<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <div>
        <form action="{{route('registercheck')}}" method="post">
            @csrf

            <input type="text" name="username" id="" placeholder="Username"> <br>
            <input type="email" name="email" id="" placeholder="Email"> <br>
            <input type="password" name="password" id="" placeholder="Password"> <br>
            <input type="password" name="repassword" id="" placeholder="Retype Password"> <br>
            <input type="submit" name="signup" id="" value="signup">


        </form>
    </div>
</body>
</html>