<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $name }}</title>
</head>

<body>
    <div class="maincontainer">
        <div class="img">
            <img src="{{ asset('img/ifDFxVeptvY.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="item">
                <h4>{{ $name }}</h4>
                {{ $description }}
            </div>
            <div class="item">
                <h4>{{ $nameSpell }}</h4>
                {{ $descriptionSpell }}
            </div>
            <div class="item">
                <h4>{{ $nameGame }}</h4>
                {{ $descriptionGame }}
            </div>
            <div class="item">
                <h4>{{ $situation }}</h4>
                {{ $descriptionSituation }}
            </div>
        </div>
    </div>
</body>


</html>
