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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        crossorigin="anonymous" />
</head>

<body>
    <div class="card-group">
        <div class="card"><img class="card-img-top w-100 d-block" src="images/MANALI.jpg" />
            <div class="card-body">
                <h4 class="card-title">Manali</h4>
                <p class="card-text">With spectacular valleys, breathtaking views, snowcapped mountains, and lush
                    forests of oak, deodar, and pine, Manali is a magical hill station at the northern end of Kullu
                    valley in Himachal Pradesh. Gifted to the world by the mighty Himalayas, it is known to be one of
                    the most popular destinations...<br><strong>Best Time: </strong>October to June</p>
                    <a href="Trip_form.php" class="btn btn-primary ">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/LADAKH.jpg" />
            <div class="card-body">
                <h4 class="card-title">Ladakh</h4>
                <p class="card-text">Ladakh is a union territory in the Kashmir region of India. Formerly falling in the
                    state of Jammu &amp; Kashmir, Ladakh was administered a union territory on 31st October 2019.
                    Extending from the Siachen Glacier to the main Great Himalayas, Ladakh is a land like no other.
                    Dominated by dramatic land.<br><strong>Best Time: </strong>April to October</p>
                    <a href="Trip_form.php" class="btn btn-primary">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/COORG.jpg" />
            <div class="card-body">
                <h4 class="card-title">Coorg</h4>
                <p class="card-text">Located amidst imposing mountains in Karnataka with a perpetually misty landscape,
                    Coorg is a popular coffee producing hill station. It is popular for its beautiful green hills and
                    the streams cutting right through them. It also stands as a popular destination because of its
                    culture and people....<br><strong>Best Time: </strong>October to March</p><a href="Trip_form.php" class="btn btn-primary ">BOOK TRIP</a>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card"><img class="card-img-top w-100 d-block" src="images/ANDAMAN-NICOBAR-ISLANDS.jpg" />
            <div class="card-body">
                <h4 class="card-title">Andaman &amp; Nicobar</h4>
                <p class="card-text">Replete with turquoise blue water beaches and a bit of history, Andaman &amp;
                    Nicobar Islands is a little slice of paradise tucked around 1,400 km away from the east coast of
                    mainland India. Port Blair, the capital of this union territory, has a major airport and seaport
                    connected with the rest of t...<br><strong>Best Time: </strong>October to Jun</p><a href="Trip_form.php" class="btn btn-primary">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/LAKSHADWEEP-ISLANDS.jpg" />
            <div class="card-body">
                <h4 class="card-title">Arabian Sea</h4>
                <p class="card-text">Formerly known as Laccadive Islands, Lakshadweep translates to &#39;one hundred
                    thousand islands&#39; in Malayalam. Home to a few of the most beautiful and exotic islands and
                    beaches of India, Lakshadweep lies 400km off the southwest coast of the Arabian Sea. The smallest
                    union territory of India has&amp;n...<br><strong>Best Time: </strong>September to May</p><a href="Trip_form.php" class="btn btn-primary ">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/GOA.jpg" />
            <div class="card-body">
                <h4 class="card-title">Goa</h4>
                <p class="card-text">Lying on the western coast, Goa is India&#39;s smallest state and unlike any other,
                    known for its endless beaches, stellar nightlife, eclectic seafood, world-heritage listed
                    architecture. Spread across just 3,702 km, Goa lies in the Konkan region. It is a far cry from the
                    hippie haven or ...<br><strong>Best Time: </strong>October to March</p><a href="Trip_form.php" class="btn btn-primary">BOOK TRIP</a>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card"><img class="card-img-top w-100 d-block" src="images/UDAIPUR.jpg" />
            <div class="card-body">
                <h4 class="card-title">Udaipur</h4>
                <p class="card-text">Udaipur, also known as the City of Lakes, is one of the most visited tourist places
                    in Rajasthan. Located around stunning water lakes and enveloped by the Aravalli Hills in all
                    directions, Udaipur is known for its azure lakes, magnificent palaces, vibrant culture and
                    delectable food. Along with bein...<br><strong>Best Time: </strong>October to March</p><a href="Trip_form.php" class="btn btn-primary">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/SRINAGAR.jpg" />
            <div class="card-body">
                <h4 class="card-title">Srinagar</h4>
                <p class="card-text">Famously known as &#39;Heaven on Earth, Srinagar is located in the union territory
                    of Jammu &amp; Kashmir, on the banks of river Jhelum. Srinagar is known for the stationary
                    houseboats and gondola-type rowboats- Shikaras on Dal Lake. Adorned with tranquil Dal Lake &amp;
                    Nigeen Lake, Srinagar i...<br><strong>Best Time: </strong>April to October</p><a href="Trip_form.php" class="btn btn-primary ">BOOK TRIP</a>
            </div>
        </div>
        <div class="card"><img class="card-img-top w-100 d-block" src="images/MUNNAR.jpg" />
            <div class="card-body">
                <h4 class="card-title">Munnar</h4>
                <p class="card-text">Famous for the tea estates, greenery, winding roads, blanket of mist, and
                    viewpoints, Munnar is a hill station in Kerala, located in the Idukki district. Lying in the Western
                    Ghats at 1600 metres, it is one of the most sought after and visited travel destinations globally,
                    especially popular amongst...<br><strong>Best Time: </strong>September to May</p><a href="Trip_form.php" class="btn btn-primary ">BOOK TRIP</a>
            </div>
        </div>
    </div>
</body>

</html>