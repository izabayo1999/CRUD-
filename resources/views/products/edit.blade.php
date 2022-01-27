@extends('layouts.app')

@section('content')
<center>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i>Back </a><br><br>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}"  method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong><br>
                    <input type="text"  style="height:70px"      name="name" value="{{ $product->name }}"  class="form-control" placeholder="Name"><br><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong><br>


                    <input type="text"  style="height:70px"      name="description" value="{{ $product->description }}"  class="form-control" placeholder="quantity"><br><br>
                </div>
                    
                   
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong><br>
                    <input type="number" name="price" class="form-control" placeholder=""
                        value="{{ $product->price }}"><br><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button><br><br>
            </div>
        </div>

    </form>
</center>
@endsection
