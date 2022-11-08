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
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="{{url('/addproduct')}}" method = "post" class="tm-edit-product-form">
                  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name = "desc"
                    ></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="category"
                    >
                    @foreach($categories as $category)
                      <option value="{{$category->id}}" {{key($categories) == 0? 'selected' :''}}> {{$category->name}} </option>
                    @endforeach
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="quantity"
                            >Quantity
                          </label>
                          <input
                            id="quantity"
                            name="quantity"
                            type="number"
                            max="10000"
                            min="0"
                            class="form-control validate"
                            {{-- data-large-mode="true" --}}
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="price"
                            >price
                          </label>
                          <input
                            id="price"
                            name="price"
                            type="number"
                            min="0"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" name="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
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
