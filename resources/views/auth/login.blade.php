<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link


        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.min.css"
        rel="stylesheet"
    />

</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <h3 class="mb-5">Sign in</h3>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            <label class="form-label" for="typeEmailX-2">Email</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password"  name="password" id="typePasswordX-2" class="form-control form-control-lg @error('password') is-invalid @enderror" required autocomplete="current-password"/>
                            <label class="form-label " for="typePasswordX-2">Password</label>
                        </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div>

                        <button  class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                        <hr class="my-4">

                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                                ><i class="fab fa-google me-2"></i> Sign in with google</button>
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                                ><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.umd.min.js"
></script>
</html>
