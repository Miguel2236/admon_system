@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">New Section</div>  
                <form action="{{ route('section_store') }}" method="POST" name="frmSec" id="frmSec" class="forms-sample">
                    @csrf
                    <div class="form-group" style="padding: 20px">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>
                    <div class="form-group" style="padding: 20px">
                        <label for="short_name">Short Name</label>
                        <input type="text" class="form-control" name="short_name" autocomplete="off">
                    </div>
                    <div class="form-group" style="padding: 20px">
                        <input type="hidden" name="module_id" value="{{ $id }}">
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection