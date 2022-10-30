<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ZenBlog Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/guest') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('/guest') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/guest') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/guest') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/guest') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('/guest') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/guest') }}/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{ asset('/guest') }}/assets/css/variables.css" rel="stylesheet">
    <link href="{{ asset('/guest') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('guest.layouts.nav');
    <!-- End Header -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About ZenBlog</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem
                            deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae
                            officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                        <p><a href="about.html" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="index.html"><i class="bi bi-chevron-right"></i> Blog</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Categories</a></li>
                            <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Single Post</a></li>
                            <li><a href="about.html"><i class="bi bi-chevron-right"></i> About us</a></li>
                            <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Categories</h3>
                        <ul class="footer-links list-unstyled">
                            @foreach ($kategori as $item)
                                <li><a href="#"><i class="bi bi-chevron-right"></i> {{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Recent Posts</h3>

                        <ul class="footer-links footer-blog-entry list-unstyled">
                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="{{ asset('/guest') }}/assets/img/post-sq-1.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>5 Great Startup Tips for Female Founders</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="{{ asset('/guest') }}/assets/img/post-sq-2.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>What is the son of Football Coach John Gruden, Deuce Gruden doing
                                            Now?</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="{{ asset('/guest') }}/assets/img/post-sq-3.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="single-post.html" class="d-flex align-items-center">
                                    <img src="{{ asset('/guest') }}/assets/img/post-sq-4.jpg" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
                        </div>

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/guest') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/guest') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/guest') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/guest') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('/guest') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/guest') }}/assets/js/main.js"></script>

</body>

</html>
