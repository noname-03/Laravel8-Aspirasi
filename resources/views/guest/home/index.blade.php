@extends('guest.layouts.app')
@section('content')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-1.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-2.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                            Haircut</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-3.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque
                                            est mollitia! Beatae minima assumenda repellat harum vero, officiis
                                            ipsam magnam obcaecati cumque maxime inventore repudiandae quidem
                                            necessitatibus rem atque.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Title</h2>
                                        <p>description.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end"
                                    style="background-image: url('{{ asset('/guest') }}/assets/img/post-slide-4.jpg');">
                                    <div class="img-bg-inner">
                                        <h2>Title</h2>
                                        <p>description.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Slider Section -->

    <!-- ======= Content ======= -->
    <section class="category-section">
        <div class="container" data-aos="fade-up">


            <div class="row g-5">
                <div class="col-lg-4">


                    <h3 class="aside-title">Saran</h3>
                    @foreach ($suggestions as $item)
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta">
                                <span>{{ $item->created_at }}</span>
                            </div>
                            <h2 class="mb-2"><a
                                    href="{{ route('guest.showSaran', $item->id) }}">{{ Str::limit($item->suggestion, 20, '...') }}</a>
                            </h2>
                            <span class="author mb-3 d-block">{{ $item->name }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-8 border-start custom-border">

                            <!-- new custom -->

                            <h3 class="aside-title">Aspirasi</h3>

                            @foreach ($aspirations as $item)
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">{{ $item->TitleSubCategory->name }}</span>
                                        <span class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span>
                                    </div>
                                    <h2 class="mb-2"><a
                                            href="{{ route('guest.showAspirasi', $item->id) }}">{{ $item->title }}</a>
                                    </h2>
                                    <div class="post-meta">
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
                            @endforeach
                            {{--
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Lifestyle</span> <span
                                        class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay
                                        Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div> --}}


                            <!-- end new custom -->

                        </div>

                        <div class="col-lg-4">

                            <!-- new custom -->
                            <div class="aside-block">
                                <h3 class="aside-title">Kategori</h3>
                                <form action="{{ route('guest.aspirasiCategory.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <label>Kategori <span class="required">*</span></label> --}}
                                        <select name="title_sub_category_id" class="form-control"
                                            id="exampleFormControlSelect1" data-show-subtext="true" data-live-search="true"
                                            required>
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
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success">Pencarian</button>
                                    </div>
                                </form>
                                {{-- <ul class="aside-links list-unstyled">
                                    @foreach ($categories as $item)
                                        <li><a><i class="bi bi-chevron-right"></i>
                                                {{ $item->name }}</a>
                                        </li>
                                        <ul>
                                            @foreach ($item->subCategories as $item)
                                                <li>{{ $item->name }}</li>
                                                <ul>
                                                    @foreach ($item->titleSubCategories as $item)
                                                        <li><a href="{{ route('guest.aspirasiCategory', $item->id) }}">
                                                                {{ $item->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </ul> --}}
                            </div><!-- End Categories -->
                            <!-- end new custom -->

                        </div>
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section>
    <!-- End Lifestyle Category Section -->
@endsection
