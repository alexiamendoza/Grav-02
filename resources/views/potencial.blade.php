<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencial gravitaorio </title>
</head>

<body>
<body style="background-color: lemonchiffon;"></body>
<center><h1 style="border:4px solid SlateBlue;">

<center> <h1 style="color: teal;"><em>Potencial gravitaorio</em></h1></center>
<hr width=100%   size=10 color="#6A5ACD">
<div>
    <img src="https://lh3.googleusercontent.com/BpYmioUgN_lMZYSGVnhk95shhv2XKtMwRiHjcjI6vJI3DCTvSLkOpdSfAV3PF_s3zUv4jA=s152" align="top" width="230" height="150">    
</div>
<form action="{{route('calculapot')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
        </div>
        <div class="mb-3">
            <label for="gravedad" class="form-label"><h3>Gravedad (Decimal)</h3></label>
            <input type="text" class="form-control" name="gravedad" id="gravedad" >
        </div>
        <br>
        <div class="mb-3">
            <label for="masa" class="form-label"><h3>Masa (Kg)</h3></label>
            <input type="text" class="form-control" name="masa" id="masa" >
        </div>

        <br>
            <div class="mb-3">   
            <label for="radio" class="form-label"><h3>Radio(mts)</h3></label>
            <input type="text" class="form-control" name="radio" id="radio" >
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </from>
    
      
<a href="portada"><h5>Pagina principal</h5></a>
</from>
</div>
</body>
    </html>