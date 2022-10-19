@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Aspirasi</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.aspiration.store') }}" method="POST" enctype="multipart/form-data"
                    id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dprd <span class="required">*</span></label>
                            <select name="dprd_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                @foreach ($dprds as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori <span class="required">*</span></label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Name <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Email <span class="required">*</span></label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukan Email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Uraian <span class="required">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Uraian" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Jalan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="street" name="street"
                                placeholder="Masukan Jalan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">RT <span class="required">*</span></label>
                            <input type="number" class="form-control" id="rt" name="rt"
                                placeholder="Masukan RT" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">RW <span class="required">*</span></label>
                            <input type="number" class="form-control" id="rw" name="rw"
                                placeholder="Masukan RW" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kecamatan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="districts" name="districts"
                                placeholder="Masukan Kecamatan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kelurahan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="village" name="village"
                                placeholder="Masukan Kelurahan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Jumlah / Volume <span class="required">*</span></label>
                            <input type="text" class="form-control" id="volume" name="volume"
                                placeholder="Masukan Jumalah atau Volume" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Satuan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="unit" name="unit"
                                placeholder="Masukan Satuan" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputEmail4">Lampiran</label>
                            <input type="file" class="form-control" id="thumbnail" name="file"
                                placeholder="Thumbnail" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status <span class="required">*</span>
                            </label>
                            <input type="text" name="status" id="status" required="required"
                                class="form-control ">
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
