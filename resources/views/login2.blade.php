<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body align="center">
    @if(session('pesan'))
        {!!session('pesan')!!}
    @endif
    <form action="{{('actionlogin')}}" method="post">
        @csrf
            <label ><i class="fa fa-user">Username</i></label>
            <input type="text" name="username" class="form-control" placeholder="Username" required><br><br>
            <label ><i class="fa fa-key"> </i>Password</label>
            <input type="password"name="password"class="form-control" placeholder="Password" required><br><br>
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i>log in</button><br><br>

    </form>
    <p>Belum punya akun <a href="{{url('register')}}">Register disini</a></p>

</body>
</html>