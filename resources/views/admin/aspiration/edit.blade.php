@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Aspirasi</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.aspiration.update', $aspirations->id) }}" method="POST" id="demo-form2"
                    enctype="multipart/form-data" user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PATCH')
                    {{-- <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="name" id="first-name" required="required" value={{$dprd->name}} class="form-control ">
                        </div>
                    </div> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dprd <span class="required">*</span></label>
                            <select name="dprd_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                @foreach ($dprds as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $aspirations->dprd_id == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori <span class="required">*</span></label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $aspirations->category_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Name <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required" class="form-control "
                                value="{{ $aspirations->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Email <span class="required">*</span></label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Masukan Email" value="{{ $aspirations->email }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Uraian <span class="required">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Uraian" required>{{ $aspirations->description }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Jalan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="street" name="street"
                                placeholder="Masukan Jalan" value="{{ $aspirations->street }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">RT <span class="required">*</span></label>
                            <input type="number" class="form-control" id="rt" name="rt"
                                placeholder="Masukan RT" value="{{ $aspirations->rt }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">RW <span class="required">*</span></label>
                            <input type="number" class="form-control" id="rw" name="rw"
                                placeholder="Masukan RW" value="{{ $aspirations->rw }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kecamatan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="districts" name="districts"
                                placeholder="Masukan Kecamatan" value="{{ $aspirations->districts }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kelurahan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="village" name="village"
                                placeholder="Masukan Kelurahan" value="{{ $aspirations->village }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Jumlah / Volume <span class="required">*</span></label>
                            <input type="text" class="form-control" id="volume" name="volume"
                                placeholder="Masukan Jumalah atau Volume" value="{{ $aspirations->volume }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Satuan <span class="required">*</span></label>
                            <input type="text" class="form-control" id="unit" name="unit"
                                placeholder="Masukan Satuan" value="{{ $aspirations->unit }}" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputEmail4">Lampiran</label>
                            <input type="file" class="form-control" id="thumbnail" name="file"
                                placeholder="Thumbnail">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Status <span class="required">*</span>
                            </label>
                            <input type="text" name="status" id="status" required="required"
                                class="form-control" value="{{ $aspirations->status }}">
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
