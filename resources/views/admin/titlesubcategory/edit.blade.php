@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Title Sub Kategori</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form
                    action="{{ route('admin.titlesubcategory.update', [$category->id, $subCategories->id, $titleSubCategories->id]) }}"
                    method="POST" id="demo-form2" user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PUT')
                    <div class="item form-group">
                        <div class="form-group col-md-6">
                            <label for="name">Name <span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukan Nama" value="{{ $titleSubCategories->name }}" required>
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
