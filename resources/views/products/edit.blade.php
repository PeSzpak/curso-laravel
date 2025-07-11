<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Editar Produto!</title>
  </head>
  <body>
   
    <div class="container">
      <h1>Edição de produtos</h1>
      @if ($errors->any())
    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif
      {{-- <form action="{{ route('products.update', $product['id']) }}" method="PUT"> --}}
        <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Nome do Produto</label>
        <input type="text" class="form-control" name="product_name" value="{{ $product['product_name'] }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Codigo do Produto</label>
    <input type="text" class="form-control" name="sku" value="{{ $product['sku'] }}">
      </div>
      <div class="form-group">
        <label for="">Descrição</label>
        <textarea name="discription" class="form-control" id="" cols="30" rows="10">{{ $product['description'] }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>