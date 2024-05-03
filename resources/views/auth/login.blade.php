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
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="border: none; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header" style="background-color: #007bff; color: #fff; text-align: center; border-radius: 10px 10px 0 0;">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login-user') }}" method="POST">
                            @if (Session::has('success'))
                                <div class="alert alert-success" style="border-radius: 25px;">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger" style="border-radius: 25px;">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                    value="{{ old('email') }}" style="border-radius: 25px;">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    value="{{ old('password') }}" style="border-radius: 25px;">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <button class="btn btn-primary btn-block" type="submit" style="border-radius: 25px;">Login</button>
                            </div>
                            <p style="text-align: center;">Don't have an account? <a href="registration">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
