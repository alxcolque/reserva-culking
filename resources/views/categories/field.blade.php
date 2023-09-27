<div class="row form-group">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="title" class="form-label">Nombre:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $category->title ?? '') }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="color" class="form-control" id="color" name="color"
                value="{{ old('color', $category->color ?? '#ff0000') }}">
            @error('color')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <label><strong>Icono:</strong></label>

            <input type="file" accept="image/*" name="icon" onchange="previewImage(event, '#imgPreview')">
            <img class="mt-3" id="imgPreview" src="{!! old(
                'icon',
                $category->icon ??
                    'https://e7.pngegg.com/pngimages/854/638/png-clipart-computer-icons-preview-batch-miscellaneous-angle-thumbnail.png',
            ) !!}" height="100" width="100">
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
    </div>
</div>
