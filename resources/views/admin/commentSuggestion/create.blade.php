@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Komem Saran</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.commentsuggestion.store', $suggestion->id) }}" enctype="multipart/form-data"
                    method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required"
                                placeholder="Masukan Nama" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="title">Judul<span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukan Judul" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Deskripsi <span class="required">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" required></textarea>
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

                    <div class="ln_solid"></div>
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
