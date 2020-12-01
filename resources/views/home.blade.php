@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Menu
    </div>
    <div class="card-body">
        <div class="row">
            @if(Auth::user()->role == 'petani')
            @include('layouts.menu-petani')
            @elseif(Auth::user()->role == 'admin' || Auth::user()->role == 'konsultan')
            @include('layouts.menu-admin')
            @endif
        </div>
    </div>
</div>
@endsection