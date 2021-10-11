@extends('layouts.app')

@section('title')
    VIEW | GROCERIFIC
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{route('product.update',['product'=>$product])}}" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">{{ __('PRODUCT DETAILS') }}</div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description"
                                       class="form-control
                                        @error('description') is-invalid @enderror"
                                       value="{{$product->description}}"
                                       id="description"
                                       aria-describedby="descriptionHelp"
                                       @if(!$isEditable)
                                       disabled
                                       @endif
                                       placeholder="Product description">
                                <small id="descriptionHelp" class="form-text text-muted">Put product description here.</small>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text"
                                       name="size"
                                       class="form-control
                                       @error('size') is-invalid @enderror"
                                       value="{{$product->size}}"
                                       id="size"
                                       placeholder="Enter product size"
                                       @if(!$isEditable)
                                       disabled
                                        @endif>
                                @error('size')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" min="0" class="form-control @error('price') is-invalid @enderror" id="price" value="{{$product->price}}" placeholder="Enter product price"
                                       @if(!$isEditable)
                                       disabled
                                        @endif>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">

                            @if(!$isEditable)
                                <button type="button" class="btn btn-warning" onclick="window.location.href='{{route('product.edit',['product'=>$product])}}'">Edit</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href ='{{route('product.index')}}'">Go Back</button>
                            @else
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href ='{{route('product.index')}}'">Go Back</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
