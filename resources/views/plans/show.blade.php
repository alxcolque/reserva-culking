@extends('layouts.app')

@section('title')
    Culking
@stop

@section('menu')
    @include('layouts.menu')
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <a href="{{route('plans.index')}}">Atrás</a>
                    <div class="card-header">
                        <h4>Información del plan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Plan:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $plan->title }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug:</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $plan->slug }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $plan->price }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="discount">Descuento:</label>
                            <input type="text" class="form-control" id="discount" name="discount" value="{{ $plan->discount }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="discount_time">Descuento:</label>
                            <input type="text" class="form-control" id="discount_time" name="discount_time" value="{{ $plan->discount_time }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="discount_reason">Descuento:</label>
                            <input type="text" class="form-control" id="discount_reason" name="discount_reason" value="{{ $plan->discount_reason }}" readonly>
                        </div>
                        <div class="container">
                            {!! $plan->description !!}
                        </div>
                        <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-primary btn-submit">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')

@stop

@section('js')

@stop
