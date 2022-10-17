@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        @if (Auth::user()->role == 'admin')
            <h1 class="h3 mb-2 text-gray-800">Admin</h1>
        @else
            <h1 class="h3 mb-2 text-gray-800">{{ Auth::user()->name }}</h1>
        @endif
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaction</h6>
                <p></p>
                <a href="{{ route('transaction.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dari Cabang</th>
                                <th>Ke Cabang</th>
                                <th>Tanggal Dan Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Dari Cabang</th>
                                <th>Ke Cabang</th>
                                <th>Tanggal Dan Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($transaction as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user_from->name }}</td>
                                    <td>{{ $item->user_to->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <form action="{{ route('transaction.destroy', $item->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <a class="btn btn-primary" href="{{ route('transaction.edit', $item->id) }}"
                                                role="button"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-success"
                                                href="{{ route('detailtransaction.index', $item->id) }}" role="button"><i
                                                    class="fa fa-plus"></i></a>
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
