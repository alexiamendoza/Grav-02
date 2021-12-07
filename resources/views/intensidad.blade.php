<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intensidad del campo gravitatorio</title>
</head>

<body>
<body style="background-color: lemonchiffon;"></body>
<center><h1 style="border:4px solid SlateBlue;">

<center> <h1 style="color: teal;"><em>Intensidad del campo gravitatorio</em></h1></center>
<hr width=100%   size=10 color="#6A5ACD">
<div>
    <img src="https://lh3.googleusercontent.com/6WQrdXJPCDDV6iUmVc0D6A8CAE938CbPuSOStYo-nItv-Pr0gfiDO7ufWfCDMe6Ph8uLc0I=s157" align="top" width="200" height="130">        
    </div>
<form action="{{route('calculaint')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >

        <label for="gravedad" class="form-label"><h3>Gravedad</h3></label>
            <input type="text" class="form-control" name="gravedad" id="gravedad" >
            </br>
        </div>

         

        <div class="mb-3">
            <label for="masa" class="form-label"><h3>Masa (Kg)</h3></label>
            <input type="text" class="form-control" name="masa" id="masa">
        </div>

      

        <div class="mb-3">
            <label for="radio" class="form-label"><h3>Radio (Mts)</h3></label>
            <input type="text" class="form-control" name="radio" id="radio">
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    <a href="portada"><h5>Pagina principal</h5></a>
    
    </form>
    </html>