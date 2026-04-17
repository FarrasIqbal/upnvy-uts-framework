<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Carousel -->
<section class="hero-section p-0">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?= base_url('images/banner.png') ?>" class="d-block w-100" alt="Banner Akreditasi Unggul UPN">
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('images/banner.png') ?>" class="d-block w-100" alt="Banner Kedua">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- Berita -->
<section class="container mt-5 pt-4 mb-5">

    <div class="section-title mb-4">
        <h4 class="fw-bold mb-2 text-dark" style="letter-spacing: 1px;">RILIS BERITA</h4>
        <div class="d-flex">
            <div class="bg-success" style="width: 30px; height: 3px;"></div>
            <div class="bg-secondary opacity-50 ms-1" style="width: 15px; height: 3px;"></div>
        </div>
    </div>

    <?php if (!empty($berita)) : ?>

        <?php $beritaUtama = $berita[0]; ?>
        <div class="row mb-5 pb-3">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <a href="<?= base_url('berita/' . $beritaUtama['slug']) ?>">
                    <img src="<?= base_url('assets/img/berita/' . $beritaUtama['gambar']) ?>" class="img-fluid w-100 shadow-sm" style="object-fit: cover; height: 320px;" alt="<?= esc($beritaUtama['judul']) ?>">
                </a>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pe-lg-4">
                <a href="<?= base_url('berita/' . $beritaUtama['slug']) ?>" class="text-decoration-none">
                    <h4 class="fw-bold text-dark hover-success mb-3" style="line-height: 1.4;">
                        <?= esc($beritaUtama['judul']) ?>
                    </h4>
                </a>
                <p class="text-muted small mb-3">
                    <i class="far fa-clock"></i> <?= date('l, d F Y', strtotime($beritaUtama['tanggal'])) ?>
                </p>
                <p class="text-secondary mb-4" style="font-size: 0.95rem; line-height: 1.7; text-align: justify;">
                    <?= esc(substr(strip_tags($beritaUtama['isi_berita']), 0, 220)) ?>...
                </p>
                <div>
                    <a href="<?= base_url('berita/' . $beritaUtama['slug']) ?>" class="text-decoration-none fw-bold text-secondary border-bottom border-secondary pb-1 hover-success" style="font-size: 0.9rem;">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php for ($i = 1; $i < count($berita); $i++) : ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <a href="<?= base_url('berita/' . $berita[$i]['slug']) ?>">
                            <img src="<?= base_url('assets/img/berita/' . $berita[$i]['gambar']) ?>" class="card-img-top rounded-0" style="height: 250px; object-fit: cover;" alt="<?= esc($berita[$i]['judul']) ?>">
                        </a>
                        <div class="card-body px-3 pt-5 pb-5">
                            <a href="<?= base_url('berita/' . $berita[$i]['slug']) ?>" class="text-decoration-none">
                                <h6 class="card-title fw-bold text-dark hover-success mb-3" style="line-height: 1.5;">
                                    <?= esc($berita[$i]['judul']) ?>
                                </h6>
                            </a>
                            <div class="mt-auto">
                                <a href="<?= base_url('berita/' . $berita[$i]['slug']) ?>" class="text-decoration-none text-secondary border-bottom border-secondary pb-1 hover-success" style="font-size: 0.85rem;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>

    <?php else : ?>
        <div class="alert alert-secondary text-center">Belum ada rilis berita saat ini. Silakan tambahkan berita melalui halaman Admin.</div>
    <?php endif; ?>


    <div class="text-center mt-5 mb-2">
        <a href="<?= base_url('semua-berita') ?>" class="btn btn-success text-white fw-bold px-4 py-2" style="background-color: #4CAF50; border: none; font-size: 0.9rem; letter-spacing: 0.5px;">
            BERITA SELENGKAPNYA <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</section>

