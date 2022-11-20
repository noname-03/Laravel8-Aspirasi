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
                <h6 class="m-0 font-weight-bold text-primary">Data Title Sub Kategori</h6>
                <p></p>
                <a href="{{ route('admin.titlesubcategory.create', [$category->id, $subCategories->id]) }}"
                    class="btn btn-success">Tambah
                    Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Nama Sub Kategori</th>
                                <th>Nama Title Sub Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Nama Sub Kategori</th>
                                <th>Nama Title Sub Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($titleSubCategory as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $subCategories->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <form
                                            action="{{ route('admin.titlesubcategory.destroy', [$category->id, $subCategories->id, $item->id]) }}"
                                            method="post">
                                            @csrf @method('DELETE')
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.titlesubcategory.edit', [$category->id, $subCategories->id, $item->id]) }}"
                                                role="button"><i class="fa fa-edit"></i></a>
                                            {{-- <a class="btn btn-success"
                                                href="{{ route('admin.titlesubcategory.show', [$category->id, $item->id]) }}"
                                                role="button"><i class="fa fa-eye"></i></a> --}}
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
