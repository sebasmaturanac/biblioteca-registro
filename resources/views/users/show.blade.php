@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <div class="form-group">
                        {!! Form::label('Rol', 'Rol:') !!}
                        <p>{!! $user->roles->toArray()[0]['name'] !!}</p>
                    </div>
                    <a href="{!! route('users.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>            
        </div>
    </div>
@endsection
