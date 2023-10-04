<!doctype html>
<html lang="en">
<head>
        <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">

</head>

<body>
<section class="vh-100">
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 text-black">
        <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">STORE</span>
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form action="{{route('login')}}" method="POST" style="width: 23rem;">
            @csrf 
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registro</h3>
            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example18" name="name">Nombre</label>
                <input type="text" id="form2Example18" class="form-control form-control-lg" />
            </div>
            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example18" name="correo">Correo</label>
                <input type="email" id="form2Example18" class="form-control form-control-lg" />
                
            </div>
            <div class="form-outline mb-4">
            <label class="form-label" for="form2Example28" name="contra">Contraseña</label>
                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                
            </div>
            <div class="pt-1 m"> 
                <button class="btn btn-info btn-lg btn-block" type="submit">Registro</button>
            </div>
            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{route('login')}}">Volver</a></p>
            </form>
        </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    </div>
    </div>
</section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>