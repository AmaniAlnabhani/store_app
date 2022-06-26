@extends("admin.layouts.admin")
@section('content')
    
    <div class="alert alert-success" role="alert">
        Hello Admin
    </div>
    <div class="container">
        <div class="row pt-4">
    <h2>Products</h2>
    <form class="row g-4" action="/products/store" method="post"
        >
        <div class="col-md-2">
          <label for="name" class="form-label">Proudect Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="col-md-2">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" required>
        </div><br/>
        <div class="col-md-2">
            <label for="quntity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quntity" required>
          </div>
          <br>
          <div class="col-md-2">
            <label for="section" class="form-label">Section</label><br/>
            <select id="section" class="form-select" required>
              <option selected>Choose...</option>
              <option id=1>Phone</option>
              <option id=2>TV</option>
              <option id=3>Computer</option>
            </select>
          </div>
          <div class="col-mb-2">
            <label for="formFileSm" class="form-label" >Proudect Image</label>
            <input class="form-control form-control-sm" id="attachment" type="file" required>
          </div>
         <br/>
         
          <button class="btn btn-success" type="submit" >SAVE</button>
        
    </form>
    </div></div>

    <div class="container">
        

        <div class="row pt-5">
            <h2>Sections</h2>
            <form class="row g-5" action="/products/store" method="post">
                <div class="col-md-3">
                    <label for="price" class="form-label">Section ID</label>
                    <input type="number" class="form-control" id="id" required>
                </div><br/>
                
                <div class="col-md-3">
                <label for="name" class="form-label">Section Name</label>
                <input type="text" class="form-control" id="name" required>
                </div>
                
                
                
                <button class="btn btn-success" type="submit" >SAVE</button>
                
            </form>
        </div>
  </div>

@endsection