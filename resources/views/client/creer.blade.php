



  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
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
@if (Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
    {{Session::put('message',null)}}
</div>
@endif

<h1>creer produit</h1>
<form action="{{url('/saveproduit')}}" method="POST" class="form-horizontal">
    {{csrf_field()}}
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product_name" placeholder="Product Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="product_price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product image</label>
        <input type="file" name="product_image" placeholder="Product Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea name="product_description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" value="Ajouter produit" class="btn btn-primary">
  </form>
{{--fin du contenu--}}


</div>
<script src="asset/js/bootstrap.bundel.min.js"></script>

</body>
</html>


