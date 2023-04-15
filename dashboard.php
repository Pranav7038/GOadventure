<?php
session_start();
if (!isset($_SESSION['username'])) {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>GOadventure</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5 py-xl-5">
        <section class="py-5 py-xl-4">
            <div class="container">
                <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="background: linear-gradient(rgba(0,123,255,0.2), rgba(0,123,255,0.2)), url(images/t1.jpg) center / cover;height: 500px;">
                    <div class="row">
                        <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                            <div>
                                <h1 class="text-uppercase fw-bold mb-3"><span style="color: rgb(218, 223, 228);">UP TO
                                        50% OFF </span><span style="font-weight: normal !important; color: rgb(218, 223, 228);">ADVENTURE
                                        TRAVEL</span></h1>
                                <p class="mb-4"><strong><span style="color: rgb(255, 255, 255);">Get
                                            exclusive
                                            access to
                                            members only deals on amazing adventure holidays by email
                                            -it&#39;s
                                            free</span></strong></p>
                                <a href="Book_trip.php" class="btn btn-primary btn-lg">BOOK TRIPS</a>
                                <a href="Trip_view.php" class="btn btn-primary btn-lg">VIEW TRIP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="simple-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2><strong><span style="color: rgb(18, 39, 190); background-color: rgb(255, 255, 255);">Recents
                            Deals</span></strong></h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="padding-left: 0px;margin-left: -13px;margin-right: -38px;padding-right: 0px;">
            <div class="col-lg-4 offset-lg-0">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="images/t1.jpg" width="468" height="200" />
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Article</p>
                        <h4 class="card-title">Balli</h4>
                        <p class="card-text">Bali is a true treasure trove of natural beauty. The Indonesian
                            island has
                            a mixed bag of natural wonders, from dense jungles and food-laden forests, to
                            active
                            volcanoes, picture perfect rice fields, and mountains swarming with an exotic
                            array
                            of
                            tropical plants.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="images/samarth.jpg" />
                            <div>
                                <p class="fw-bold mb-0">Samarth kharade</p>
                                <p class="text-muted mb-0">Travel agent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="images/t4.jpg" />
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Article</p>
                        <h4 class="card-title">Kashi, India</h4>
                        <p class="card-text">The land of Varanasi (Kashi) has been the ultimate pilgrimage
                            spot
                            for
                            Hindus for ages. Hindus believe that one who is graced to die on the land of
                            Varanasi would
                            attain salvation and freedom from the cycle of birth and re-birth. Abode of Lord
                            Shiva and
                            Parvati, the origins of Varanasi are yet unknown.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="images/swarali.jpg" />
                            <div>
                                <p class="fw-bold mb-0">Swarali kulkarni</p>
                                <p class="text-muted mb-0">Travel agent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="images/t3.jpg" />
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Article</p>
                        <h4 class="card-title">Venice, los angeles</h4>
                        <p class="card-text">The area is great for people watching as well as shopping and
                            eating. There
                            are various eateries along Ocean Front Walk. For those who are more inclined to
                            actual beach
                            activities, swimming, beach volleyball, fishing, and surfing are popular at this
                            beach. </p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="images/vijay.jpg" />
                            <div>
                                <p class="fw-bold mb-0">Vijay misal</p>
                                <p class="text-muted mb-0">Travel agent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 500px;background-image: url(images/Vasota.jpg);background-position: center;background-size: cover;padding-top: 19px;padding-bottom: 0px;margin-bottom: 16px;">
        </div>
        <section class="py-4 py-xl-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Popular Destinations</h2>
                        <p class="fs-5 text-white"><br /><strong><span style="color: rgb(33, 34, 41);">&quot;Some
                                    beautiful paths can&#39;t be discovered without getting
                                    lost.&quot;</span></strong><br /><br /></p>
                    </div>
                </div>
                <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox>
                    <div class="col-lg-5"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a><img class="img-fluid" src="images/best1.jpg" width="375" height="250" /></div>
                    <div class="col"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="images/best3.jpg" width="452" height="200" /></a>
                    </div>
                    <div class="col"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="images/best2.jpg" /></a></div>
                    <div class="col"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="images/best4.jpg" /></a></div>
                    <div class="col"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="images/best5.jpg" width="452" height="254" /></a>
                    </div>
                </div>
            </div>
            <footer></footer>
        </section>
        <footer class="text-white bg-dark"></footer>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                        <svg class="bi bi-bell" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                            </path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h4>CALL US</h4>
                        <p>+918308611826</p><a href="#">Learn More <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                        <svg class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                            </path>
                            <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                            </path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h4>EMAIL US</h4>
                        <p>Kshirsagarpranav060@gmail.com</p><a href="#">Learn More <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                        <svg class="bi bi-flag" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z">
                            </path>
                        </svg>
                    </div>
                    <div class="px-3">
                        <h4>FIND US</h4>
                        <p>Address line : Solapur Maharashtra</p><a href="#">Learn More <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Website developed by </h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col-lg-5" style="flex-basis: auto !important; width: 461px !important;">
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130" src="images/photo.jpg" />
                            <div>
                                <h5 class="fw-bold text-primary mb-0">Pranav Prabhakar kshirsagar</h5>
                                <p class="text-muted mb-1">Software developer</p>
                                <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                    <li class="list-inline-item text-center">
                                        <a href="https://www.facebook.com/pranav.kshirsagar.716" target="_blank">
                                            <img src="images/Facebook.jpg" width="30" height="30" />
                                        </a>
                                    </li>
                                    <li class="list-inline-item text-center">
                                        <a href="https://www.instagram.com/pranav8289/" target="_blank">
                                            <img src="images/Instagram.jpg" width="30" height="30" />
                                        </a>

                                    </li>
                                    <li class="list-inline-item text-center">
                                        <a href="https://www.linkedin.com/in/pranav-kshirsagar-3a204823a/" target="_blank">
                                            <img src="images/linkedin.jpg" width="30" height="30" />
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>