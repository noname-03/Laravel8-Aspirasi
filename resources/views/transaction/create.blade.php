@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ Auth::user()->name }}</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaction</h6>
                <p></p>
            </div>
            <div class="card-body">
                <form action="{{ route('transaction.store') }}" method="POST" id="demo-form2" data-parsley-validate
                    class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Dari Cabang
                                <span class="required">*</span></label>
                            <select name="from_user_id" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected>Choose...</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if (Auth::user()->role == 'user')
                            <div class="form-group col-md-6">
                                <label>Untuk Cabang
                                    <span class="required">*</span></label>
                                <input type="text" id="first-name" required="required" class="form-control"
                                    value="{{ Auth::user()->name }}" disabled>
                                <input type="text" name="to_user_id" id="first-name" required="required"
                                    class="form-control" value="{{ Auth::user()->id }}" hidden>
                            </div>
                        @else
                            <div class="form-group col-md-6">
                                <label>Untuk Cabang
                                    <span class="required">*</span></label>
                                <select name="to_user_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option selected>Choose...</option>
                                    @foreach ($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
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
