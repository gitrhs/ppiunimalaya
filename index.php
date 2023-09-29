<!doctype html>
<html lang="id">

<head>
    <?php
    //header
    include 'core/header.html';
    ?>
</head>

<body>
    <?php
    //navbar / menu
    include 'core/navbar.html';
    ?>
    <!-- Section 1 - Opening -->
    <div class="container-fluid d-flex bgppi align-items-center justify-content-center" style="min-height: 100vh; margin-top: -7em">
        <div class="section1">
            <div class="d-block d-lg-none text-center">
                <img src="https://ppiunimalaya.id/wp-content/uploads/2020/05/LOGOPPIUM-1.png" width=60% height=100>
            </div>
            <div class="row justify-content-center">
                <div class="d-flex">
                    <div class="text-center">
                        <h1 class="title">PPI UNIVERSITI MALAYA</h1>
                        <a href="/about-us.php"><button type="button" class="btn rounded-pill btn-outline-light aboutbutton">Lebih Lanjut Tentang Kami</button></a>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none text-center">
                <br>
            </div>
        </div>
    </div>
    <!----->

    <div class="d-flex flex-column py-lg-5 mt-5">
        <div class="align-self-center">
            <h1 class="title">Check out our past events!</h1>
        </div>
        <div class="d-flex justify-content-center flex-wrap pt-xxl-5">
            <div class="p-2">
                <div class="image-container">
                    <img src="/img/ab67616d0000b2730c8ac83035e9588e8ad34b90.jpg" alt="Image">
                    <div class="gradient-overlay"></div>
                    <div class="image-text">
                        <h1 class="event-title">IDFEST</h1>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="image-container">
                    <img src="/img/ab67616d0000b2730c8ac83035e9588e8ad34b90.jpg" alt="Image">
                    <div class="gradient-overlay"></div>
                    <div class="image-text">
                        <h1 class="event-title">BONDAY</h1>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="image-container">
                    <img src="/img/ab67616d0000b2730c8ac83035e9588e8ad34b90.jpg" alt="Image">
                    <div class="gradient-overlay"></div>
                    <div class="image-text">
                        <h3 class="event-title">SMTH?</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 - Social Media -->
    <!--- -->
    <div class="container-fluid py-lg-5">
        <div class="text-center">
            <h1 class="title">Sosial Media Kami</h1>
            <div class="d-flex flex-wrap justify-content-center mt-lg-4">
                <div class="p-2">
                    <input type="radio" class="btn-check" name="sosmed" onclick="updatePage()" id="instagram" value="instagram">
                    <label class="btn btn-outline-dark btn-sosmed b rounded-pill" for="instagram">
                        Instagram
                    </label>
                </div>
                <div class="p-2">
                    <input type="radio" class="btn-check" name="sosmed" onclick="updatePage()" id="facebook" value="facebook">
                    <label class="btn btn-outline-dark btn-sosmed btn-filter rounded-pill" for="facebook">
                        Facebook
                    </label>
                </div>
                <div class="p-2">
                    <input type="radio" class="btn-check" name="sosmed" onclick="updatePage()" id="youtube" value="youtube">
                    <label class="btn btn-outline-dark btn-sosmed btn-filter rounded-pill" for="youtube">
                        Youtube
                    </label>
                </div>
                <div class="p-2">
                    <input type="radio" class="btn-check" name="sosmed" onclick="updatePage()" id="spotify" value="spotify">
                    <label class="btn btn-outline-dark btn-sosmed btn-filter rounded-pill" for="spotify">
                        Spotify
                    </label>
                </div>
            </div>
        </div>
        <!-- Social Media - Instagram section -->
        <div id="instagram-div">
            <br>
            <div class="d-flex flex-column justify-content-center align-items-center align-content-center gap-xl-5">
                <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/ppiunimalaya/" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a href="https://www.instagram.com/p/CuwIcHix4u2/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                    <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                    </div>
                                </div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                </div>
                            </a>
                            <!-- <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CuwIcHix4u2/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by 𝐈𝐧𝐬𝐭𝐞𝐥𝐥𝐚𝐫 𝐅𝐞𝐬𝐭 𝟐𝟎𝟐𝟑 •𝐀 𝐜𝐨𝐥𝐨𝐫𝐟𝐮𝐥 𝐜𝐚𝐧𝐯𝐚𝐬 𝐨𝐟 𝐜𝐮𝐥𝐭𝐮𝐫𝐚𝐥 𝐞𝐱𝐩𝐫𝐞𝐬𝐬𝐢𝐨𝐧𝐬• (@instellar.fest)</a></p> -->
                        </div>
                    </blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center content">
                    <h1 style="text-align: center;">
                        Get the <span class="instagram-color">latest update</span> about Universiti Malaya by follow our <span class="instagram-color">Instagram</span> Account, <b>@ppiunimalaya</b>
                    </h1>
                    <button type="button" class="btn btn-outline-light btn-instagram btn-lg"><i class="fa-brands fa-instagram"></i> Instagram</button>
                </div>
            </div>
        </div>
        <!-- Social Media - Facebook section -->
        <div id="facebook-div">
            <br>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v17.0" nonce="ox1dy5R1"></script>
            <div class="d-flex flex-column justify-content-center align-items-center align-content-center gap-xl-5">
                <div class="text-center">
                    <div class="fb-page" data-href="https://www.facebook.com/ppiunimalaya" data-tabs="timeline" data-width=380 data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/ppiunimalaya" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ppiunimalaya">PPI Universiti Malaya</a></blockquote>
                    </div>
                </div>
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center">
                    <h1 style="text-align: center;">
                        Our Facebook Account, <span style="color: #2374e1;"><b>ppiunimalaya</b></span>
                    </h1>
                    <button type="button" class="btn btn-facebook btn-lg"><i class="fa-brands fa-facebook"></i> Facebook</button>
                </div>
            </div>
        </div>
        <!-- Social Media - Youtube section -->
        <div id="youtube-div">
            <div class="d-flex flex-column justify-content-center align-items-center align-content-center gap-xl-5">
                <div class="youtube-background text-center">
                    <iframe id="ytVideo" width=96% style="aspect-ratio: 16/9; margin-top: 15px; border-radius: 10px;" src="https://www.youtube.com/embed/-8AkpaFBYJM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <div class="d-flex justify-content-center">
                        <div class="p-1">
                            <img src="https://i.ytimg.com/vi/-8AkpaFBYJM/hqdefault.jpg" width=90% onclick="ytplayer(this)" value="-8AkpaFBYJM" class="ytplayer active">
                        </div>
                        <div class="p-1">
                            <img src="https://i.ytimg.com/vi/PLIh1biG-Hs/hqdefault.jpg" width=90% onclick="ytplayer((this))" value="PLIh1biG-Hs" class="ytplayer">
                        </div>
                        <div class="p-1">
                            <img src="https://i.ytimg.com/vi/xlrPBezQDY8/hqdefault.jpg" width=90% onclick="ytplayer((this))" value="xlrPBezQDY8" class="ytplayer">
                        </div>
                        <div class="p-1">
                            <img src="https://i.ytimg.com/vi/TgRZqmlTxdc/hqdefault.jpg" width=90% onclick="ytplayer((this))" value="TgRZqmlTxdc" class="ytplayer">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1 style="text-align: center;">
                        Follow our <span style="color: #CD201F;">Youtube</span> to know more about <span style="color: #CD201F;">Universiti Malaya</span>!
                    </h1>
                    <button type="button" class="btn btn-youtube btn-lg"><i class="fa-brands fa-youtube"></i> Youtube</button>
                </div>
            </div>
        </div>
        <!-- Social Media - Spotify section -->
        <div id="spotify-div">
            <div class="d-flex flex-column justify-content-center align-items-center align-content-center gap-xl-5">
                <div class="text-center">
                    <img src="https://ppiunimalaya.id/wp-content/uploads/2022/09/asdhg.png" width=50%>
                </div>
                <div class="col-12 col-lg-5 d-flex flex-column align-items-center justify-content-center">
                    <h1 style="text-align: center;">
                        <span style="color: #61ce70;">Tune</span> in the <span style="color: #61ce70;">Latest Episode</span> of <span style="color: #61ce70;">Podcast</span> <b>Anak Rantau</b>
                    </h1>
                    <span class="horizontal-line"></span>
                    <h5>
                        <span class="badge text-bg-secondary">#PodcastAnakRantau</span>
                        <span class="badge text-bg-secondary">#DariMedkominfo</span>
                    </h5><br>
                    <button type="button" class="btn btn-spotify btn-lg"><i class="fa-brands fa-spotify"></i> Spotify</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Wave -->
    <!-- <svg id="visual" viewBox="0 0 1000 100" style="width: 100%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <rect x="0" y="0" width="1000" height="100" fill="#ffffff"></rect>
            <path d="M0 67L5.3 68.2C10.7 69.3 21.3 71.7 32.2 70.2C43 68.7 54 63.3 64.8 61.5C75.7 59.7 86.3 61.3 97 62.7C107.7 64 118.3 65 129 67.5C139.7 70 150.3 74 161.2 74C172 74 183 70 193.8 68.8C204.7 67.7 215.3 69.3 226 69.7C236.7 70 247.3 69 258 67C268.7 65 279.3 62 290.2 61.8C301 61.7 312 64.3 322.8 65.2C333.7 66 344.3 65 355 66.3C365.7 67.7 376.3 71.3 387 74.2C397.7 77 408.3 79 419.2 79.8C430 80.7 441 80.3 451.8 80.2C462.7 80 473.3 80 484 78.3C494.7 76.7 505.3 73.3 516 69.7C526.7 66 537.3 62 548.2 60.5C559 59 570 60 580.8 62.3C591.7 64.7 602.3 68.3 613 69C623.7 69.7 634.3 67.3 645 65.5C655.7 63.7 666.3 62.3 677.2 63.2C688 64 699 67 709.8 67.3C720.7 67.7 731.3 65.3 742 63.5C752.7 61.7 763.3 60.3 774 60C784.7 59.7 795.3 60.3 806.2 60.3C817 60.3 828 59.7 838.8 62.5C849.7 65.3 860.3 71.7 871 71.8C881.7 72 892.3 66 903 65.8C913.7 65.7 924.3 71.3 935.2 73.2C946 75 957 73 967.8 73C978.7 73 989.3 75 994.7 76L1000 77L1000 101L994.7 101C989.3 101 978.7 101 967.8 101C957 101 946 101 935.2 101C924.3 101 913.7 101 903 101C892.3 101 881.7 101 871 101C860.3 101 849.7 101 838.8 101C828 101 817 101 806.2 101C795.3 101 784.7 101 774 101C763.3 101 752.7 101 742 101C731.3 101 720.7 101 709.8 101C699 101 688 101 677.2 101C666.3 101 655.7 101 645 101C634.3 101 623.7 101 613 101C602.3 101 591.7 101 580.8 101C570 101 559 101 548.2 101C537.3 101 526.7 101 516 101C505.3 101 494.7 101 484 101C473.3 101 462.7 101 451.8 101C441 101 430 101 419.2 101C408.3 101 397.7 101 387 101C376.3 101 365.7 101 355 101C344.3 101 333.7 101 322.8 101C312 101 301 101 290.2 101C279.3 101 268.7 101 258 101C247.3 101 236.7 101 226 101C215.3 101 204.7 101 193.8 101C183 101 172 101 161.2 101C150.3 101 139.7 101 129 101C118.3 101 107.7 101 97 101C86.3 101 75.7 101 64.8 101C54 101 43 101 32.2 101C21.3 101 10.7 101 5.3 101L0 101Z" fill="#6381bc" stroke-linecap="round" stroke-linejoin="miter"></path>
        </svg> -->
    </div>
    <!-- Section 3 - About Us
    <div class="container-fluid text-center text-dark bg-dark bg-opacity-10" style="padding-top: 5rem; padding-bottom: 5rem">
        <h1>Statistik PPI Universiti Malaya</h1>
        <div class="d-flex justify-content-center">
            <div class="p-4">
                <p class="count" value="44">0</p>
                <h5>Pengurus</h5>
            </div>
            <div class="p-4">
                <p class="count" value="199">0</p>
                <h5>Anggota</h5>
            </div>
            <div class="p-4">
                <p class="count" value="499">0</p>
                <h5>Alumni</h5>
            </div>
        </div>
    </div>
    <!-- Transition to footer -->
    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js" integrity="sha512-FRX6MYITclzDyyMmSQLgZoZTfE+GLzAQpjs15adVZMY6AqhsrBLx8UZwp4FoqrrRFWY9TiaPwja7EY5fk309vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS for social media toogle -->
    <script>
        function updatePage() {
            var selectedValue = document.querySelector('input[name="sosmed"]:checked').value;

            // Hide all divs first
            document.getElementById("instagram-div").style.display = "none";
            document.getElementById("facebook-div").style.display = "none";
            document.getElementById("youtube-div").style.display = "none";
            document.getElementById("spotify-div").style.display = "none";

            // Show the relevant div based on the selected value
            switch (selectedValue) {
                case "instagram":
                    document.getElementById("instagram-div").style.display = "block";
                    break;
                case "facebook":
                    document.getElementById("facebook-div").style.display = "block";
                    break;
                case "youtube":
                    document.getElementById("youtube-div").style.display = "block";
                    break;
                case "spotify":
                    document.getElementById("spotify-div").style.display = "block";
                    break;
                default:
                    // Handle the case when the value is not one of the specified options
                    break;
            }
        }

        function ytplayer(element) {
            // Remove 'active' class from all images with the class 'ytplayer'
            $('.ytplayer').removeClass('active');

            // Add 'active' class to the clicked image
            $(element).addClass('active');

            var videoId = $(element).attr('value');

            // Update the iframe src attribute with the new video ID
            $('#ytVideo').attr('src', 'https://www.youtube.com/embed/' + videoId);
        }

        //counting from 0 to value
        function startCountAnimation(element, targetValue) {
            const duration = 2000; // 2 seconds
            const frameDuration = 1000 / 60;
            const totalFrames = Math.round(duration / frameDuration);
            let frame = 0;

            const increment = targetValue / totalFrames;

            const animation = setInterval(() => {
                frame++;
                const currentCount = increment * frame;
                element.textContent = Math.round(currentCount);

                if (frame === totalFrames) {
                    clearInterval(animation);
                    element.textContent = targetValue;
                }
            }, frameDuration);
        }

        $(document).ready(function() {
            $('.count').viewportChecker({
                classToAdd: 'visible',
                offset: 100,
                repeat: false,
                callbackFunction: function(elem, action) {
                    const countElements = document.querySelectorAll(".count");
                    countElements.forEach((element) => {
                        const targetValue = parseInt(element.getAttribute("value"));
                        startCountAnimation(element, targetValue);
                    });
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- JS end -->


</body>
<?php
//footer
include 'core/footer.html';
?>

</html>