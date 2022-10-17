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
                <h6 class="m-0 font-weight-bold text-primary">Pilih Product</h6>
                <p></p>
                @if ($cekData > 0)
                @else
                    <a href="{{ route('detailtransaction.create', $transaction->id) }}" class="btn btn-success">Tambah
                        Data</a>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($detailTransactions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ route('detailtransaction.show', [$transaction->id, $item->id]) }}"
                                            role="button"><i class="fa fa-eye"></i></a>
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
