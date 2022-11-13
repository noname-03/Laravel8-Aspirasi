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
                    {{--
              <div class="d-md-flex post-entry-2 small-img">
                <a href="single-post.html" class="me-4 thumbnail">
                  <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                </a>
                <div>
                  <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h3><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                  <div class="d-flex align-items-center author">
                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                      <h3 class="m-0 p-0">Wade Warren</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-md-flex post-entry-2 small-img">
                <a href="single-post.html" class="me-4 thumbnail">
                  <img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
                </a>
                <div>
                  <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h3><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                  <div class="d-flex align-items-center author">
                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                      <h3 class="m-0 p-0">Wade Warren</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-md-flex post-entry-2 small-img">
                <a href="single-post.html" class="me-4 thumbnail">
                  <img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                </a>
                <div>
                  <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h3><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                  <div class="d-flex align-items-center author">
                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                      <h3 class="m-0 p-0">Wade Warren</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-md-flex post-entry-2 small-img">
                <a href="single-post.html" class="me-4 thumbnail">
                  <img src="assets/img/post-landscape-4.jpg" alt="" class="img-fluid">
                </a>
                <div>
                  <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                  <h3><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas.</p>
                  <div class="d-flex align-items-center author">
                    <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                    <div class="name">
                      <h3 class="m-0 p-0">Wade Warren</h3>
                    </div>
                  </div>
                </div>
              </div> --}}

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
                        <form action="{{ route('admin.aspiration.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Dprd <span class="required">*</span></label>
                                <select name="dprd_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option>Choose...</option>
                                    @foreach ($dprds as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori <span class="required">*</span></label>
                                <select name="category_id" class="form-control" id="exampleFormControlSelect1" required>
                                    <option>Choose...</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                            <div class="form-group">
                                <label>Status <span class="required">*</span></label>
                                <select name="status" class="form-control" id="exampleFormControlSelect1" required>
                                    <option>Choose...</option>
                                    <option value="1">Terverifikasi</option>
                                    <option value="2">Proses Poker</option>
                                    <option value="3">Terealisasi</option>
                                    <option value="4">Tidak Terealisasi</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>

                    {{-- <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-popular" type="button" role="tab"
                                    aria-controls="pills-popular" aria-selected="true">Popular</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-trending" type="button" role="tab"
                                    aria-controls="pills-trending" aria-selected="false">Trending</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-latest" type="button" role="tab"
                                    aria-controls="pills-latest" aria-selected="false">Latest</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                aria-labelledby="pills-popular-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                            Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                            Medium
                                            Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                            Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                            Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div> <!-- End Popular -->

                            <!-- Trending -->
                            <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                aria-labelledby="pills-trending-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                            Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                            Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                            Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                            Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>
                            </div> <!-- End Trending -->

                            <!-- Latest -->
                            <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                aria-labelledby="pills-latest-tab">
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                            Guide</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                            Pimples Away)</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                                            Know</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Sport</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                                            Video Calls?</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Lifestyle</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                                            Will Inspire Your New Haircut</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">Culture</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                            Medium Hair</a></h2>
                                    <span class="author mb-3 d-block">Jenny Wilson</span>
                                </div>

                            </div> <!-- End Latest -->

                        </div>
                    </div> --}}

                    <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            @foreach ($categories as $item)
                                <li><a href="{{ route('guest.aspirasiCategory', $item->id) }}"><i
                                            class="bi bi-chevron-right"></i> {{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- End Categories -->


                </div>

            </div>
        </div>
    </section> <!-- End Search Result -->
@endsection
