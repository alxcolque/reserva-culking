<div class="row form-group">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="title" class="form-label">Plan:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $plan->title ?? '') }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2 mb-3">
            <label for="price" class="form-label">Precio:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="price" name="price"
                value="{{ old('price', $plan->price ?? '') }}">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2 mb-3">
            <label for="discount" class="form-label">Descuento:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="discount" name="discount"
                value="{{ old('discount', $plan->discount ?? '') }}">
            @error('discount')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2 mb-3">
            <label for="discount_time" class="form-label">Tiempo de Descuento:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="discount_time" name="discount_time"
                value="{{ old('discount_time', $plan->discount_time ?? '') }}">
            @error('discount_time')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-2 mb-3">
            <label for="discount_reason" class="form-label">Detalle de descuento:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="discount_reason" name="discount_reason"
                value="{{ old('discount_reason', $plan->discount_reason ?? '') }}">
            @error('discount_reason')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="container">
        <label><strong>Descripción:</strong></label><b class="text-danger"> *</b>
        <textarea class="editor2 form-control" name="description" rows="6">{!! old('description', $plan->description ?? '') !!}</textarea>
        @error('description')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
