@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4"><div class="card-header">Modules List</div></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newMod">Modal</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tblDep" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Short Name</th>
                                        <th>icon</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mod as $m)
                                        <tr>
                                            <td>{{$m->name}}</td>
                                            <td>{{$m->menu_name}}</td>
                                            <td>{{$m->icon}}</td>
                                            <td>{{$m->bActive == 1 ? 'Active' : 'Cancel'}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('section_create',$m->id) }}" class="btn btn-outline-dark"><i class="fas fa-plus-square"></i></a>
                                                    <a href="#" class="btn btn-outline-dark"><i class="fas fa-list"></i></a>
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

@include('module.new')

@endsection