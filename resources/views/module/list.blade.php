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
                            <table id="tblDep" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Short Name</th>
                                        <th>icon</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mod as $m)
                                        <tr>
                                            <td>{{$m->name}}</td>
                                            <td>{{$m->menu_name}}</td>
                                            <td>{{$m->icon}}</td>
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

@include('module.new')

<script>
// $(document).ready( function () {
//     $('#tblDep').DataTable();
// } );
</script>
@endsection