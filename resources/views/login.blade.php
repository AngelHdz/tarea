<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
<div >
    <h3>PAGINA PRINCIPAL</h3>
</div><br><br>
<form action="{{route('isesion')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="correo" class="form-label">Correo:</label>
        <input type="text" class="form-control" name="correo" id="correo">
    </div>
    <div class="mb-3">
        <label for="contrase" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="contrase" id="contrase">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
<footer>
   <h4>Por:Luis Angel Hernandez Jimenez</h4>
</footer>
</html>