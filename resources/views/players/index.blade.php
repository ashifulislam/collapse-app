@extends('players.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('players.create') }}"> Create New Product</a>
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
            <th>No</th>
            <th>Category Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($players as $player)
        <tr>
            <td>{{$player->id}}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->average }}</td>
            <td>
                <form action="{{ route('players.destroy',$player->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('players.show',$player->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('players.edit',$player->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn btn-danger">collapse</button>

                </form>
            
                    <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                    </div>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection