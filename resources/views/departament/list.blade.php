@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4"><div class="card-header">Listado de Departamentos</div></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newDep" title="New Departament"><i class="fas fa-plus-square"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <table id="tblDep" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dep as $d)
                                        <tr>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->description}}</td>
                                            <td>{{$d->bActive == 1 ? 'Activo' : 'Cerrado'}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-outline-dark"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-outline-dark"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- se incluye el modal --}}
@include('departament.new')
@endsection