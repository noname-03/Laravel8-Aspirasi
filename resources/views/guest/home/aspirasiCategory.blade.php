@extends('guest.layouts.app')
@section('content')
    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="category-title">Kategori : {{ $titleSubCategories->name }}</h3>

                    @foreach ($aspirations as $item)
                        <div class="d-md-flex post-entry-2 small-img border-bottom">
                            {{-- <a href="single-post.html" class="me-4 thumbnail">
                                <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                            </a> --}}
                            <div>
                                <div class="post-meta"><span class="date">{{ $item->TitleSubCategory->name }}</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span></div>
                                <h3><a href="{{ route('guest.showAspirasi', $item->id) }}">{{ $item->title }}</a></h3>
                                <p>{{ $item->description }}</p>
                                <div class="d-flex align-items-center author">
                                    <div class="name">
                                        <span class="date">{{ $item->name }}</span>
                                        <span class="mx-1">&bullet;</span>

                                        @if ($item->status == 1)
                                            <span style="color: orange">Terverifikasi</span>
                                        @elseif ($item->status == 2)
                                            <span style="color: red">Proses Poker</span>
                                            {{-- style="color: green" --}}
                                        @elseif ($item->status == 3)
                                            <span style="color: blue">Terealisasi</span>
                                            {{-- style="color: brown" --}}
                                        @else
                                            <span style="color: green">Tidak Terealisasi</span>
                                            {{-- style="color: red" --}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Paging -->
                    <div class="text-start py-4">
                        {{ $aspirations->links() }}
                        {{-- <div class="custom-pagination">
                            <a href="#" class="prev">Prevous</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next">Next</a>
                        </div> --}}
                    </div><!-- End Paging -->

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
    </section> <!-- End Search Result -->
@endsection
