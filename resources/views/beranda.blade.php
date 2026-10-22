<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="/beranda">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDQWKfJ9qWFW17-zuoZG5VWUPMflTEiqHmOS0oTrR1ow&s=10"
                        alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2">
                    SMKS PGRI WLINGI
                </a>
            </div>
        </nav>
        <div class="container-fluid">
            <a class="navbar-brand" href="/Beranda">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="Profil"
                            aria-expanded="false">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="Akademik"
                            aria-expanded="false">
                            Akademik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="Kesiswaan"
                            aria-expanded="false">
                            Kesiswaan
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="Berita"
                            aria-expanded="false">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <button class="btn btn-link p-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#searchForm" aria-expanded="false" aria-controls="searchForm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button>

                    <div class="collapse ms-2" id="searchForm">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/images1smk.jpg" class="d-block w-100" alt="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>"Pendidikan adalah senjata paling ampuh untuk mengubah dunia." — Nelson Mandela.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/smk2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>"Pendidikan adalah senjata paling ampuh untuk mengubah dunia." — Nelson Mandela.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/hero-sekolah.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>"Pendidikan adalah senjata paling ampuh untuk mengubah dunia." — Nelson Mandela.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">

                <div class="card mt-3 border border-dark">
                    <div class="card-body">
                        <h1>Sambutan Kepala Sekolah</h1>
                        <img src="{{ asset('images/Drs. BAMBANG SETIYONO, ST, M.Pd.jpg') }}"
                            class="img-thumbnail float-start me-3 mb-2" alt="foto" width="300"
                            height="300">
                        <b>
                            <h4>Assalamu’alaikum Warahmatullahi Wabarakatuh,Selamat pagi/siang, dan salam sejahtera bagi
                                kita semua.Shalom, Om Swastyastu, Namo Buddhaya, Salam Kebajikan.</h4>
                        </b>
                        <p>Yang saya hormati Bapak/Ibu Dewan Guru, staf tata usaha, para orang tua/wali murid, serta
                            seluruh peserta didik SMKS PGRI Wlingi yang saya banggakan.Puji syukur marilah kita
                            panjatkan ke hadirat Tuhan Yang Maha Esa, karena atas rahmat dan karunia-Nya kita semua
                            masih diberikan kesehatan dan kekuatan untuk terus berkomitmen memajukan dunia pendidikan,
                            khususnya di SMKS PGRI Wlingi.</p>
                        <p>Sebagai salah satu sekolah kejuruan unggulan, SMKS PGRI Wlingi memikul tanggung jawab besar
                            untuk mencetak generasi muda yang siap kerja, santun, mandiri, dan kreatif. Menghadapi era
                            digitalisasi dan dinamika dunia industri yang berkembang sangat cepat, kami terus berbenah
                            dan berinovasi.</p>
                        <p>Pendidikan yang sukses tidak dapat diraih oleh sekolah sendirian. Kerja sama yang sinergis
                            antara pihak sekolah, orang tua, masyarakat, dan mitra industri adalah kunci utama
                            keberhasilan kita.</p>
                        <p>Kepada seluruh anak-didikku, teruslah belajar dengan tekun, asah keahlianmu, dan jaga nama
                            baik almamater tercinta. Masa depan bangsa ini ada di tangan kalian.</p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-primary">Kegiatan Terbaru</h5>
                            <a href="#" class="text-primary">Lihat Semua Kegiatan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="{{ asset('images/diesnatalis.jpg') }}" class="card-img-top"
                                        alt="Kegiatan">
                                    <div class="card-body">
                                        <h6 class="card-title">Kegiatan Diesnatalis Ke 61</h6>
                                        <small class="text-muted"><i class="bi bi-calendar3"></i> 02 September
                                            2026</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="{{ asset('images/maulid nabi.jpg') }}" class="card-img-top"
                                        alt="Kegiatan">
                                    <div class="card-body">
                                        <h6 class="card-title">Kegiatan Maulid Nabi </h6>
                                        <small class="text-muted"><i class="bi bi-calendar3"></i> 04 September
                                            2026</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="{{ asset('images/class meet.jpg') }}" class="card-img-top"
                                        alt="Kegiatan">
                                    <div class="card-body">
                                        <h6 class="card-title">Class meet</h6>
                                        <small class="text-muted"><i class="bi bi-calendar3"></i> 17 Desember
                                            2025</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="{{ asset('images/hari pramuka.jpg') }}" class="card-img-top"
                                        alt="Kegiatan">
                                    <div class="card-body">
                                        <h6 class="card-title">Hari Pramuka</h6>
                                        <small class="text-muted"><i class="bi bi-calendar3"></i> 14 Agustus
                                            2026</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- ================= KOLOM KANAN ================= -->
            <!-- PENGUMUMAN -->

        <div class="col-md-3">
        <div class="list-group mt-3">
                    <!-- Judul Pengumuman -->
                <button type="button" class="list-group-item list-group-item-action active">
                <button type="button" class="list-group-item list-group-item-action active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                            <path
                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06" />
                        </svg>
                        Pengumuman Terbaru
                        </button>
                        </button>

                    </div>

                    <!-- Isi Pengumuman -->
                    <div class="list-group list-group-flush">

                        <a href="https://memorandum.disway.id/blitar/read/166810/polres-blitar-sosialisasikan-pemanfaatan-ai-dengan-bijak-kepada-pelajar-smk-pgri-wlingi"
                            class="list-group-item list-group-item-action">

                            <div class="d-flex align-items-center">

                                <!-- Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>

                                <!-- Isi -->
                                <div class="flex-grow-1">
                                    <div class="fw-semibold">
                                        Sosialisasi Penggunaan AI Dengan Bijak
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                    14 Agustus 2026
                                </div>

                                <!-- Panah -->
                                <span>›</span>

                            </div>
                        </a>


                        <a href="https://blitarkawentar.jawapos.com/pendidikan/2511040017/smk-pgri-wlingi-blitar-raih-kepercayaan-pt-united-tractors-jakarta-jadi-lokasi-seleksi-calon-siswa-ut-school-area-jawa-timur"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>

                                <div class="flex-grow-1">
                                    <div class="fw-semibold">
                                        Piagam Berhasil Kepercayaan PT United Tractors Jakarta
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                22 Oktober 2026
                                </div>

                                <span>›</span>

                            </div>
                        </a>


                        <a href="https://www.kompasiana.com/paiskemenagkabblitar0213/6971917bc925c46cfc09d393/tips-mempelajari-manasik-haji-ala-kasi-pais-kemenag-kabupaten-blitar#goog_rewarded"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>

                                <div class="flex-grow-1">
                                    <div class="fw-semibold">
                                        Tips Mempelajari Manasik Haji Kemenangan
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                    22 Januari 2026
                                </div>

                                <span>›</span>

                            </div>
                        </a>


                        <a href="https://bacamalang.com/yonif-para-raider-502-uy-dan-smk-pgri-wlingi-kolaborasi-bentuk-karakter-nasionalisme-siswa/"
                            class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                </svg>

                                <div class="flex-grow-1">
                                    <div class="fw-semibold">
                                        Kegiatan Bela Negara Kolaborasi Yonif 502 Malang
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                    10 Agustus 2024
                                </div>

                                <span>›</span>

                            </div>
                        </a>


                    </div>

                    <!-- Tombol -->
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary">
                            Lihat Semua Pengumuman →
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
    </div>
    </button>
    </nav>


    <footer class="bg-secondary text-white mt-3">
        <div class="container-fluid">
            <div class="row align-items-center py-3">


                <div class="col-md-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-fill fs-2 me-3"></i>
                        <div>
                            <h6 class="mb-0">SMKS PGRI WLINGI</h6>
                            <small> SMK </small>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 text-center border-start border-end">
                    <i class="bi bi-code-slash fs-3"></i>
                    <small class="d-block">Website ini dikembangkan oleh</small>
                    <strong>YEVANDA MARISA</strong>
                    <small class="d-block"></small>
                </div>

                <div class="col-md-4 text-center">
                    <i class="bi bi-info-circle fs-4"></i>
                    <small class="d-block">©2026 SMKS PGRI WLINGI. All rights reserved.</small>
                    <small>Powered by Klinik Komputer dan Audio HAMMER</small>
                </div>

            </div>
        </div>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
