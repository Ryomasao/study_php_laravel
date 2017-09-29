<!-- create.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create A Product</h2><br  />
      @if ($errors -> any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)          
            <li>{{ $error}}</li>
          @endforeach
        </ul>
      </div>
      <br/>
      @endif

      @if( \Session::has('success'))
      <div class="alert alert-sucess">
        <p>{{ \Session::get('success')}}</p>
      </div>
      <br/>
      @endif
      <form method="post" method="post" action="{{url('products')}}">
        <!--何が表示されるか念のためね-->
        <p> {{url('products')}} </p>
        <!--CSRF対策みたい、詳細は今度-->
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>