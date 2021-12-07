<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuerza 2 masas </title>
</head>

<body>
<body style="background-color: lemonchiffon;"></body>
<center><h1 style="border:4px solid SlateBlue;">

<center> <h1 style="color: teal;" > <em>Fuerza sobre una masa1 en precensia de otra masa2</em></h1></center>
<hr width=100%   size=10 color="#6A5ACD">

<div>
        <img src="https://lh3.googleusercontent.com/UsS54ImvdRm3VZBVpKdras7EdKzwMqWwz140gwWT9LIUlQ-DHcR3aSFwAL4c5KnBtwpqwAU=s170"
         align="top" width="240" height="140">  
       
        </div>
<form action="{{route('calculaley')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
        </div>
        <div class="mb-3">
            <label for="gravedad" class="form-label"><h3>Gravedad (Decimal)</h3></label>
            <input type="text" class="form-control" name="gravedad" id="gravedad" >
        </div>
        <br>
        <div class="mb-3">
            <label for="masa1" class="form-label"><h3>Masa1 (Kg)</h3></label>
            <input type="text" class="form-control" name="masa1" id="masa1" >
        </div>

        <br>

        <div class="mb-3">
            <label for="masa2" class="form-label"><h3>Masa2 (Kg)</h3></label>
            <input type="text" class="form-control" name="masa2" id="masa2" >
        </div>

        <br>
            <div class="mb-3">   
            <label for="radio" class="form-label"><h3>Radio(mts)</h3></label>
            <input type="text" class="form-control" name="radio" id="radio" >
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
<a href="portada"><h5>Regresar a la portada</h5>
    </form>
</div>
</body>

    </html>