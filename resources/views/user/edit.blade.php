@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                    <h6 class="card-title">User Form</h6>
                    <form action="{{ route('user_update', $user->id) }}" method="POST" name="frmEditUser" id="frmEditUser">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection