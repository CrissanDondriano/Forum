<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offeset-4" style="margin-top: 20px">
                <div class="title">
                <h1>Login</h1>
                </div>
                <hr>
                <form action="{{ route('login-user') }}" method="POST">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email" style="color: #FF5733; font-family: Arial, sans-serif; font-size: 16px;">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email"
                            value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password" style="color: #FF5733; font-family: Arial, sans-serif; font-size: 16px;">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password"
                            value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                    <br>
                    <p>Don't have an account? <a href="registration" class="link_color">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


<style>

.container{
    margin-top: 20px;
    padding: 40px;
    width: 40%;
}

.title{
    text-align: center;
    color: #FF5733;
    font-family: Arial, sans-serif;
    font-weight: bold;
}

.btn {
    background-color: #FF5733;
    border: #FF5733;
}

.btn:hover {
    background-color:#771702;
    color: black;
}

.link_color{
    color: #FF5733;
}



</style>




