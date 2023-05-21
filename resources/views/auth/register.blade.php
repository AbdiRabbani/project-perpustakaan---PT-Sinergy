<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Data AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <div class="panel-content col-md-10" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-md-4 d-flex row ms-0 pe-0">
                <p class="text-white h2 d-flex justify-content-center align-items-center mt-3">
                    Glad to see you!
                </p>
                <p class="text-white text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae rem laboriosam, ipsa nobis est
                    labore dolore
                </p>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="text-center mt-4">
                        <p class="h2">
                            Hello, friend!
                        </p>
                    </div>
                    <form action="{{ route('register') }}" method="post" class="m-4 col-md-8">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="username" aria-label="username" aria-describedby="basic-addon1">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="your email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                placeholder="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                        </div>
                        <div class="row mb-3 pt-5">
                            <div class="col-md-6">
                                <button type="submit" class="btn-login py-2 px-3">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-md-6">
                                <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Login</a>
                                </p>

                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <p>or login with</p>
                        </div>
                        <div class="social d-flex justify-content-center mt-2">
                            <a href=""><i class="fa fa-github m-2 purple"></i></a>
                            <a href=""><i class="fa fa-google m-2 purple"></i></a>
                            <a href=""><i class="fa fa-facebook m-2 purple"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<!-- Data AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();

</script>

</html>
