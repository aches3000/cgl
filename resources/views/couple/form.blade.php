<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="hombre" class="form-label">{{ __('Hombre') }}</label>
            <input type="text" name="hombre" class="form-control @error('hombre') is-invalid @enderror" value="{{ old('hombre', $couple?->hombre) }}" id="hombre" placeholder="Hombre">
            {!! $errors->first('hombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mujer" class="form-label">{{ __('Mujer') }}</label>
            <input type="text" name="mujer" class="form-control @error('mujer') is-invalid @enderror" value="{{ old('mujer', $couple?->mujer) }}" id="mujer" placeholder="Mujer">
            {!! $errors->first('mujer', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $couple?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>