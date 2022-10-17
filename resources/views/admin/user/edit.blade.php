@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.update', ['user' => $user->id]) }}" method="POST" id="demo-form2"
                    user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PATCH')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="code_store">Kode Cabang</label>
                            <input type="text" class="form-control" id="code_store" name="code_store" placeholder="Masukan kode cabang" value="{{ $user->code_store }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Nomer Handphone</label>
                            <input type="text" class="form-control" id="handphone" name="handphone" placeholder="Masukan Nomer Handphone" value="{{ $user->handphone }}">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress">Address</label>
                            <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"> {{ $user->address }} </textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Name <span class="required">*</span>
                            </label>
                            <input type="text" value="{{ $user->name }}" name="name" id="first-name" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Role
                            <span class="required">*</span></label>
                            <select name="role" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Email <span class="required">*</span>
                            </label>
                            <input type="text" name="email" id="role" value="{{ $user->email }}" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Password <span class="required">*</span>
                            </label>
                            <input type="password" name="password" id="role" class="form-control ">
                        </div>
                    </div>

                    {{-- <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Code <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="code_store" value="{{ $user->code_store }}" id="first-name"
                                required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" value="{{ $user->name }}" id="first-name"
                                required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleFormControlSelect1">Role
                            <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="role" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="email" id="role" value="{{ $user->email }}"
                                required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="password" name="password" id="role" class="form-control ">
                        </div>
                    </div> --}}
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
