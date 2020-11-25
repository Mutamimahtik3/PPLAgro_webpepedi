@extends('layouts.master')

@section('content')
<div class="section-body">
    <div class="alert alert-success">Selamat datang, {{ Auth::user()->name }}. Halaman Dashboard Admin</div>
</div>
@endsection
