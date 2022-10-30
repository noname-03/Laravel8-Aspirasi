@extends('guest.layouts.app')
@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{ $aspiration->category->name }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>Jul 5th '22 {{ $aspiration->id }}</span>
                        </div>
                        <h1 class="mb-5">{{ $aspiration->title }}</h1>
                        <p>
                            {{-- <span class="firstcharacter">L</span> --}}
                            {{ $aspiration->description }}</p>
                        <table border="0" width="600" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>Dprd :</td>
                                <td>{{ $aspiration->dprd->name }}</td>
                            </tr>
                            <tr>
                                <td>Kategori :</td>
                                <td>{{ $aspiration->category->name }}</td>
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
                                    {{-- C:\project\laravel\aspirasi\storage\app\public\lampiran\aspirasi\1667122152.pdf --}}
                                    <a href="{{ asset('storage/lampiran/aspirasi/' . $aspiration->attachment) }}"
                                        target="_blank" rel="noopener noreferrer">a</a>
                                    {{ $aspiration->attachment }}
                                </td>
                            </tr>
                            <tr>
                                <td>Status :</td>
                                <td>{{ $aspiration->status }}</td>
                            </tr>
                        </table>
                        {{--
                        <figure class="my-4">
                            <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                            </figcaption>
                        </figure>
                        <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus.
                            Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita
                            exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem
                            beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos
                            necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.</p>
                        <p>Explicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat
                            excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis
                            perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate,
                            nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus
                            exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo
                            provident aliquid laborum. Vitae, ut.</p>
                        <p>Reprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse
                            repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam
                            deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus
                            officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt
                            repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam
                            dolor.</p>
                        <p>Dolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus
                            vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque
                            illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti,
                            earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut
                            laborum culpa assumenda pariatur et perferendis?</p>
                        <p>Est soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed,
                            expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate
                            omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates
                            aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum
                            laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>
                        <figure class="my-4">
                            <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                            </figcaption>
                        </figure>
                        <p>Quis molestiae, dolorem consequuntur labore perferendis enim accusantium commodi optio, sequi
                            magnam ad consectetur iste omnis! Voluptatibus, quia officia esse necessitatibus magnam tempore
                            reprehenderit quo aspernatur! Assumenda, minus dolorem repellendus corporis corrupti quia
                            temporibus repudiandae in. Sit rem aut, consectetur repudiandae perferendis nemo alias, iure
                            ipsam omnis quam soluta, nobis animi quis aliquam blanditiis at. Dicta nemo vero sequi
                            exercitationem.</p>
                        <p>Architecto ex id at illum aperiam corporis, quidem magnam doloribus non eligendi delectus laborum
                            porro molestiae beatae eveniet dolor odit optio soluta dolores! Eaque odit a nihil recusandae,
                            error repellendus debitis ex autem ab commodi, maiores officiis doloribus provident optio,
                            architecto assumenda! Nihil cum laboriosam eos dolore aliquid perferendis amet doloremque
                            quibusdam odio soluta vero odit, ipsa, quisquam quod nulla.</p>
                        <p>Consequuntur corrupti fugiat quod! Ducimus sequi nemo illo ad necessitatibus amet nobis corporis
                            et quasi. Optio cum neque fuga. Ad excepturi magnam quisquam ex voluptatibus vitae aut nam
                            quidem doloribus, architecto perspiciatis sit consequatur pariatur alias animi expedita quas? Et
                            doloribus voluptatibus perferendis qui fugiat voluptatum autem facere aspernatur quidem quae
                            assumenda iste, sit similique, necessitatibus laborum magni. Ea, dolores!</p>
                        <p>Possimus temporibus rerum illo quia repudiandae provident sed quas atque. Ipsam adipisci
                            accusamus iste optio illo aliquam molestias? Voluptatibus, veniam recusandae facilis nobis
                            perspiciatis rem similique, nisi ad explicabo ipsa voluptatum, inventore molestiae natus
                            adipisci? Fuga delectus quia assumenda totam aspernatur. Nobis hic ea rem, quaerat voluptate
                            vero illum laboriosam omnis aspernatur labore, natus ex iusto ducimus exercitationem a officia.
                        </p> --}}
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">{{ $aspiration->CommentAspirations->count() }} Comments</h5>
                        @foreach ($aspiration->CommentAspirations as $item)
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
                                            placeholder="Enter your name" name="name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-email">Title</label>
                                        <input type="text" class="form-control" id="comment-title"
                                            placeholder="Enter your title" name="title">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="comment-message">Message</label>

                                        <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"
                                            name="description"></textarea>
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
                    </div>

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
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Culture</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Food</a></li>
                            <li><a href="category.html">Politics</a></li>
                            <li><a href="category.html">Celebrity</a></li>
                            <li><a href="category.html">Startups</a></li>
                            <li><a href="category.html">Travel</a></li>
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </section>
@endsection
