<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body align="center">
    @if(session('pesan'))
        {!!session('pesan')!!}
    @endif
    
    <form action="{{('actionregister')}}" method="post">
        @csrf
            <label ><i class="fa fa-user">Username</i></label>
            <input type="text" name="username" class="form-control" placeholder="Username" required><br><br>
            <label ><i class="fa fa-key"> </i>Password</label>
            <input type="password"name="password"class="form-control" placeholder="Password" required><br><br>
            <label ><i class="fa fa-level">Level</label>
            <select name="level" required>
                <option >level</option>
                <option value="P">Pengajar</option>
                <option value="S">Santri</option>
            </select><br><br>
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i>Daftar</button><br><br>
            <p>sudah punya akun silahkan <a href="/">login di sini</a></p>
    </form>

</body>
</html>