<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energia potencial </title>
</head>

<body>
<center> <h1 style="color: teal;" > <em>Energia potencial</em></h1></center>
<br>
<div>
        <img src="https://lh3.googleusercontent.com/lsIkClpBEloVN6O_4B8Q6-hKNHTN-XNuPkSy2yfmeJHn-rYn8MeZrB3XUSGKUgM2j5ZI=s170" align="top" width="230" height="140">  
       
        </div>
        <br>


<form action="{{route('calculaep')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
        </div>
        <div class="mb-3">
            <label for="potencial" class="form-label"><h3>Potencial gravitatorio</h3></label>
            <input type="text" class="form-control" name="potencial" id="potencial" >
        </div>
        <br>
        <div class="mb-3">
            <label for="masa" class="form-label"><h3>Masa (Kg)</h3></label>
            <input type="text" class="form-control" name="masa" id="masa" >
        </div>

        <br>
        <div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
<br>
<a href="portada"><h3>Regresar a la pagina principal</h3></a>
    </form>
</div>
</body>

    </html>