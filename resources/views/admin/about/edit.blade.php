@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit About</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.about.update', ['about' => $about->id]) }}" method="POST" id="demo-form2"
                    user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PATCH')
                    <div class="item form-group">
                        <div class="form-group col-md-12">
                            <label for="title">Judul <span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukan Nama" value="{{ $about->title }}" required>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="description">Uraian <span class="required">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Uraian" required>{{ $about->description }}</textarea>
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
