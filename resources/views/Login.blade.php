
<!DOCTYPE html>
@csrf
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
        <title>Creacion de Mails</title>
        
    </head>
    <body>
        
        <main class ="container">
        <?php echo date("d/m/Y");?>
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        @csrf 
            
           
        <h4>Numero de Legajo Incompleto:</h4><input oninput="javascript: if (this.value.length > this.maxLength )
            this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "5"placeholder="12345" name="lincompleto" value="{{$lincompleto}}"> 
        <h4>Numero Verificador:</h4><input type ="number"placeholder="X" name="cv">      
        <h4>Numero de Legajo Completo:</h4> <input type ="number"placeholder="12345X" name="lcompleto" >        
        <h4>Nombre:</h4> <input type ="text"placeholder="Hector Domingo">
        <h4>Apellido:</h4> <input type ="text"placeholder="Perez">
        <h4>Iniciales:</h4><input type ="text"placeholder="HDP">
        <h4>Mail:</h4> <input type ="text"placeholder="hectorperez">@uca.edu.ar
        <h4>Cuil:</h4> <input oninput="javascript: if (this.value.length > this.maxLength) 
        this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "11"placeholder="20123456789">
        <h4>D.N.I:</h4> <input oninput="javascript: if (this.value.length > this.maxLength) 
        this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "8" placeholder="12345678">
        <h4>Naturaleza:</h4>
        <select name="Naturaleza" id="Naturaleza" >
                    <option value="Docente">Docente</option>
                    <option value="Adscripto">Adscripto</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Directivo">Directivo</option>
                    <option value="Alumno">Alumno</option>
            </select>
        <h4>Sede:</h4> 
            <select name="Sedes" id="Sedes" >
                    <option value="Mader">Puerto Madero</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Mendoza">Mendoza</option>
                    <option value="Rosario">Rosario</option>
            </select>
            <br>
            
            <input type="submit" value="Guardar Mail">
        </form>
        
        </main>
    </body>
</html>