<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        
    </head>

    <nav class="navbar bg-danger navbar-expand-lg  " >
        <div class="m-4 container-fluid">
            <div to="/" class="title-f navbar-brand text-white" href="#">EL ESPARTANO</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white nav-f" aria-current="page" href="#">Contacto</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-lg-0 pt-3">
                    <li class="nav-item">
                        <a class="nav-link text-white btn-card-f pe-auto" aria-current="page" data-bs-target="#modalCheckIn" data-bs-toggle="modal">Registrase</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body class="container">
        @yield('content')
        <script>
            document.addEventListener("DOMContentLoaded", function(event){
                let image = document.getElementById('image');
                if(image != null){
                    image.addEventListener("change", function(){
                        let reader = new FileReader();
                        reader.onload = (e) => {
                            let preview = document.getElementById('preview');
                            preview.setAttribute("src", e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    });
                }
            });
        </script>
    </body>
</html>
