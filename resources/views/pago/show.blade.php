@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleado:</strong>
                            {{ $pago->idempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Sueldo:</strong>
                            {{ $pago->idsueldo }}
                        </div>
                        <div class="form-group">
                            <strong>Numero de Entregas:</strong>
                            {{ $pago->numeroentregas }}
                        </div>
                        <div class="form-group">
                            <strong>Mes de Pago:</strong>
                            {{ $pago->mespago }}
                        </div>
                        <div class="form-group">
                            <strong>Pago Total:</strong>
                            {{ $pago->pagototal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
