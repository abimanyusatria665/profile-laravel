@extends('layouts.main')

@section('content')
            <div class="container">
            <div class="row mt-5 d-flex">
                <div class="col-lg-6 mt-3 col-sm-12">
                    <div
                        class="card c-3 h-100 border-0 rounded-3"
                        data-aos="fade-right"
                        data-aos-duration="1500"
                    >
                        <div class="card-body" style="color: #6a4659">
                            <h1
                                class="typist"
                                data-typist-repeat="2"
                                data-typist-cursor-show="2"
                                data-typist-sequence="intro"
                            >
                                Hi, I'm Bimbim ganteng.
                            </h1>
                            <h3>Student of wikrama vocational school</h3>
                            <h5>
                                Halo, nama saya Abimanyu Satria Megantara, biasa
                                dipanggil Abimanyu atau Bimbim. Saya saat ini
                                bersekolah di SMK Wikrama Bogor, tepatnya di
                                jurusan PPLG (Pengembangan Perangkat Lunak dan
                                Gim). Saya masih belajar mengenai dunia
                                pemrograman. Saya juga mempunyai sebuah podcast
                                yang bernama "Podcast Rumah Nenek" sebagai
                                sarana saya mencurahkan isi kepala saya, dan
                                saya berharap apa yang saya buat selama ini bisa
                                bermanfaat untuk para pendengar.
                            </h5>

                            <div class="c-5 card p-3 mt-5">
                                <h5 style="color: #f8ecd1">
                                    “if you live according to what others think,
                                    you will never be rich.” ~Seneca
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="col-lg-6 mt-3 col-sm-12 d-flex justify-content-end"
                    data-aos="fade-left"
                    data-aos-duration="1500"
                >
                    <img
                        src="https://bimbim-prof-statis.netlify.app/asset/img/ganteng.jpg"
                        alt=""
                        class="img-fluid rounded-3"
                        width="550px"
                    />
                </div>
            </div>
        </div>

        <!-- skills -->
        <div class="container mt-5" data-aos="fade-up" data-aos-duration="1500">
            <section class="skill rounded-3">
                <div class="container">
                    <!-- title -->
                    <div class="row text-white text-center">
                        <div class="col m-4">
                            <h1 class="display-4">Skills</h1>
                            <div class="underline mb-4"></div>
                        </div>
                    </div>
                    <!-- end of title -->
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <i class="fas fa-cogs fa-5x mb-4"></i>
                            <h3 class="text-white mb-3">Back End</h3>
                            <p class="text-white">PHP, Laravel</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-crop fa-5x mb-4"></i>
                            <h3 class="text-white mb-3">Front End</h3>
                            <p class="text-white">CSS, Bootstrap 5</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-database fa-5x mb-4"></i>
                            <h3 class="text-white mb-3">Databases</h3>
                            <p class="text-white">MySQL</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end of skills -->
@endsection