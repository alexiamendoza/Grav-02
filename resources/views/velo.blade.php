<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidad de escape </title>
</head>

<body>
<body style="background-color: lemonchiffon;"></body>
<center><h1 style="border:4px solid SlateBlue;">

<center> <h1 style="color: teal;"> <em>Velocidad de escape</em></h1></center>
<hr width=100%   size=10 color="#6A5ACD">
<div>
        <img src="https://lh3.googleusercontent.com/oIWk7oitfRE2U255TV_qrQoABUc12Xi6H4tM6jftdTU-rla4AbpSOVj4m_eNrVy6STDUNw=s116" align="top" width="200" height="130">  
       
        </div>
<br>


<form action="{{route('calculav')}}" method="POST">
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