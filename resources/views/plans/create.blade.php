@extends('layouts.app')

@section('title')
    Culking | Nuevo
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
                        <h4>Registrar</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('plans.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @include('plans.fields')
                            <button type="submit" class="btn btn-primary btn-submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
@stop

@section('js')
<script src="https://cdn.tiny.cloud/1/cqu9z23sxsssxrvq8aabyju86nlrsh9j57v2u70r0r8gf40q/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
<script type="text/javascript">
    function previewImage(event, querySelector) {

        //Recuperamos el input que desencadeno la acción
        const input = event.target;

        //Recuperamos la etiqueta img donde cargaremos la imagen
        $imgPreview = document.querySelector(querySelector);

        // Verificamos si existe una imagen seleccionada
        if (!input.files.length) return

        //Recuperamos el archivo subido
        file = input.files[0];

        //Creamos la url
        objectURL = URL.createObjectURL(file);

        //Modificamos el atributo src de la etiqueta img
        $imgPreview.src = objectURL;

    }
</script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.editor2',
        width: 1000,
        height: 500,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
            'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
            'table', 'emoticons', 'template', 'codesample'
        ],
        toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
            'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
            'forecolor backcolor emoticons',
        menu: {
            favs: {
                title: 'menu',
                items: 'code visualaid | searchreplace | emoticons'
            }
        },
        menubar: 'favs file edit view insert format tools table',
        content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
    });
</script>
@stop
