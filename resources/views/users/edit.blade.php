@extends('layouts.basic')
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h2 class="">Modifier mon profile</h2>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="post" action="{{ route('users.store') }}">
             @csrf
             <div class="form-group">    
                 <label for="name">Nom:</label>
                 <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
             </div>

             <div class="form-group">    
                <label for="email">Email:</label>
                <input type="text" class="form-control" email="name" value="{{$user->email}}"/>
            </div>

            <div class="form-group">    
                <label for="type_id">Fonction:</label>
                <select type="text" class="form-control" name="type_id">
                    @foreach (App\Type::all() as $type)
                        @if(Auth::user()->type_id == 1)
                          @if($type->id == 1)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                          @endif
                        @else
                            @if($type->id != 1)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Enregistrer</button>
            <a href="{{url('users/'.Auth::id())}}" class="btn btn-outline-success">Retour</a>
          </form>
     </div>
   </div>
  </div>
</div>
@endsection