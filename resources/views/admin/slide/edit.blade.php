@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Slide</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.slide.update', $slide->id) }}" method="POST" id="demo-form2"
                    enctype="multipart/form-data" user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PATCH')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Judul <span class="required">*</span>
                            </label>
                            <input type="text" name="title" id="first-name" required="required" class="form-control "
                                value="{{ $slide->title }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputEmail4">Lampiran</label>
                            <input type="file" class="form-control" id="thumbnail" name="file"
                                placeholder="Thumbnail">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description">Deskripsi <span class="required">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Deskripsi" required> {{ $slide->description }}</textarea>
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
