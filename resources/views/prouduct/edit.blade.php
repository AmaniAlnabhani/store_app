!
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <form action="/proudects/update/{{ $product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
     <div class="container">

        <h1>{{__('Edit Product')}}</h1>

        <div class="mb-3">
            <label for="name" class="form-label">{{__('Name')}}</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{ $product->name }}">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">{{__('Price')}}</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
          </div>

          <div class="mb-3">
              <label for="formFile" class="form-label">{{__('Product Image')}}</label>
              <input class="form-control" type="file" id="formFile" name="image">
              <br>
              <img src="{{ asset( $product->image_path) }}" style="max-width: 100px" alt="">
          </div>

          <div class="mb-3">
              <label for="cateogry_id" class="form-label">{{__('Cateogry Id')}}</label>
              <input type="text" class="form-control" id="cateogry_id" name="cateogry_id" value="{{ $product->cateogry_id }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

     </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
