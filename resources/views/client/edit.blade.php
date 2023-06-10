



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="frontend/asset/css/bootstrap.min.css" rel="stylesheet">
 <title>creer</title>
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

<h1>creer produit</h1>
<form action="{{url('/modifierproduit')}}" method="POST" class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product_name" placeholder="Product Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="product_price" placeholder="Product Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea name="product_description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="modifier produit" class="btn btn-primary">
  </form>
{{--fin du contenu--}}


</div>
<script src="frontend/asset/js/bootstrap.bundel.min.js"></script>

</body>
</html>


