<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard</title>
    @include('links.Admin')
  </head>

  <body>
    @include('Admin.Header')
    
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="messagePrinter tm-bg-primary-dark" >  </div>
          <br>
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="{{url('/addCategoryPerform')}}" method = "post" class="tm-edit-product-form">
                  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Category Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                             
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Category Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('Admin.Footer') 
      <script src="{{ asset("adminAssets/js/jquery-3.3.1.min.js") }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset("adminAssets/jquery-ui-datepicker/jquery-ui.min.js") }}"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="{{ asset("adminAssets/js/bootstrap.min.j") }}"></script>
    <!-- https://getbootstrap.com/ -->
    
  </body>
</html>
