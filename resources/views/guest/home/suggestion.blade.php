@extends('guest.layouts.app')
@section('content')
    <!-- ======= Search Results ======= -->
    <section id="search-result" class="search-result">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="category-title">Saran</h3>

                    @foreach ($suggestions as $item)
                        <div class="d-md-flex post-entry-2 small-img border-bottom">
                            <div>
                                <div class="post-meta"><span class="date">{{ $item->name }}</span> <span
                                        class="mx-1">&bullet;</span> <span>{{ $item->created_at }}</span></div>
                                <p><a href="{{ route('guest.showSaran', $item->id) }}">{{ $item->suggestion }}</a></p>
                            </div>
                        </div>
                    @endforeach

                    <!-- Paging -->
                    <div class="text-start py-4">
                        {{ $suggestions->links() }}
                    </div><!-- End Paging -->

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
    </section> <!-- End Search Result -->
@endsection
