<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 25px;
        }

        .btn-primary {
            border-radius: 25px;
        }

        .alert {
            border-radius: 25px;
        }

        p {
            text-align: center;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Registration tab -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Registration</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register-user') }}" method="POST">
                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf

                            <!-- Entering the full name -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Full Name" name="name"
                                    value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Entering the email -->
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                    value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Entering the password -->
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    value="{{ old('password') }}">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Register confirmation -->
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>

                            <p>Already have an account? <a href="login">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https
