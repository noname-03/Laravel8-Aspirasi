@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Admin</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Saran</h6>
                <p></p>
                <a href="{{ route('admin.suggestion.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NO HP</th>
                                <th>Saran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NO HP</th>
                                <th>Saran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($suggestions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->suggestion }}</td>
                                    <td>{{ $item->status == 0 ? 'Tidak Terverivikasi' : 'Terverivikasi' }}</td>
                                    <td>
                                        <form action="{{ route('admin.suggestion.destroy', $item->id) }}" method="post">
                                            @csrf @method('DELETE')
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.suggestion.edit', $item->id) }}" role="button"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('admin.commentsuggestion.index', $item->id) }}"
                                                role="button"><i class="fa fa-plus"></i></a>
                                            <button type="submit" class="btn btn-sm btn-danger"
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
