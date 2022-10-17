@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.store') }}" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="code_store">Kode Cabang</label>
                            <input type="text" class="form-control" id="code_store" name="code_store" placeholder="Masukan kode cabang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Nomer Handphone</label>
                            <input type="text" class="form-control" id="handphone" name="handphone" placeholder="Masukan Nomer Handphone">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress">Address</label>
                            <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                            </textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Name <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Role
                            <span class="required">*</span></label>
                            <select name="role" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Email <span class="required">*</span>
                            </label>
                            <input type="text" name="email" id="role" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Password <span class="required">*</span>
                            </label>
                            <input type="password" name="password" id="role" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 ">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
