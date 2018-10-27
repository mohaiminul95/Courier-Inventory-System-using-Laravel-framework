@extends('layouts.app')


@section('content')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>welcome to dashboard</h1>
        </div>
    </div>
</div>

@endsection
