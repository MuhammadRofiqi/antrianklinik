@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Selamat Datang</h1>
            <h2>DI KLINIK dr. ENDANG</h2>
            <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>

        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Sistem Antrian Online</h3>
                            <p>
                                Ini adalah Sistem Antrian Online KLINIK dr. ENDANG dimana setiap pasien dapat
                                mengambil antrian
                                Sesuai Kreteria terlebih dahulu dari rumah
                            </p>
                            <div class="text-center">
                                <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-plus-medical"></i>
                                        <h4>Non BPJS</h4>
                                        <p>Pasien Non BPJS adalah pasien yang tidak terdaftar dalam program BPJS
                                            dan biasanya membayar sendiri biaya layanan kesehatan. Alur antrian
                                            pasien Non BPJS biasanya lebih sederhana.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-dna"></i>
                                        <h4>BPJS</h4>
                                        <p>BPJS (Badan Penyelenggara Jaminan Sosial) Kesehatan adalah program jaminan
                                             kesehatan dari pemerintah Indonesia. Pasien yang terdaftar dalam BPJS
                                             memiliki akses ke berbagai layanan kesehatan dengan biaya yang sudah
                                             ditanggung oleh BPJS.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bxs-first-aid"></i>
                                        <h4>Darurat</h4>
                                        <p>Pasien Darurat adalah pasien yang memerlukan penanganan medis segera
                                            karena kondisi yang mengancam jiwa atau memerlukan tindakan cepat.
                                            Proses antrian pasien darurat berbeda dengan pasien reguler.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>



            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jalan Panglima Sudirman No. 47</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>klinikdrendang@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 895-1589-0022</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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
@endsection

@include('partials.footer')
