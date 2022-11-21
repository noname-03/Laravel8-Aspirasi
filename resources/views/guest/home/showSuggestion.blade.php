@extends('guest.layouts.app')
@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta">
                            <span>{{ $suggestions->created_at }}</span>
                        </div>
                        <h1 class="mb-5">{{ $suggestions->name }}</h1>
                        <p>
                            {{-- <span class="firstcharacter">L</span> --}}
                            {{ $suggestions->description }}</p>
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="300">Nama :</td>
                                <td>{{ $suggestions->name }}</td>
                            </tr>
                            <tr>
                                <td>Email / No HP :</td>
                                <td>{{ $suggestions->no_hp }}</td>
                            </tr>
                            <tr>
                                <td>Saran :</td>
                                <td>{{ $suggestions->suggestion }}</td>
                            </tr>
                        </table>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">{{ $suggestions->commentSuggestions->where('status', 1)->count() }}
                            Comments</h5>
                        @foreach ($suggestions->commentSuggestions->where('status', 1) as $item)
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
                            <form action="{{ route('guest.storeCommentSaran', $suggestions->id) }}" method="post">
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

                                        <textarea class="form-control" id="comment-message" placeholder="Enter your Message" cols="30" rows="10"
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

                        <h2>Masukan Saran Kamu Disini!</h2>
                        <form action="{{ route('guest.saran.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name <span class="required">*</span>
                                </label>
                                <input type="text" name="name" id="first-name" required="required"
                                    class="form-control " placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="no_Hp">No Handpohone / Email <span class="required">*</span></label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="Masukan Email Atau Nomer Handphone" required>
                            </div>
                            <div class="form-group">
                                <label for="suggestion">Saran <span class="required">*</span></label>
                                <textarea class="form-control" id="suggestion" name="suggestion" placeholder="Masukan Uraian" required></textarea>
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
