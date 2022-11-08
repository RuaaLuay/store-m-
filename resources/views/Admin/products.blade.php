<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    @include('links.Admin')
  </head>

  <body id="reportsPage">
    @include('Admin.Header')
    <div class="container mt-5"><div class="row tm-content-row">
        <div class="col-sm-12 col-md-12
      col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">UNIT SOLD</th>
                    <th scope="col">IN STOCK</th>
                    {{-- <th scope="col">EXPIRE DATE</th> --}}
                    {{-- <th scope="col">CATEGORY ID</th> --}}
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
        <form action={{url('deleteSelectedProducts')}} method="post" class="tm-edit-product-form" id="items-form">
                  @foreach ($products as $product)
                      <tr>
                        <th scope="row">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="checkbox" id ="selectedItems" name='selectedItems[]' value="{{$product->proId}}"/></th>
                        <td class="tm-product-name">{{$product->proName}}---{{ $product->catName }}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        {{-- <td>
                          <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                          </a>
                        </td> --}}
                        <td>
                            <form action="{{ URL('product/delete/'.$product->proId) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                          {{-- <a href="{{ URL('product/delete/'.$product->proId) }}"  class="tm-product-delete-link"> <i class="far fa-trash-alt tm-product-delete-icon"></i></a> --}}
                        </td>
                        <td>
                          <a href="{{ URL('product/edit/'.$product->proId)}}"  class="tm-product-delete-link">
                            <i class="far fa-duotone fa-pen-to-square "></i>
                          </a>
                        </td>
                      </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
            <!-- table container -->
            {{-- <a
              href={{url('add')}}
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a> --}}
            <button  type="submit"
              class="btn btn-primary btn-block text-uppercase mb-3">Delete selected products
          </button>
            {{-- <button type="submit" formaction="{{ route('addToSlider')}}" form='items-form'
              class ="btn btn-primary btn-block text-uppercase mb-3">Add products to Slider
        </button> --}}


            {{-- <a
              href={{route('view-slider')}}
              class="btn btn-primary btn-block text-uppercase mb-3">View Slider Items
            </a> --}}

          </div>
        </form>
      </div>

 <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>


                {{-- <form  action="{{route('delete-Categories')}}" method = "post" id = "categories" class="tm-edit-product-form">
                        @csrf
                  @foreach ($categories as $category)
                      <tr>
                        <th scope="row">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /><input type="checkbox" id ="selectedCategories" name='selectedCategories[]' value="{{$category->id}}"/></th>
                        <td class="tm-product-name">{{$category->name}}</td>
                        <td>
                          <a href="{{ route('delete-category',['categoryId' => $category->id ]) }}"  class="tm-product-delete-link"> <i class="far fa-trash-alt tm-product-delete-icon"></i></a>
                        </td>
                      </tr>
                  @endforeach
                </form>



                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href={{url('addCategory')}}
              class="btn btn-primary btn-block text-uppercase mb-3">Add new Category
            </a>
            <button  type="submit" form="categories"
              class="btn btn-primary btn-block text-uppercase mb-3">Delete selected categories
            </button>
          </div>
        </div>
      </div>
    </div> --}}

    @include('Admin.Footer')

    <script src="{{ asset("adminAssets/js/jquery-3.3.1.min.js") }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset("adminAssets/js/bootstrap.min.js") }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "{{ URL('room/edit/'.$product->proId) }}";
        });
      });
    </script>
  </body>
</html>
