@extends('customer.layouts.customer')
@section('content')

    <div class="alert alert-success" role="alert">
        Hello Customer
    </div>

    <div class="container">
        <div class="row">
            @foreach ($users as $user)
              <div class="col-12">

                <ul>
                    @foreach ($user->product as $product)
                         <li>{{$product->all}}</li>
                    @endforeach
                </ul>

            @endforeach
        </div>
    </div>

@endsection
