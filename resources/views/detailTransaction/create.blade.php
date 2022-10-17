@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Detail Transaksi</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('detailtransaction.store', $transaction->id) }}" enctype="multipart/form-data" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Product <span class="required">*</span></label>
                            <select name="product_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option selected>Choose...</option>
                                    @foreach ($product as $item)
                                    <option value="{{ $item->id }}">{{$item->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label >Kuantitas <span class="required">*</span>
                            </label>
                            <input type="text" name="qty" id="first-name" required="required" class="form-control ">
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
