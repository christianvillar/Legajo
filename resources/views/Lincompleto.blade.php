<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legajo Incompleto</title>
</head>
<body>
    <form action="/Login" method="POST">
    @csrf
    <h4>Ingrese Numero de Legajo Incompleto:</h4><input oninput="javascript: if (this.value.length > this.maxLength )
    this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "5"placeholder="12345" name="lincompleto"></h4>
    <input type="submit" value="Crear Mail">
   
    </form>
</body>
</html>

