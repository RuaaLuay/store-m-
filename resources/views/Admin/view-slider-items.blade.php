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
                            <h2 class="tm-block-title d-inline-block">Slider Items</h2>
                            <div class="tm-product-table-container">
                                <table class="table table-hover tm-table-small tm-product-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th scope="col">PRODUCT NAME</th>
                                            <th scope="col">PRODUCT DESCRIPTION</th>
                                            <th scope="col">PRODUCT IMAGE</th>
                                            <th scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form id="items-form" action="{{ route('delete-slider-items')}}" method = "post" class="tm-edit-product-form"> 
                                            @csrf
                                            @foreach ($items as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                                        <input type="checkbox" id ="selectedItems" name='selectedItems[]' value="{{$item[0]->id}}"/>
                                                    </th>
                                                    <td class="tm-product-name">{{$item[0]->name}}</td>
                                                    <td>{{$item[0]->description}}</td>
                                                    <td>
                                                        <img src="{{asset('assets/img')}}/{{$item[0]->image}}" alt="" height="40" width="40">
                                                    </td>
                                                    <td>
                                                        <a href="{{route('delete-slider-product',['productId' => $item[0]->id ]) }}"  class="tm-product-delete-link"> <i class="far fa-trash-alt tm-product-delete-icon"></i></a>
                                                            {{-- <a href="#"             class="tm-product-delete-link">
                                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                                        </a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                            
                            <button form='items-form'  
                                href="{{route('delete-slider-items')}}"
                                class ="btn btn-primary btn-block text-uppercase mb-3">Delete Selected Products From Slider
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>