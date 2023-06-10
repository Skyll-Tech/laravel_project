<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="frontend/asset/css/bootstrap.min.css" rel="stylesheet">
 <title>home</title>
</head>
<body>
    <div class="container">

    <div class="container mb-5 mt-3 text-center">
        <h2>Laravel</h2>
    </div>
    <ul>
        <li><a href="{{URL::to('/home')}}">Home</a></li>
        <li><a href="{{URL::to('/apropos')}}">Apropos</a></li>
        <li><a href="{{URL::to('/services')}}">Services</a></li>
    </ul>

{{--Debut du contenu--}}
<h1>detail du produit</h1>

{{--fin du contenu--}}


</div>
<script src="frontend/asset/js/bootstrap.bundel.min.js"></script>

</body>
</html>

