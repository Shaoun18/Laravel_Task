@extends('master')

@section('title')
    AddUserPage
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Add User Form
                        </div>

                        <div class="card-body">
                            <h4 class="text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('user.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create new User">
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

