<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="../css/app.css">

    <title>
        DESKIFY
    </title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="/">
                DESKIFY
            </a>

            <div class="d-flex align-items-center">
                <a href="/login" class="btn btn-link px-3 me-2">
                    Sign in
                </a>
            </div>
        </div>
    </nav>


    <div class="container-xxl bg-dark text-light">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('extras/logo.png') }}" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold">Deskify</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Our mission is to provide the most advanced and seamless office space management system available. Helping busines's manage and plan their hybrid working approach.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a type="button" href="/login" class="btn btn-primary btn-lg px-4 gap-3">Sign In</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>