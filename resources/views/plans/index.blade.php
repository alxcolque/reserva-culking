@extends('layouts.app')

@section('title')
    Culking | Inicio
@stop

@section('menu')
    @include('layouts.menu')
@endsection

@section('content')
    <div class="container mt-3">
        <a href="{{ route('home') }}">Atrás</a>
        <div class="row">
            <div class="col-md-12">
                @include('layouts.alerts')
                <div class="card">
                    <div class="card-header">
                        <h4>Planes</h4>
                        <a class="btn btn-primary btn-sm btn-submit" href="{{route('plans.create')}}">Registrar Nuevo</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Plan</th>
                                    <th>Precio</th>
                                    <th>Descuento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td>{{ $plan->title }}</td>
                                        <td>{{ $plan->price }}</td>
                                        <td>{{ $plan->discount }}</td>
                                        <td>
                                            <a href="{{ route('plans.show', $plan->id) }}" class="btn btn-primary btn-sm btn-submit"><i class='bx bx-search-alt-2'></i> Ver</a>
                                            <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-secondary btn-sm btn-submit"><i class='bx bxs-pencil'></i></a>
                                            <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" style="display: inline-block;" onclick="return confirm('¿Seguro que quiere eliminar esta noticia?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-submit"><i class='bx bxs-trash' ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
