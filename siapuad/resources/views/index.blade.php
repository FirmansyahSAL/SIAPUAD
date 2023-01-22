@extends('layouts.master')
@section('title','SIAPUAD')
@section('content')
    <div class="title m-b-md">
        Project Pertama Laravel
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laravel.com/docs">Laracast</a>
        <a href="https://laravel.com/docs">News</a>
        <a href="https://laravel.com/docs">Blog</a>
        <a href="https://laravel.com/docs">Nova</a>
        <a href="https://laravel.com/docs">Forge</a>
        <a href="https://laravel.com/docs">Yapor</a>
        <a href="https://laravel.com/docs">Github</a>
    </div>
@endsection

@push('page-scripts')
    <script>alert(123)</script>
@endpush