<!-- TRI DHARMA -->
<section class="container-fluid p-2 my-5">
    <div class="row g-0">

        <div class="col-lg-6">
            <img src="<?= base_url('images/gedung-upn.png') ?>" class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 500px;" alt="Gedung Kampus UPN">
        </div>

        <div class="col-lg-6 px-4 px-md-5 d-flex flex-column justify-content-center">

            <ul class="nav nav-pills d-flex tridharma-tabs mb-4 w-100" id="tridharmaTab" role="tablist">
                <li class="nav-item flex-fill text-center" role="presentation">
                    <button class="nav-link w-100 active" id="pendidikan-tab" data-bs-toggle="pill" data-bs-target="#pendidikan" type="button" role="tab" aria-controls="pendidikan" aria-selected="true">PENDIDIKAN</button>
                </li>
                <li class="nav-item flex-fill text-center mx-2" role="presentation">
                    <button class="nav-link w-100" id="penelitian-tab" data-bs-toggle="pill" data-bs-target="#penelitian" type="button" role="tab" aria-controls="penelitian" aria-selected="false">PENELITIAN</button>
                </li>
                <li class="nav-item flex-fill text-center" role="presentation">
                    <button class="nav-link w-100" id="pengabdian-tab" data-bs-toggle="pill" data-bs-target="#pengabdian" type="button" role="tab" aria-controls="pengabdian" aria-selected="false">PENGABDIAN</button>
                </li>
            </ul>

            <div class="tab-content scrollable-content text-secondary pe-3" id="tridharmaTabContent" style="font-size: 0.95rem; line-height: 1.7; text-align: justify;">

                <div class="tab-pane fade show active" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                    <h5 class="fw-bold text-dark mb-4">PENDIDIKAN</h5>

                    <h6 class="fw-bold text-dark mb-2">Arah Pendidikan</h6>
                    <p>Arah pendidikan UPN "Veteran" Yogyakarta adalah mengembangkan ilmu pengetahuan dan teknologi yang dilandasi oleh nilai-nilai kedisiplinan, kejuangan, kreativitas, keunggulan, kebangsaan, dan kejujuran dalam rangka menunjang pembangunan nasional melalui bidang pendidikan tinggi dalam rangka terciptanya sumber daya manusia yang unggul di era global dengan dilandasi jiwa bela negara.</p>

                    <h6 class="fw-bold text-dark mt-4 mb-2">Tujuan Pendidikan</h6>
                    <p class="mb-1">Pendidikan di UPN "Veteran" Yogyakarta bertujuan untuk:</p>
                    <ol class="ps-3">
                        <li class="mb-2">Menyelenggarakan pendidikan dan pengajaran yang berkualitas guna menghasilkan lulusan berdaya saing global yang memiliki jiwa disiplin, berdaya juang dan, kreatif serta berwawasan kebangsaan dan mampu menjadi komponen pendukung dalam sistem pertahanan negara;</li>
                        <li class="mb-2">Meningkatkan kuantitas dan kualitas penelitian guna:
                            <ol type="a" class="ps-3 mt-1">
                                <li>Menunjang pengembangan mutu pendidikan dan pengajaran;</li>
                                <li>Mengembangkan dan menerapkan ilmu pengetahuan dan teknologi (IPTEK) untuk menunjang pengabdian kepada masyarakat; dan</li>
                                <li>Menghasilkan modal intelektual dan karya ilmiah dalam rangka menunjang pembangunan nasional; dan</li>
                            </ol>
                        </li>
                        <li>Pengembangan kegiatan pengabdian kepada masyarakat melalui:
                            <ol type="a" class="ps-3 mt-1">
                                <li>Penyediaan layanan ilmu pengetahuan dan teknologi (IPTEK) dalam rangka meningkatkan kesejahteraan masyarakat;</li>
                                <li>Peningkatan keberdayaan masyarakat; dan</li>
                                <li>Peningkatan reputasi UPN "Veteran" Yogyakarta.</li>
                            </ol>
                        </li>
                    </ol>

                    <h6 class="fw-bold text-dark mt-4 mb-2">Kurikulum</h6>
                    <p class="mb-1">Dasar Pengembangan kurikulum UPN "Veteran" Yogyakarta adalah:</p>
                    <ol class="ps-3 mb-3">
                        <li>Universitas mengembangkan kerangka dasar dan struktur kurikulum pendidikan tinggi dikembangkan untuk setiap program studi.</li>
                        <li>Pengembangan kurikulum dilakukan dengan berbasis pada KKNI mengacu pada standar nasional pendidikan tinggi dalam rangka mewujudkan tujuan pendidikan nasional.</li>
                    </ol>

                    <p class="mb-1 fw-bold text-dark">Kompetensi Lulusan UPN "Veteran" Yogyakarta adalah:</p>
                    <ol class="ps-3">
                        <li class="mb-1">Kompetensi lulusan wajib mengacu kepada standar kompetensi lulusan.</li>
                        <li class="mb-1">Standar kompetensi lulusan merupakan kriteria minimal tentang kualifikasi kemampuan lulusan yang mencakup sikap, pengetahuan, dan keterampilan yang dinyatakan dalam rumusan capaian pembelajaran lulusan.</li>
                        <li class="mb-1">Rumusan capaian pembelajaran lulusan sebagaimana dimaksud pada ayat (2) wajib:
                            <ol type="a" class="ps-3 mt-1">
                                <li>Mengacu pada diskripsi capaian pembalajaran lulusan KKNI; dan</li>
                                <li>Memiliki kesetaraan dengan jenjang kualifikasi pada KKNI.</li>
                            </ol>
                        </li>
                        <li class="mb-1">Kedalaman dan keluasan materi pembelajaran sebagaimana dimaksud pada ayat (2) mengacu pada capaian pembelajaran lulusan.</li>
                        <li class="mb-1">Kedalaman dan keluasan materi pembelajaran pada program magister dan doktor wajib memanfaatkan hasil penelitian dan hasil pengabdian kepada masyarakat.</li>
                        <li class="mb-1">Tingkat kedalaman dan keluasan materi pembelajaran untuk setiap program pendidikan dirumuskan dengan mengacu pada deskripsi capaian pembelajaran lulusan dari KKNI.</li>
                        <li class="mb-1">Tingkat kedalaman dan keluasan materi pembelajaran adalah sebagai berikut:
                            <ol type="a" class="ps-3 mt-1">
                                <li>Lulusan program diploma tiga paling sedikit menguasai konsep teoritis bidang pengetahuan dan ketrampilan tertentu secara umum;</li>
                                <li>Lulusan sarjana paling sedikit menguasai konsep teoritis bidang pengetahuan dan ketrampilan tertentu secara umum dan konsep teoritis bagian khusus dalam bidang pengetahuan dan ketrampilan tersebut secara mendalam;</li>
                                <li>Lulusan program magister paling sedikit menguasai teori dan aplikasi bidang pengetahuan tertentu; dan</li>
                                <li>Lulusan program doktor paling sedikit menguasaifilosofi keilmuan bidang pengetahuan dan ketrampilan tertentu.</li>
                                <li>Tingkat kedalaman dan keluasan materi pembelajaran bersifat kumulatif dan/atau integratif.</li>
                            </ol>
                        </li>
                        <li class="mb-1">Tingkat kedalaman dan keluasan materi pembelajaran bersifat kumulatif dan/atau integratif.</li>
                        <li>Tingkat kedalaman dan keluasan materi pembelajaran sebagaimana dimaksud pada ayat (7) dituangkan dalam bahan kajian yang distrukturkan dalam bentuk mata kuliah.</li>
                    </ol>
                </div>

                <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                    <h5 class="fw-bold text-dark mb-4">PENELITIAN</h5>

                    <p>Sebagai perguruan tinggi yang didirikan oleh para pejuang dan veteran, UPN "Veteran" Yogyakarta harus mampu mewarisi semangat kejuangan dalam mengatasi berbagai persoalan yang dihadapi masyarakat dan bangsa, termasuk tantangan pengembangan sumber daya iptek untuk meningkatkan daya saing bangsa. Untuk mewujudkannya telah ditetapkan visi, yaitu menjadi perguruan tinggi swasta terdepan dalam pengembangan ilmu pengetahuan dan teknologi yang dilandasi oleh disiplin, kejuangan, dan kreativitas dalam rangka menunjang pembangunan nasional.</p>
                    <p class="mb-2">Riset Unggulan Universitas Pembangunan Nasional "Veteran" Yogyakarta meliputi bidang-bidang sebagai berikut:</p>

                    <h6 class="fw-bold text-dark mt-4 mb-1">Bidang Fokus Pangan</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>1.1. Bioteknologi Modern Untuk Produksi Benih Dan Bibit Unggul Tanaman;</li>
                        <li>1.2. Ketahanan Pangan dan Pertanian;</li>
                        <li>1.3. Kecukupan Gizi Dan Penanggulangan Stunting.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Energi</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>2.1. Bahan Bakar Bersih Berbasis Energi Baru dan Terbarukan Rendah/Tanpa Karbon;</li>
                        <li>2.2. Teknologi Kelistrikan Berbasis Energi Baru dan Terbarukan Rendah/Tanpa Karbon;</li>
                        <li>2.3. Manajemen Energi, Teknologi Efisiensi, Konservasi, dan Energi Cerdas;</li>
                        <li>2.4. Pengembangan Biogas;</li>
                        <li>2.5. Pengembangan Biodiesel dan Bioetanol sebagai Energi Terbarukan;</li>
                        <li>2.6. Pengembangan Energi Panas Bumi.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Kesehatan</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>3.1. Teknologi Produksi Sediaan Obat (Berbasis Bahan Baku Alam) dan Bahan Baku Obat Dalam Negeri Untuk Penguatan Industri Farmasi Nasional;</li>
                        <li>3.2. Manajemen Kesehatan di Masa Pandemi.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Transportasi</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>4.1. Infrastruktur dan Sarana Transportasi Darat, Laut, Dan Udara Untuk Peningkatan Kemampuan, Keselamatan, Kehandalan, Dan Daya Saing;</li>
                        <li>4.2. Manajemen Transportasi.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Rekayasa Keteknikan</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>5.1. Teknologi Penanganan, Pengolahan, dan Pengemasan Untuk Produk Pangan...</li>
                        <li>5.2. Teknologi Informasi dan Komunikasi serta Kebijakan untuk Mendukung Industri 4.0;</li>
                        <li>5.3. Material Maju untuk Kesehatan;</li>
                        <li>5.4. Teknologi Serat, Tekstil dan Produk Tekstil;</li>
                        <li>5.5. Teknologi Mesin untuk Industri;</li>
                        <li>5.6. Pengembangan potensi listrik mikro hidro;</li>
                        <li>5.7. Pengembangan perangkat lunak, rancang bangun dan fabrikasi PLTP;</li>
                        <li>5.8. Pengembangan Fuel Cell dengan penguasaan teknik...</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Hankam dan Bela Negara</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>6.1. Pengembangan wilayah perbatasan;</li>
                        <li>6.2. Pengembangan potensi sumber daya alam untuk penguatan wilayah perbatasan...</li>
                        <li>6.3. Peta permasalahan faktor-faktor pendorong terjadinya diminishing ideologi kebangsaan;</li>
                        <li>6.4. Model deradikalisasi wacana dogma ideologi keagamaan;</li>
                        <li>6.5. Pengembangan model toleransi dalam masyarakat.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Kemaritiman</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>7.1. Teknologi Peningkatan Produksi, Pengolahan, dan Distribusi Produk Garam;</li>
                        <li>7.2. Teknologi Perlindungan dan Pemanfaatan Sumber Daya Maritim.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Sosial Humaniora, Pendidikan, Seni, Dan Budaya</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>8.1. Kebijakan Pendidikan Dan Penyiapan Sumber Daya Manusia Cerdas...</li>
                        <li>8.2. Riset Kebijakan Sistem Politik, Demokrasi Serta Otonomi Daerah dan Desa;</li>
                        <li>8.3. Pengembangan Produktivitas Daerah dan Desa...</li>
                        <li>8.4. Riset Pemajuan Seni, Kebudayaan, dan Bahasa;</li>
                        <li>8.5. Riset Penguatan Peran Dan Kepentingan Indonesia Di Tingkat Regional dan Global;</li>
                        <li>8.6. Riset Penguatan Peran UKM dalam meningkatkan daya saing Bangsa di tingkat Global.</li>
                    </ul>

                    <h6 class="fw-bold text-dark mb-1">Bidang Fokus Multidisiplin Dan Lintas Sektoral</h6>
                    <ul class="list-unstyled ps-2 mb-3">
                        <li>9.1. Teknologi dan Manajemen Bencana, Vulkanik, Tsunami, Gempa Bumi...</li>
                        <li>9.2. Lingkungan, Sumberdaya Air, dan Perubahan Iklim;</li>
                        <li>9.3. Pemberdayaan masyarakat untuk peningkatan ketangguhan sosial-ekonomi-budaya...</li>
                        <li>9.4. Peningkatan sistem informasi kebencanaan untuk peringatan dini...</li>
                        <li>9.5. Penerapan teknologi tepat guna yang efektif dan efisien...</li>
                        <li>9.6. Peningkatan produksi minyak bumi...</li>
                        <li>9.7. Optimalisasi pemanfaatan bahan galian tambang;</li>
                        <li>9.8. Pengelolaan pasca tambang;</li>
                        <li>9.9. Optimalisasi pengembangan wilayah;</li>
                        <li>9.10. Optimalisasi pengelolaan kawasan bentang alam kars;</li>
                        <li>9.11. Optimalisasi pengelolaan daerah lereng gunung, perbukitan dan lereng buatan;</li>
                        <li>9.12. Optimalisasi teknologi penambangan yang berwawasan lingkungan;</li>
                        <li>9.13. Optimalisasi pengelolaan potensi kawasan mineralisasi;</li>
                        <li>9.14. Optimalisasi pengelolaan kawasan potensi batu bara.</li>
                    </ul>
                </div>

                <div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
                    <h5 class="fw-bold text-dark mb-4">PENGABDIAN</h5>

                    <p>UPN "Veteran" Yogyakarta menerapkan paradigma baru dalam kegiatan pengabdian kepada masyarakat yang bersifat problem solving, komprehensif, bermakna, tuntas, dan berkelanjutan (sustainable) dengan sasaran yang tidak tunggal. Hal-hal inilah yang menjadi alasan dikembangkannya program Pengabdian bagi Masyarakat (PbM).</p>

                    <p class="mb-1">Khalayak sasaran program PbM adalah:</p>
                    <ol class="ps-3 mb-3">
                        <li>Masyarakat yang produktif secara ekonomi;</li>
                        <li>Masyarakat yang belum produktif secara ekonomis, tetapi berhasrat kuat menjadi wirausahawan; dan</li>
                        <li>Masyarakat yang tidak produktif secara ekonomi (masyarakat umum/biasa).</li>
                    </ol>

                    <p>Khalayak sasaran (mitra) masyarakat yang produktif secara ekonomi seperti: kelompok perajin, kelompok nelayan, kelompok tani, kelompok ternak, yang setiap anggotanya memiliki karakter produktif secara ekonomis. Mitra sasaran industri rumah tangga (IRT) dengan kepemilikan usaha bersifat individu/perseorangan disyaratkan mempunyai karyawan minimal 4 orang di luar anggota keluarga.</p>

                    <p>Mitra sasaran yang mengarah pada bidang ekonomi produktif disyaratkan merupakan kelompok dengan jumlah anggota minimal 5 orang, seperti kelompok dasawisma, pokdarwis, kelompok PKK, kelompok pengajian, kelompok ibu-ibu rumah tangga dan lain-lain.</p>

                    <p>Mitra sasaran masyarakat yang tidak produktif secara ekonomi misalnya sekolah (PAUD, SD, SMP, SMA/SMK), karang taruna, kelompok ibu-ibu rumah tangga, kelompok anak-anak jalanan, RT/RW, dusun, desa/kelurahan, Puskesmas/Posyandu, Pesantren dan lain sebagainya.</p>

                    <p>Jenis permasalahan yang wajib ditangani dalam program PbM, khususnya masyarakat produktif secara ekonomi atau calon wirausaha baru meliputi bidang produksi, manajemen usaha dan pemasaran. Untuk kegiatan yang tidak bermuara pada bidang ekonomi, wajib mengungkapkan rinci permasalahan yang diprioritaskan untuk diselesaikan seperti peningkatan pelayanan, peningkatan ketentraman masyarakat, memperbaiki/membantu fasilitas layanan dan lain-lain.</p>

                    <p>Kegiatan yang dilaksanakan pada mitra PbM baik mitra produktif secara ekonomi, mengarah ke produktif ekonomi dan mitra tidak produktif/sosial harus terdiri dari 2 bidang kegiatan yang membutuhkan kepakaran yang berbeda.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- PENGUMUMAN -->
