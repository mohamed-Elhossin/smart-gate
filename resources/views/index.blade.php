<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Smare Gate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/p1.png" rel="icon">
    <link href="assets/img/p1.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Lobster&display=swap" rel="stylesheet">

    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Lobster&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html" class="btn btn-warning btn-sm"> تسجيل الدخول </a>
                <a href="index.html" class="btn btn-outline-info btn-sm"> عضو جديد</a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">اتصل بنا</a></li>
                    <li><a class="nav-link scrollto" href="#about">من نحن</a></li>
                    <li><a class="nav-link scrollto" href="#services">الندوات</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">قطاعتنا</a></li>
                    <li><a class="nav-link scrollto" href="#team">خداماتنا</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">الاخبار</a></li>
                    <li><a class="nav-link scrollto" href="#hero">الرئيسيه</a></li>
                    <li><a class="nav-link  " href="#about">
                            <img src="./assets/img/p1.png" style="width: 50px;" alt="">
                        </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">

                <div class="col-lg-4  hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/p4.png" class="img-fluid  animated" alt="">
                </div>
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <img style="width: 20px;" src="./assets/img/circle-orange-small.svg" class="small-imgs">
                    <div class="small-imgs m-5 ">
                        <img style="width: 80px;" src="./assets/img/Group 40.svg" alt="">
                    </div>
                    <h1 data-aos="fade-up">SMART <span style="color: #3485B9;"> GATE </span> </h1>
                    <p data-aos="fade-up" data-aos-delay="400">
                        الأفكار المبدعه والمبتكرة هي طريقنا لبناء علاقتنا مع العميل كفريق عمل واحد بداية من العمل سوياً
                        ثم التشغيل
                        والإدارة نعمل معا ننجح معا - وذلك عن طريق تقديم المنتجات والخدمات ذات الجوده العالية في مجال
                        تكنولوجيا
                        المعلومات لتطوير البرامج والبنية التحتية اللازمة من أجهزة وشبكات وبرمجيات لتطوير الأداء لدي
                        العملاء
                    </p>

                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn btn-warning scrollto ">
                            <i class="bx bx-left-arrow-alt"></i> تعرف علينا</a>
                    </div>

                    <img style="width: 100px;" class="small-imgs" src="./assets/img/line-blue.svg" alt="">

                </div>

            </div>
        </div>
        <img class="circle" src="./assets/img/circle-orange-large.svg" alt="">
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= news Us Section ======= -->
        <section id="news">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>اخر الاخبار</h2>
                </div>

                <div class="row owl-carousel owl-theme">
                    @if (isset($allData))
                        @foreach ($allData[0] as $data)
                            <div class="card newItem">

                                <img src="{{ $data->imgUrl }}" height="300" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">
                                        {{ $data->created_at }}
                                        <i class="bx bx-calendar-edit"></i>
                                    </p>
                                    <p class="card-text">{{ $data->news }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </section>


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>الخدمات</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

                            <img class="imgIcone" src="./assets/img/i1.png" alt="">

                            <h4 class="title"><a href="">انشاء التطبيقات</a></h4>
                            <p class="description">
                                نحن قادرون علي بناء مشاريع وتطبيقات برمجية لإدارة مشاريعك من خلال فريق متخصص والعمل
                                بكفاءة عالية
                                والأهتمام بجودة المنتج
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img class="imgIcone" src="./assets/img/i2.png" alt="">
                            <h4 class="title"><a href="">تصميم المواقع</a></h4>
                            <p class="description">إنشاء وتصميم المواقع بالشكل الذي يتناسب مع هويتك واهدافك بشكل
                                احترافي لتحسين الشكل
                                العام وقابلية المستخدم لدي موقعك</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img class="imgIcone" src="./assets/img/i3.png" alt="">
                            <h4 class="title"><a href=""> تطوير المواقع</a></h4>
                            <p class="description">نعمل علي تحليل البيانات وبناءها والعمل علي إنشاء نظام برمجي يناسب
                                حاجتك وإدارة
                                مشروعك بشكل تفاعلي تمهيداً لإنطلاقة الي السوق</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <img class="imgIcone" src="./assets/img/i4.png" alt="">
                            <h4 class="title"><a href="">تطبيقات الموبيل</a></h4>
                            <p class="description">نظراً لأهمية تطبيقات الموبايل وكثرة عدد مستخدميها بشكل لا غني عنه
                                الآن نهتم بالعمل
                                عليها دائماً بكافة التقنيات والأنظمة بمختلف أنواعها</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <img src="./assets/img/c1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <img src="./assets/img/c2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <img src="./assets/img/c3.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Features Section -->

        <section id="news">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2> الندوات</h2>
                </div>
                <div class="row  owl-carousel owl-theme">
                    @if (isset($allData))
                        @foreach ($allData[1] as $data)
                            <div class="card newItem">
                                <img src="{{ $data->imgUrl }}" height="300" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">
                                        {{ $data->created_at }}
                                        <i class="bx bx-calendar-edit"></i>
                                    </p>
                                    <p class="font-weight-bold card-text">{{ $data->title }}</p>

                                    <button class="btn btn-warning " data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="bx  bx-left-arrow-alt"></i> التسجيل الأن </button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="myModel modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="./assets/img/g1.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-6">
                                <h5>التسجيل في الندوة</h5>
                                <p>من فضلك قم بإدخال البيانات المطلوبة منك وسوف يتم إرسال تفاصيل الندوة لك وموعدها علي
                                    بريدك الإلكتروني
                                    ورقم تذكرة الحضور الخاصة بك</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route("student.store") }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="userName" class="form-control"
                                            id="exampleFormControlInput1" placeholder="الاسم بالكامل">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="phone" class="form-control"
                                            id="exampleFormControlInput1" placeholder="رقم الهاتف">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control"
                                            id="exampleFormControlInput1" placeholder="بريدك الالكتروني">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class=" btn btn-warning">تسجيل الان</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section id="" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>عملائنا المميزون</h2>
                </div>
                <div class="conatiner">
                    <div class="row">
                        <div class="mt-3 col-xl-3 col-lg-4 col-md-6">
                            <img src="./assets/img/s1.png" style="box-shadow: 10px 10px 10px gray;"
                                class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 col-xl-3 col-lg-4 col-md-6">
                            <img src="./assets/img/s1.png" style="box-shadow: 10px 10px 10px gray;"
                                class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 col-xl-3 col-lg-4 col-md-6">
                            <img src="./assets/img/s1.png" style="box-shadow: 10px 10px 10px gray;"
                                class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 col-xl-3 col-lg-4 col-md-6">
                            <img src="./assets/img/s1.png" style="box-shadow: 10px 10px 10px gray;"
                                class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>تواصل معنا</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27626.697295211234!2d31.239280824885526!3d30.05586859018267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840e059d98225%3A0x91cb6f582e8b215c!2z2KfZhNiy2YXYp9mE2YPYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1645303363792!5m2!1sar!2seg"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <label for="">أسمك أو أسم المؤسسة</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder=".. اكتب الاسم هنا" required>
                            </div>
                            <div class="form-group">
                                <label for="">اختار الخدمة التي تريدها</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="اختر الخدمة" required>
                            </div>
                            <div class="form-group"> <label for="">رقم الهاتف</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="010222411***" required>
                            </div>
                            <div class="form-group"> <label for="">البريد الإلكتروني</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="name@gmail.com" required>
                            </div>
                            <div class="form-group"> <label for="">اترك رسالة لنا</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="ضع رسالتك هنا" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex  align-items-center">
                <div class="col-lg-3 text-lg-left text-center">
                    <img class="img-fluid" width="90" src="./assets/img/p2.png" alt="">
                    <p class="mt-5">
                        عماره رقم 0 شارع حسن افلاطون
                        <br>
                        ارض الجولف-مدينه نصر
                    </p>
                </div>
                <div class="col-lg-3 text-lg-left text-center">
                    <ul>

                        <li>الرئيسيه</li>
                        <li>خداماتنا</li>
                        <li>قطاعتنا</li>
                        <li>من نحن</li>
                        <li>الندوات </li>
                    </ul>
                </div>
                <div class="col-lg-3 text-lg-left text-center">
                    <ul>
                        <p> تواصل ماعنا </p>
                        <li><i class='bx bx-mobile'></i> 01069673344 </li>
                        <li><i class='bx bx-phone'></i>0224199056</li>
                        <li><i class='bx bx-folder-minus'></i>info@smart-gate.net </li>
                    </ul>
                </div>
                <div class="col-lg-3" style="font-size: 25px; ">
                    <p> تواصل ماعنا </p>
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto"><i class='bx bxl-facebook'></i></a>
                        <a href="#about" class="scrollto"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="#"><i class='bx bxl-messenger'></i></a>
                        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                            <div class="input-group-prepend">
                                <button class="btn btn-warning btn-lg input-group-text" id="inputGroup-sizing-default">
                                    اشترك الآن
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="copyright">
                &copy; Copyright <strong>Smart Gate</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="">Mohamed El-hossiny</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
