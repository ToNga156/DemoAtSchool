<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assest/css/signup.css">
</head>
<body>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="text" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input type="text" class="form-control" name="web">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div>
            @include ('block.error')
        </div>
        <button type="submit" class="btn btn-primary" style="left: 200px;">OK</button>
        <div class="display-info">
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>