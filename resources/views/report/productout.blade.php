@extends('layouts.app')
@section('css')
    <style media="print">
        @page {
            size: auto;
            margin: 0;
        }

        body * {
            visibility: hidden;
        }

        #print-area {
            max-width: 793px;
            color: #000;
        }

        #print-area,
        #print-area * {
            visibility: visible;
        }

        #print-area {
            position: fixed;
            left: 50%;
            top: 30px;
            margin: 0;
            transform: translateX(-50%);
        }

        #table-title {
            display: block;
        }
    </style>
@endsection
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
                <h6 class="m-0 font-weight-bold text-primary">Laporan Product Keluar</h6>
                <p></p>
                {{-- <a href="{{ route('admin.product.create', Auth::user()->id) }}" class="btn btn-success">Tambah Data</a> --}}
                {{-- <button class="btn btn-sm btn-primary" onclick="window.print()">
                    <i class="fas fa-print"></i>Print</button> --}}
            </div>
            <div class="card-body">
                <div class="w-100 mx-auto" id="print-area">
                    <div class="table-responsive">
                        <table class="w-100 mb-3">
                            <tbody>
                                <tr>
                                    <td style="width: 25%; vertical-align: middle;">
                                        <p style="font-size: 23px; font-weight: bold;">Laporan Product Keluar</p>
                                    </td>
                                    <td style="width: 60%; vertical-align: top; font-size: 13px;">
                                        <p class="mb-0">Nama : {{ Auth::user()->name }}</p>
                                        <p class="mb-0">No Handphone :
                                            {{ Auth::user()->phone == null ? '-' : Auth::user()->phone }}</p>
                                        <p class="mb-0">Email : {{ Auth::user()->email }}</p>
                                    </td>
                                    <td style="width: 15%; vertical-align: top; text-align: right;">

                                        <img src={{ asset('img/logo_haus.png') }} width="100" />

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped mb-5">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Cari Cabang</th>
                                    <th scope="col">Ke Cabang</th>
                                    <th scope="col">Tanggal Dan Waktu</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaction as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->user_from->name }}</td>
                                        <td>{{ $item->user_to->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="{{ route('detailtransaction.index', $item->id) }}" role="button"><i
                                                    class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- <table class="w-100 mb-3">
                            <tbody>
                                <tr>
                                    <td style="width:30%; vertical-align: top; text-align: center">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        (Brian)
                                        <br>
                                        <b>Direktur</b>
                                    </td>
                                    <td style="width:13.3%; vertical-align: top; text-align: center">
                                    </td>
                                    <td style="width:13.3%; vertical-align: top; text-align: center">
                                    </td>
                                    <td style="width:13.3%; vertical-align: top; text-align: center">
                                    </td>
                                    <td style="width:30%; vertical-align: top; text-align: center">
                                        Jakarta, {{ date('d-M-Y') }}
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        (Rizky)
                                        <br>
                                        <b>Admin</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
