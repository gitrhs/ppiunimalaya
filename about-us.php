<!doctype html>
<html lang="id">

<head>
    <?php
    //header
    include 'core/header.html';
    ?>
    <link rel="stylesheet" href="css/about-us.css?3">
</head>

<body>
    <?php
    //navbar / menu
    include 'core/navbar.html';
    ?>
    <!-- Main content -->
    <div class="text-center who-are-we" style="margin-top: -7em">
        <h1 class="title">
            Who are We?
        </h1>
        <p>
            PPI-UM adalah organisasi yang menghimpun pelajar Indonesia di Universiti Malaya yang berwawasan kebangsaan, bercirikan keilmuan, berkebudayaan, bebas, mandiri, sosial, dan kekeluargaan.

            Kami bertujuan untuk menyalurkan aspirasi, memberikan kontribusi dalam menyelesaikan permasalahan bangsa Indonesia, meningkatkan mutu ilmu pengetahuan dan keterampilan pelajar Indonesia, serta membantu menyelesaikan permasalahan pelajar Indonesia di Universiti Malaya, sekaligus membangun hubungan baik dan kerjasama dengan masyarakat Indonesia, terutama di Malaysia.
        </p>
    </div>
    <div class="vision-mission">
        <div class="vision-title">
            <h1 class="title">
                Our Vision
            </h1>
        </div>
        <div class="vision-description">
            <div id="vision">
                <h1 class="title">
                    Mewujudkan lingkungan PPI Universiti Malaya yang lebih terintegrasi untuk menciptakan inovasi dalam segi pengembangan diri dan organisasi dengan menjunjung asas kekeluargaan.
                </h1>
            </div>
        </div>
    </div>
    <div class="vision-mission">
        <div class="vision-title">
            <h1 class="title">
                Our Mission
            </h1>
        </div>
        <div class="vision-description">
            <div class="d-flex flex-column gap-lg-5 vision-description-inside">
                <h1 class="title">
                    Menerapkan sistem kerja yang komunikatif sehingga Kepengurusan PPI Universiti Malaya menjadi organisasi yang kolaboratif.
                </h1>
            </div>
            <div class="d-flex flex-column gap-lg-5 vision-description-inside">
                <h1 class="title">
                    Mengembangkan wadah minat dan bakat anggota PPI-UM sehingga terbentuk pengembangan SDM yang kreatif dan inovatif.
                </h1>
            </div>
            <div class="d-flex flex-column gap-lg-5 vision-description-inside">
                <h1 class="title">
                    Menciptakan fasilitas yang dapat membantu anggota PPI-UM mengatasi permasalahan terkait masa studi di Universiti Malaya dengan sistem yang terintegrasi.
                </h1>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="SO-container">
            <div class="SO-slide-container">
                <img src="/img/PPI.png">
                <img src="https://ppiunimalaya.id/wp-content/uploads/2020/05/IMG_5340-3-scaled.jpg">
                <img src="https://ppiunimalaya.id/wp-content/uploads/2020/08/IMG_1569-1-scaled.jpg">
                <img src="https://ppiunimalaya.id/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-02-at-1.47.28-PM.jpeg">
                <img src="https://ppiunimalaya.id/wp-content/uploads/2020/08/DSCF8849-scaled.jpg">
            </div>
        </div>
    </div>
    <!-- -->

    <!-- Main content end -->
    <!-- JS -->
    <script src="js/main.js?3"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        var copy = document.querySelector(".SO-slide-container").cloneNode(true);
        document.querySelector(".SO-container").appendChild(copy);
    </script>
    <!-- JS end -->

    <?php
    //footer
    include 'core/footer.html';
    ?>
</body>

</html>