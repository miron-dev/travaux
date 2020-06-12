@extends('layouts.basic')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h2 class="font-light">Mon Profile</h2>
            <div>
                <div class="form-group">    
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled/>
                </div>

                <div class="form-group">
                    <label for="type_id">Fonction</label>
                    <input type="text" class="form-control" name="type_id" value="{{ App\Type::find($user->type_id)->name }}" disabled/>
                </div> 
                
                <a class="btn btn-success" href="{{url('users/'.Auth::id().'/edit')}}">
                    Modifier
                </a>
            </div>
        </div>
    </div>
</div>
@endsection