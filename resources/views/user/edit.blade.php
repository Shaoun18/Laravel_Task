@extends('master')

@section('title')
    UpdateUserPage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Update User Form
                        </div>

                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('user.update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="{{$user->mobile}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="date_of_birth" value="{{$user->date_of_birth}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update User Info">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

