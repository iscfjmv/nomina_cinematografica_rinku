@extends('layouts.app')

@section('template_title')
    Sueldo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado De Sueldos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('sueldos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear Nuevo Sueldo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Rol</th>
                                        <th>Sueldo Base</th>
                                        <th>Bono</th>
                                        <th>Precio por Entrega</th>
                                        <th>Horas Laborables</th>
                                        <th>Dias Laborables</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sueldos as $sueldo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $sueldo->role->nombrerol }}</td>
                                            <td>{{ $sueldo->sueldobase }}</td>
                                            <td>{{ $sueldo->bono }}</td>
                                            <td>{{ $sueldo->precioentrega }}</td>
                                            <td>{{ $sueldo->horaslaborables }}</td>
                                            <td>{{ $sueldo->diaslaborables }}</td>

                                            <td>
                                                <form action="{{ route('sueldos.destroy', $sueldo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('sueldos.show', $sueldo->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('sueldos.edit', $sueldo->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sueldos->links() !!}
            </div>
        </div>
    </div>
@endsection
