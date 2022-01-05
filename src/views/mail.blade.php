<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Sending</title>
</head>
<body>
    <form method="post" action="{{route('usemail')}}">
        <h1>Email ID:</h1>
        <input type="text" placeholder="Enter Email" name='email' />
        <input type="submit" value="Send">
    </form>
</body>
</html>