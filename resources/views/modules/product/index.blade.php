@extends('layouts.app')

@section('title')
    PRODUCT-INDEX | GROCERIFIC
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2">
                               <p>
                                   {{__('PRODUCT LIST')}}
                               </p>
                            </div>

                            <div class="col-2">
                                <button type="button" class="btn btn-sm btn-outline-success" onclick="window.location.href='{{route('product.create')}}'">
                                    ADD
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table table-responsive-lg small ">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-light thead-dark">
                                    <tr>
                                        <th width="2%">#</th>
                                        <th>DESCRIPTION</th>
                                        <th>SIZE</th>
                                        <th>PRICE</th>
                                        <th>CREATED AT</th>
                                        <th>UPDATED AT</th>
                                        <th class="text-center align-middle">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ ($products->currentpage()-1) * $products->perpage() + $key + 1 }}</td>
                                            <td class="p-0 text-left align-middle pl-2">{{$product->description}}</td>
                                            <td class="p-0 text-left align-middle pl-2">{{$product->size}}</td>
                                            <td class="p-0 text-left align-middle pl-2">{{$product->price}}</td>
                                            <td class="p-0 text-left align-middle pl-2">{{$product->created_at}}</td>
                                            <td class="p-0 text-left align-middle pl-2">{{$product->updated_at}}</td>
                                            <td class="p-0 text-center align-middle">
                                                <form action="{{route('product.destroy',['product'=>$product->id])}}" enctype="multipart/form-data" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location.href='{{route('product.show',['product'=>$product])}}'">view</button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    {{$products->links()}}
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
