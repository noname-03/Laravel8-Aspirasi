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
        @if (Auth::user()->role == 'admin')
            <h1 class="h3 mb-2 text-gray-800">Admin</h1>
        @else
            <h1 class="h3 mb-2 text-gray-800">{{ Auth::user()->name }}</h1>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Laporan Produk</h6>
                <p></p>
                <button class="btn btn-sm btn-primary" onclick="window.print()">
                    <i class="fas fa-print"></i>Print</button>
            </div>
            <div class="card-body">
                <div class="w-100 mx-auto" id="print-area">
                    <div class="table-responsive">
                        <table class="w-100 mb-3">
                            <tbody>
                                <tr>
                                    {{-- <td style="width: 25%; vertical-align: middle;">
                                    <p style="font-size: 23px; font-weight: bold;">Product</p>
                                </td> --}}
                                    <td style="width: 60%; vertical-align: top; font-size: 13px;">
                                        <p class="mb-0">Dari : {{ $transaction->user_from->name }}</p>
                                        <p class="mb-0">Alamat : {{ $transaction->user_from->address }}</p>
                                        <p class="mb-0">Untuk : {{ $transaction->user_to->name }}</p>
                                        <p class="mb-0">Alamat : {{ $transaction->user_to->address }}</p>
                                        {{-- <p class="mb-0">Email: hausofficial@haus.com</p> --}}
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
                                    <th scope="col">Kode Produduk</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $detailTransactions->product->code_product }}</td>
                                    <td>{{ $detailTransactions->product->name }}</td>
                                    <td>{{ $detailTransactions->product->category->name }}</td>
                                    <td>{{ $detailTransactions->qty }}</td>
                                <tr>
                            </tbody>
                        </table>

                        <table class="w-100 mb-3">
                            <tbody>
                                <tr>
                                    <td style="width:30%; vertical-align: top; text-align: center">
                                        <br>
                                        <br>
                                        @foreach ($cekStatus as $item)
                                <tr>
                                    <td>Status : {{ $item->status }} {{ $item->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <table class="w-100 mb-3">
                            <tbody>
                                <tr>
                                    <td style="width:30%; vertical-align: top; text-align: center">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        ({{ $transaction->user_to->name }})
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
                                        {{ $detailTransactions->created_at->format('Y-m-d') }}
                                        {{-- Jakarta, 24 Agustus 2022 --}}
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        ({{ $transaction->user_from->name }})
                                        <br>
                                        <b>Admin</b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="card-body">
                    <div class="w-100 mx-auto">
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <form
                                    action="{{ route('detailtransaction.send', [$transaction->id, $detailTransactions->id]) }}"
                                    method="post">
                                    @csrf @method('POST')
                                    <button type="submit" class="btn btn-success"
                                        {{ $cekButtonDikirim > '0' ? 'disabled' : '' }}>Kirim</button>
                                </form>
                            </div>
                            <div class="form-group col-md-1">
                                <form
                                    action="{{ route('detailtransaction.accept', [$transaction->id, $detailTransactions->id]) }}"
                                    method="post">
                                    @csrf @method('POST')
                                    <button type="submit" class="btn btn-info"
                                        {{ $cekButtonDiterima > '0' ? 'disabled' : '' }}>Terima</button>
                                </form>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('img/Maps.jpg') }}" alt="maps" srcset="" width="100%"
                                height="25%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
