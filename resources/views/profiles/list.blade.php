@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4"><div class="card-header">Profiles List</div></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                {{-- <div class="card-header">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newMod">Modal</button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tblProfiles" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Descriptions</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profiles as $prof)
                                        <tr>
                                            <td>{{$prof->name}}</td>
                                            <td>{{$prof->description}}</td>
                                            <td>{{$prof->bActive == 1 ? 'Active' : 'Cancel'}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-outline-dark" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-outline-dark" title="Permissions"><i class="fas fa-door-open"></i></a>
                                                    <a href="#" class="btn btn-outline-dark" title="Delete"><i class="fa fa-trash"></i></a>
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