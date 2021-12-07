<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energia cinetica </title>
</head>

<body>
<body style="background-color: lemonchiffon;"></body>
<center><h1 style="border:4px solid SlateBlue;">

<center> <h1 style="color: teal;"> <em>Energia cinetica</em></h1></center>
<hr width=100%   size=10 color="#6A5ACD">
<div>
        <img src="https://lh3.googleusercontent.com/V2DnKb7lXCIxWm60Ny2mhP_2f8YVgqNJaA7-nwP_4PzKdYED1_6y50AsUO11crwVmdr62Q=s170" align="top" width="200" height="130">  
       
        </div>
        <br>


<form action="{{route('calculaci')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
        <div class="mb-3">
            <label for="masa" class="form-label"><h3>Masa (Kg)</h3></label>
            <input type="text" class="form-control" name="masa" id="masa" >
        </div>

        <div class="mb-3">
            <label for="potencial" class="form-label"><h3> Velocidad</h3></label>
            <input type="text" class="form-control" name="potencial" id="potencial" >
        </div>

        <br>
        <div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
<br>
<a href="portada"><h5>Pagina principal</h5></a>
    </form>
</div>
</body>

    </html>