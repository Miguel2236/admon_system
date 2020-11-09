@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">Section List for {{ $moduleName }}</div>  
                <div class="table-responsive">
                    <table id="tblDep" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Short Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $sec)
                                <tr>
                                    <td>{{$sec->name}}</td>
                                    <td>{{$sec->short_name}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-dark"><i class="fas fa-pen-square"></i></a>
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
@endsection