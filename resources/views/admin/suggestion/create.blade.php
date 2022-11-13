@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Saran</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.suggestion.store') }}" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukan Nama" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Nomer Handphone <span class="required">*</span></label>
                            <input type="text" class="form-control" id="no_Hp" name="no_hp"
                                placeholder="Masukan Nomer Handphone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="suggestion">Saran <span class="required">*</span></label>
                            <textarea class="form-control" id="suggestion" name="suggestion" placeholder="Masukan Uraian" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status <span class="required">*</span></label>
                            <select name="status" class="form-control" id="exampleFormControlSelect1" required>
                                <option>Choose...</option>
                                <option value="0">Tidak Terverifikasi</option>
                                <option value="1">Terverifikasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
