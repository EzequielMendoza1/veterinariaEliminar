
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/librerias/bootstrap5/bootstrap.min.css">

    <title>Login Usuario</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <hr>
                <h2 class="text-center">Login de Usuario</h2>
                <form action="./procesos/auth/login.php" method="post">
                    <label for="email">Usuario</label>
                    <input type="email" name="email" id="email" class="form-control">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">

                    <button class="btn btn-primary mt-3"><i class="fa-sharp fa-solid fa-right-to-bracket"></i> ENTRAR</button>
                </form>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>