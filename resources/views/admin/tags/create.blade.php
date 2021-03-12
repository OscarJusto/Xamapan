@extends('adminlte::page')

@section('title', 'Xamapan')

@section('content_header')
    <h1>Crear etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.tags.store' ]) !!}
                
                @include('admin.tags.partials.form')

                {{-- <div class="form::group">
                    {!! Form::label('color', 'Color:') !!}
                    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}

                </div> --}}

                {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script> 
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    
    </script>
@stop