@extends('layouts.app')

@section('template_title')
    {{ $sueldo->name ?? 'Show Sueldo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Sueldo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sueldos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $sueldo->idrol }}
                        </div>
                        <div class="form-group">
                            <strong>Sueldo Base:</strong>
                           $ {{ $sueldo->sueldobase }}
                        </div>
                        <div class="form-group">
                            <strong>Bono:</strong>
                            $ {{ $sueldo->bono }}
                        </div>
                        <div class="form-group">
                            <strong>Precio por Entrega:</strong>
                            $ {{ $sueldo->precioentrega }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Laborables:</strong>
                            {{ $sueldo->horaslaborables }}
                        </div>
                        <div class="form-group">
                            <strong>Dias Laborables:</strong>
                            {{ $sueldo->diaslaborables }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