<section class="container mt-5 mb-5 pt-4">
    <div class="row">

        <div class="col-lg-8 pe-lg-5 mb-5 mb-lg-0">
            <h5 class="fw-bold text-dark mb-2" style="letter-spacing: 1px;">PENGUMUMAN</h5>
            <div class="bg-success mb-4" style="width: 40px; height: 3px;"></div>

            <?php if (!empty($pengumuman)) : ?>
                <div class="row g-4">

                    <?php foreach ($pengumuman as $p) : ?>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <a href="<?= base_url('pengumuman/' . $p['slug']) ?>">
                                    <img src="<?= base_url('assets/img/pengumuman/' . $p['gambar']) ?>" class="card-img-top rounded-0" alt="<?= esc($p['judul']) ?>" style="height: 180px; object-fit: cover;">
                                </a>
                                <div class="card-body px-2 pt-3 pb-2">
                                    <a href="<?= base_url('pengumuman/' . $p['slug']) ?>" class="text-decoration-none">
                                        <h6 class="card-title fw-bold text-dark hover-success mb-0" style="font-size: 0.95rem; line-height: 1.5;">
                                            <?= esc($p['judul']) ?>
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            <?php else : ?>
                <div class="alert alert-secondary">Belum ada pengumuman saat ini.</div>
            <?php endif; ?>

            <div class="mt-4">
                <a href="<?= base_url('semua-pengumuman') ?>" class="btn btn-success text-white fw-bold px-3 py-2 rounded-0" style="background-color: #4CAF50; border: none; font-size: 0.85rem;">
                    SELENGKAPNYA <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="mt-4">
                <div class="p-3 text-dark fw-bold rounded-1 d-flex align-items-center" style="background-color: #f7a928;">
                    <i class="fas fa-hand-pointer fs-3 me-3"></i>
                    <div>
                        <h6 class="mb-0 fw-bold">INFORMASI PENDAFTARAN MAHASISWA BARU</h6>
                        <a href="https://pmb.upnyk.ac.id" class="text-dark text-decoration-none fw-normal" style="font-size: 0.85rem;">pmb.upnyk.ac.id</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="bg-white p-4 h-100 border shadow-sm">

                <div class="section-title mb-4">
                    <h4 class="fw-bold mb-2 text-dark" style="letter-spacing: 1px;">INFO KAMPUS</h4>
                    <div class="d-flex">
                        <div class="bg-success" style="width: 30px; height: 3px;"></div>
                        <div class="bg-secondary opacity-50 ms-1" style="width: 15px; height: 3px;"></div>
                    </div>
                </div>

                <ul class="list-unstyled mb-4">
                    <li class="border-bottom py-3">
                        <a href="#" class="text-decoration-none text-secondary hover-success" style="font-size: 0.95rem;">Majalah UPN Veteran Yogyakarta 2025</a>
                    </li>
                    <li class="border-bottom py-3">
                        <a href="#" class="text-decoration-none text-secondary hover-success text-uppercase" style="font-size: 0.95rem;">MAJALAH INFO KAMPUS EDISI III/AGUSTUS/2024</a>
                    </li>
                    <li class="border-bottom py-3">
                        <a href="#" class="text-decoration-none text-secondary hover-success text-uppercase" style="font-size: 0.95rem;">MAJALAH INFO KAMPUS EDISI II/MARET/2024</a>
                    </li>
                    <li class="border-bottom py-3">
                        <a href="#" class="text-decoration-none text-secondary hover-success text-uppercase" style="font-size: 0.95rem;">MAJALAH INFO KAMPUS EDISI I/JANUARI/2024</a>
                    </li>
                    <li class="py-3">
                        <a href="#" class="text-decoration-none text-secondary hover-success text-uppercase" style="font-size: 0.95rem;">LAPORAN REKTOR TAHUN 2023</a>
                    </li>
                </ul>

                <a href="<?= base_url('info-kampus') ?>" class="btn text-white fw-bold px-3 py-2 rounded-0" style="background-color: #4CAF50; font-size: 0.85rem;">
                    SELENGKAPNYA <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col">
            <a href="#" class="hover-shadow d-block transition">
                <img src="<?= base_url('images/KepuasaMas.png') ?>" class="img-fluid rounded-0 w-100 border" alt="Survei Layanan Kepuasan Masyarakat">
            </a>
        </div>
        <div class="col">
            <a href="#" class="hover-shadow d-block transition">
                <img src="<?= base_url('images/laporan.png') ?>" class="img-fluid rounded-0 w-100 border" alt="Layanan Aspirasi LAPOR!">
            </a>
        </div>
        <div class="col">
            <a href="images/ppid.png" class="hover-shadow d-block transition">
                <img src="<?= base_url('images/ppid.png') ?>" class="img-fluid rounded-0 w-100 border" alt="PPID UPNYK">
            </a>
        </div>
    </div>
</section>



<?= $this->endSection() ?>