@extends('layouts.basic')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenue {{Auth::user()->name}}
                    <div class="links">
                        Bienvenue
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
