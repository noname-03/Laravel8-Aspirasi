@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Produk</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.product.update', [$user->id, $product->id]) }}" enctype="multipart/form-data" method="POST" id="demo-form2"
                    user-parsley-validate class="form-horizontal form-label-left">
                    @csrf @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Kategori <span class="required">*</span></label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}" {{ $product->category_id == $item->id ? 'selected' : '' }} >{{$item->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Name <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required" class="form-control " value="{{ $product->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kode Produk <span class="required">*</span></label>
                            <input type="text" class="form-control" id="code_product" name="code_product" placeholder="Masukan Kode Produk" required value="{{ $product->code_product }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty">Stok <span class="required">*</span></label>
                            <input type="text" class="form-control" id="qty" name="qty" value="{{ $product->qty }}" placeholder="Masukan Kode Jumlah Stok" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputEmail4">Foto</label>
                            <input type="file" class="form-control" id="thumbnail" name="file" placeholder="Thumbnail">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Price <span class="required">*</span>
                            </label>
                            <input type="text" name="price" id="role" required="required" class="form-control " value="{{ $product->price }}">
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
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
