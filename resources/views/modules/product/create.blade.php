@extends('layouts.app')

@section('title')
    PRODUCT-CREATE | GROCERIFIC
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                    @method('POST')
                    @csrf
                    <div class="card">
                        <div class="card-header">{{ __('New Product') }}</div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" name="description" class="form-control  @error('description') is-invalid @enderror @if(old('description')) is-valid @endif" value="{{old('description')}}" id="description" aria-describedby="descriptionHelp" placeholder="Product description">
                                <small id="descriptionHelp" class="form-text text-muted">Put product description here.</small>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="text" name="size" class="form-control @error('size') is-invalid @enderror @if(old('size')) is-valid @endif"  value="{{old('size')}}" id="size" placeholder="Enter product size">
                                @error('size')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" min="0" class="form-control @error('price') is-invalid @enderror @if(old('price')) is-valid @endif" id="price" value="{{old('price')}}" placeholder="Enter product price">
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href ='{{route('product.index')}}'">GO BACK</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
