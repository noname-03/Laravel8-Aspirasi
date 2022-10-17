@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ Auth::user()->name }}</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('user.product.store', $user->id) }}" enctype="multipart/form-data" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Kategori <span class="required">*</span></label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option selected>Choose...</option>
                                    @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{$item->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Name <span class="required">*</span>
                            </label>
                            <input type="text" name="name" id="first-name" required="required" class="form-control ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="no_Hp">Kode Produk <span class="required">*</span></label>
                            <input type="text" class="form-control" id="code_product" name="code_product" placeholder="Masukan Kode Produk" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty">Stok <span class="required">*</span></label>
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Masukan Kode Jumlah Stok" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="inputEmail4">Foto</label>
                            <input type="file" class="form-control" id="thumbnail" name="file" placeholder="Thumbnail" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Price <span class="required">*</span>
                            </label>
                            <input type="text" name="price" id="role" required="required" class="form-control " >
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 ">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
