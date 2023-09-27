@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles de la Categoría</h2>

        <div class="card">
            <div class="card-body">
                <h3>{{ $category->title }}</h3>
                <p class="card-text"><strong>Icono:</strong></p>
                @if ($category->icon)
                    <img src="{{ $category->icon }}" alt="" height="150">
                @endif

                <p class="card-text" style="color:{{$category->color}}"><strong>Color:</strong> {{ $category->color }}</p>
                <p class="card-text"><strong>Slug:</strong> {{ $category->slug }}</p>

                <a href="{{ route('categories.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection
