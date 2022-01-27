@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD APP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product"> <i class="fas fa-plus-circle"><center>Create new product</i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th> 
            <th>Actions</th>
            
        </tr>
        @foreach ($data as $key => $value)
            <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->price }}</td>
            
            <td>

                    <form action="{{ route('products.destroy',$value->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$value->id) }}" style="color: white;font-size:12px;border : 1px rgb(0, 191, 243);
            background-color:rgb(0, 191, 243) ;">Show</a>&nbsp;&nbsp;  
                    <a class="btn btn-primary" href="{{ route('products.edit',$value->id) }}" style="color: white;font-size:12px;border : 1px solid blue;
            background-color: blue;">Edit</a>&nbsp;&nbsp;
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger" style="color: white;font-size:12px;border : 1px solid red;
            background-color: red;">Delete</button>&nbsp;&nbsp;

            
                </form>
</td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection



