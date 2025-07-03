<style>
/* Gaya slider */
#capaianSplide {
    max-height: 330px;
    overflow: hidden;
    margin-top: 30px;
    margin-bottom: 30px;
}

#capaianSplide .splide__track {
    height: auto !important;
    overflow: hidden !important;
}

#capaianSplide .splide__slide {
    min-width: 220px !important;
    max-width: 220px !important;
    display: flex;
    justify-content: center;
}

#capaianSplide .card {
    width: 200px;
    height: 100%;
    max-height: 300px;
    border-radius: 10px;
    overflow: hidden;
}

#capaianSplide .card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
}

/* Responsive adjustment */
@media (max-width: 768px) {
    #capaianSplide .splide__slide {
        min-width: 180px !important;
        max-width: 180px !important;
    }

    #capaianSplide {
        max-height: 300px;
    }
}

/* Section spacing enhancement */
section {
    padding-top: 4rem;
    padding-bottom: 4rem;
}

section h3 {
    margin-bottom: 1rem;
}

section h5 {
    margin-bottom: 2rem;
}

.container {
    padding-left: 15px;
    padding-right: 15px;
}

</style>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
include 'layout/header.php';
include 'layout/navbar.php';
?>

<!-- Masthead -->
<section class="masthead">
    <div class="container">
        <div class="masthead-subheading">Selamat datang di</div>
        <div class="masthead-heading text-uppercase">RUMAH QURAN INSAN TODA</div>
    </div>
</section>

<!-- Profil Sekolah -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-7 mb-4">
            <h1 class="mb-3">RUMAH QUR'AN INSAN TODA</h1>
            <h4 class="mb-4">Menjadi Sekolah yang menyenangkan bagi siswa</h4>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            <a href="<?= site_url('form') ?>" class="btn btn-dark">DAFTAR SEKARANG</a>
        </div>
        <div class="col-lg-5 mb-4">
            <img src="<?= base_url('uploads/imgsan.jpg') ?>" class="d-block w-100 rounded" alt="...">
        </div>
    </div>
</div>


<!-- Capaian -->
<?php if (!empty($menu_status['capaian'])): ?>
<section class="py-5 bg-light" id="hafalan">
    <div class="container text-center">
        <h3 class="text-uppercase">Capaian Hafalan</h3>
        <h5 class="text-muted mb-5">Selama belajar di Rumah Quran Insan Toda</h5>

        <?php if (!empty($capaian)) : ?>
            <div id="capaianSplide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($capaian as $item): ?>
                            <li class="splide__slide">
                                <div class="card border-0 shadow-sm text-center">
                                    <?php if (!empty($item->image)): ?>
                                        <img src="<?= base_url('uploads/capaian/' . htmlspecialchars($item->image)) ?>"
                                            style="height: 180px; object-fit: cover; width: 100%;">
                                    <?php endif; ?>
                                    <div class="card-body p-2">
                                        <h6 class="card-title text-uppercase mb-1"><?= htmlspecialchars($item->name ?? '-') ?></h6>
                                        <p class="card-text text-muted mb-0"><?= htmlspecialchars($item->achievement ?? '-') ?></p>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <p class="text-center text-muted">Belum ada capaian ditampilkan.</p>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>

<!-- Galeri dan Agenda -->
<?php if (!empty($menu_status['gallery']) || !empty($menu_status['agenda'])): ?>
<section class="py-5 bg-light" id="galeri">
    <div class="container">
        <div class="row">

            <?php if (!empty($menu_status['gallery'])): ?>
            <div class="col-lg-6 mb-4">
                <div class="bg-dark text-white rounded shadow p-4 h-100">
                    <h5 class="text-uppercase mb-4">Gallery Sekolah</h5>
                    <?php if (!empty($gallery)) : ?>
                        <div id="carouselGaleri" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($gallery as $index => $item): ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <img src="<?= base_url('uploads/galeri/' . htmlspecialchars($item->image)); ?>"
                                            class="d-block w-100 rounded"
                                            style="height: 400px; object-fit: cover;"
                                            alt="<?= htmlspecialchars($item->event); ?>">
                                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded px-3 py-2">
                                            <h5><?= htmlspecialchars($item->event); ?></h5>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselGaleri" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselGaleri" role="button" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    <?php else: ?>
                        <p class="text-center text-muted">Tidak ada gambar di galeri.</p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($menu_status['agenda'])): ?>
            <div class="col-lg-6 mb-4">
                <h5 class="text-uppercase mb-4">Kegiatan Sekolah</h5>
                <?php if (!empty($agenda)) : ?>
                    <?php foreach (array_slice($agenda, 0, 4) as $event): ?>
                        <div class="media mb-4 pb-2 border-bottom">
                            <img src="<?= base_url('uploads/agenda/' . htmlspecialchars($event->image ?? 'default.jpg')); ?>"
                                class="mr-3 rounded"
                                alt="<?= htmlspecialchars($event->title); ?>"
                                style="width: 80px; height: 80px; object-fit: cover;">
                            <div class="media-body">
                                <h6 class="mt-0"><?= htmlspecialchars($event->title); ?></h6>
                                <small class="text-muted"><?= htmlspecialchars($event->date); ?></small>
                                <p class="mb-0"><?= nl2br(htmlspecialchars($event->descript)); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">Belum ada kegiatan sekolah.</p>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php endif; ?>

<!-- CTA Pendaftaran -->
<section class="py-5 bg-success text-white text-center">
    <div class="container">
        <h3 class="mb-3">Segera Daftar!</h3>
        <p>Penerimaan Peserta Didik Baru Rumah Qur'an Insan Toda</p>
        <a href="https://wa.me/6283819937178" target="_blank" class="btn btn-outline-light me-2">Info WhatsApp</a>
        <a href="<?= site_url('form') ?>" class="btn btn-outline-light">Daftar Sekarang</a>
    </div>
</section>

<!-- Maps -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <iframe class="w-100 rounded shadow-sm" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2894251935327!2d106.78210200000001!3d-6.610915200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c250150173%3A0x3f6474c67e648216!2sSMKIT%20Insan%20Toda!5e0!3m2!1sen!2sid!4v1748321097561!5m2!1sen!2sid">
                </iframe>
            </div>
            <div class="col-lg-6 mb-4" id="profil">
                <div class="col-lg-15 mb-4">
                    <img src="<?= base_url('uploads/sampul 1.jpg') ?>" class="d-block w-100 rounded" alt="...">
                    <h2 class="fw-bold mt-3 text-center">RUMAH QUR'AN INSAN TODA</h2>
                    <p class="text-muted mb-">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <a href="https://wa.me/6283819937178" class="btn btn-dark"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://instagram.com/rq.insantoda" class="btn btn-dark"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-dark text-white py-3 border-top border-secondary">
    <div class="container">
        <div class="d-lg-flex justify-content-between">
            <div class="mb-2 mb-lg-0">Rumah Qur'an Insan Toda &copy; 2025</div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#capaianSplide', {
            type: 'loop',
            autoWidth: true,
            gap: '0.2rem',
            pagination: false,
            arrows: false,
            autoScroll: {
                speed: 0.5,
            }
        }).mount(window.splide.Extensions);
    });
</script>
