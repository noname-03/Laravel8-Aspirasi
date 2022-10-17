@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">{{ Auth::user()->name }}</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
                <p></p>
                <a href="{{ route('user.product.create', $user->id) }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Photo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Photo</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td><img src="{{ asset('storage/images/product/' . $item->photo) }}" width="40"
                                            height="40"></td>
                                    <td>
                                        <form action="{{ route('user.product.destroy', [$user->id, $item->id]) }}"
                                            method="post">
                                            @csrf @method('DELETE')
                                            <a class="btn btn-primary"
                                                href="{{ route('user.product.edit', [$user->id, $item->id]) }}"
                                                role="button"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-success"
                                                href="{{ route('user.product.show', [$user->id, $item->id]) }}"
                                                role="button"><i class="fa fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('apakah anda mau menghapus data ini ?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
