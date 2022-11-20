@extends('guest.layouts.app')
@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{ $aspiration->TitleSubCategory->name }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>{{ $aspiration->created_at }}</span>
                        </div>
                        <h1 class="mb-5">{{ $aspiration->title }}</h1>
                        <p>
                            {{-- <span class="firstcharacter">L</span> --}}
                            {{ $aspiration->description }}</p>
                        <table border="0" width="600" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="200">Dprd :</td>
                                <td>{{ $aspiration->dprd->name }}</td>
                            </tr>
                            <tr>
                                <td>Kategori :</td>
                                <td>{{ $aspiration->TitleSubCategory->name }}</td>
                            </tr>
                            <tr>
                                <td>Nama :</td>
                                <td>{{ $aspiration->name }}</td>
                            </tr>
                            <tr>
                                <td>Email / No HP :</td>
                                <td>{{ $aspiration->email }}</td>
                            </tr>
                            <tr>
                                <td>Judul :</td>
                                <td>{{ $aspiration->title }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi :</td>
                                <td>{{ $aspiration->description }}</td>
                            </tr>
                            <tr>
                                <td>Jalan :</td>
                                <td>{{ $aspiration->street }}</td>
                            </tr>
                            <tr>
                                <td>RT :</td>
                                <td>{{ $aspiration->rt }}</td>
                            </tr>
                            <tr>
                                <td>RW :</td>
                                <td>{{ $aspiration->rw }}</td>
                            </tr>
                            <tr>
                                <td>Kecamatan :</td>
                                <td>{{ $aspiration->districts }}</td>
                            </tr>
                            <tr>
                                <td>Desa :</td>
                                <td>{{ $aspiration->village }}</td>
                            </tr>
                            <tr>
                                <td>Volume :</td>
                                <td>{{ $aspiration->volume }} {{ $aspiration->unit }}</td>
                            </tr>
                            <tr>
                                <td>Lampiran :</td>
                                <td>
                                    <a href="{{ asset('storage/lampiran/aspirasi/' . $aspiration->attachment) }}"
                                        target="_blank" rel="noopener noreferrer">{{ $aspiration->attachment }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Status :</td>
                                <td>
                                    @if ($aspiration->status == 1)
                                        <span style="color: orange">Terverifikasi</span>
                                    @elseif ($aspiration->status == 2)
                                        <span style="color: red">Proses Poker</span>
                                        {{-- style="color: green" --}}
                                    @elseif ($aspiration->status == 3)
                                        <span style="color: blue">Terealisasi</span>
                                        {{-- style="color: brown" --}}
                                    @else
                                        <span style="color: green">Tidak Terealisasi</span>
                                        {{-- style="color: red" --}}
                                    @endif
                                </td>
                            </tr>
                        </table>

                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">{{ $aspiration->CommentAspirations->where('status', 1)->count() }}
                            Comments</h5>
                        @foreach ($aspiration->CommentAspirations->where('status', 1) as $item)
                            <div class="comment d-flex mb-4">
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">{{ $item->name }}</h6>
                                        <span class="text-muted">{{ $item->created_at }}</span>
                                    </div>
                                    <div class="comment-body">
                                        {{ $item->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- End Comments -->

                    <!-- ======= Comments Form ======= -->
                    <div class="row justify-content-center mt-5">

                        <div class="col-lg-12">
                            <h5 class="comment-title">Leave a Comment</h5>
                            <form action="{{ route('guest.storeCommentAspiration', $aspiration->id) }}" method="post">
                                @csrf @method('POST')
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-name">Name</label>
                                        <input type="text" class="form-control" id="comment-name"
                                            placeholder="Enter your name" name="name" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-email">Title</label>
                                        <input type="text" class="form-control" id="comment-title"
                                            placeholder="Enter your title" name="title" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="comment-message">Message</label>
                                        <textarea class="form-control" id="comment-message" placeholder="Enter your Message" cols="30" rows="10"
                                            name="description" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="Post comment">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Comments Form -->

                </div>

                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <h2>Masukan Aspirasi Kamu Disini!</h2>
                        <form action="{{ route('guest.aspirasi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Dapil <span class="required">*</span></label>
                                <select name="dprd_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option>Choose...</option>
                                    @foreach ($dprds as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori <span class="required">*</span></label>
                                <select name="title_sub_category_id" class="form-control" id="exampleFormControlSelect1"
                                    data-show-subtext="true" data-live-search="true" required>
                                    <option>Choose...</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" disabled>{{ $item->name }}</option>
                                        @foreach ($item->subCategories as $item)
                                            <option value="{{ $item->id }}" disabled>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->name }}</option>
                                            @foreach ($item->titleSubCategories as $item)
                                                <option value="{{ $item->id }}"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->name }}</option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name <span class="required">*</span>
                                </label>
                                <input type="text" name="name" id="first-name" required="required"
                                    class="form-control " placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Email <span class="required">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul <span class="required">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Masukan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Jalan <span class="required">*</span></label>
                                <input type="text" class="form-control" id="street" name="street"
                                    placeholder="Masukan Jalan" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Uraian <span class="required">*</span></label>
                                <textarea class="form-control" id="description" name="description" placeholder="Masukan Uraian" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">RT <span class="required">*</span></label>
                                <input type="number" class="form-control" id="rt" name="rt"
                                    placeholder="Masukan RT" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">RW <span class="required">*</span></label>
                                <input type="number" class="form-control" id="rw" name="rw"
                                    placeholder="Masukan RW" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Kecamatan <span class="required">*</span></label>
                                <input type="text" class="form-control" id="districts" name="districts"
                                    placeholder="Masukan Kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Kelurahan <span class="required">*</span></label>
                                <input type="text" class="form-control" id="village" name="village"
                                    placeholder="Masukan Kelurahan" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Jumlah / Volume <span class="required">*</span></label>
                                <input type="text" class="form-control" id="volume" name="volume"
                                    placeholder="Masukan Jumalah atau Volume" required>
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">Satuan <span class="required">*</span></label>
                                <input type="text" class="form-control" id="unit" name="unit"
                                    placeholder="Masukan Satuan" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4">Lampiran</label>
                                <input type="file" class="form-control" id="thumbnail" name="file"
                                    placeholder="Thumbnail" required>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
