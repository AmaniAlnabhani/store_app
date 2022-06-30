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

     <h1>{{__('Product List')}}</h1>

     <div class="contaner">
        <div class="row">
            @forelse ($products as $product)

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ $product->name}}</div>
                    <div class="card-body">

                        <img src="{{ asset($product->image_path)}} " style="max-width: 100%" alt="">

                    </div>
                    <div class="card-footer">
                        {{ $product->price}}
                        <a href="/proudects/edit/{{ $product->id }}">
                            <button class="btn btn-info">{{__('Edit')}}</button>
                        </a>

                        <a href="/proudects/delete/{{ $product->id }}">
                        <button class="btn btn-danger">{{__('Delete')}}</button>
                        </a>
                    </div>
                </div>
            </div>

            @empty

            {{__('No Data')}}

            @endforelse
        </div>
     </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
