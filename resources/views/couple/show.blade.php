@extends('layouts.app')

@section('template_title')
    {{ $couple->name ?? __('Show') . " " . __('Couple') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Couple</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('couples.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Hombre:</strong>
                                    {{ $couple->hombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mujer:</strong>
                                    {{ $couple->mujer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $couple->fecha }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
