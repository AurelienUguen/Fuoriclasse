<div class="position-relative headerposition">
    <img src="ressources/Header_Cyclisme.jpg" alt="HeaderCyclisme" class="headerpic img-fluid">
    <h1 class="position-absolute top-50 start-50 translate-middle display-5 fw-light responsivetitle">Pro Cycling Advanced Statistic</h1>
</div>

<section class="grid gap-3 p-2 g-col-6 container container-fluid d-flex justify-content-center align-items-center services">
    <div>
        <div class="grid gap-3 p-2 g-col-6 container container-fluid d-flex flex-column justify-content-center align-items-center renforce">
            <h3 class="h2 text-center">Reinforce race storytelling</h3>
            <img src="ressources/Fuoriclasse_Screenshot.png" alt="TvScreenshot" width="400px" class="img-fluid imgsection">
            <p class="h5 fw-light text-justify">Provide innovative stories to your audience leveraging Fuoriclasse advanced statistics: social media, live broadcast, ...</p>
        </div>

        <div class="grid gap-3 p-2 g-col-6 container container-fluid d-flex flex-column justify-content-center align-items-center bettertarget">
            <h3 class="h2 text-center">Better target young talents</h3>
            <img src="ressources/Fuoriclasse_Stats.png" alt="FuoriclasseStats" width="400px" class="img-fluid imgsection">
            <p class="h5 fw-light text-justify">Modernize your scouting efforts benchmarking in detail Junior and U23 performance via our detailed dashboards.</p>
        </div>

        <div class="grid gap-3 p-2 g-col-6 container container-fluid d-flex flex-column justify-content-center align-items-center getinsights">
            <h3 class="h2 text-center">Get insights to comment races</h3>
            <img src="ressources/Fuoriclasse_Journal.png" alt="FuoriclasseNews" width="400px" class="img-fluid imgsection">
            <p class="h5 fw-light text-justify">Better analyze race live events and race results thanks to our advanced ranking and benchmarking tool.</p>
        </div>
    </div>
</section>

<section class="grid gap-3 p-2 g-col-6 container-fluid d-flex flex-column ourclients">
    <div class="presentation gap-3 p-2 g-col-6 d-flex justify-content-around align-items-center ourclientdiv">
        <div class="container container-fluid">
            <h2 class="display-5">What our clients say about us</h2>
            <p class="h5 text-justify">Fuoriclasse works closely with multiple race organizers, journalists, professional teams and rider agencies delivering best-in-class statistics solution.</p>
        </div>
        <div class="container gap-3 p-2 g-col-6 riderspic">
            <img src="ressources/Fuoriclasse_Riders.jpeg" alt="Fuoriclasse_Riders" width="650px" class="img-fluid">  
        </div>
    </div>


    <div class="testimony container container-fluid">
        <div class="firsttestimony container-fluid">
            <p>“Your online platform, with detailed filtering options, is quite impressive. Congrats!”</p>
            <br>
            <h4>WorldTeam Performance Director</h4>
        </div>

        <div class="secondtestimony container-fluid">
            <p>“Statistics and insights shared by Fuoriclasse have drastically improved the storytelling during live broadcast”</p>
            <br>
            <h4>WorldTour race organizer</h4>
        </div>
    </div>
</section>

 
<section class="video gap-3 p-2 g-col-6 container-fluid">
    <div class="gcn gap-3 p-2 g-col-6 container-fluid d-flex flex-column justify-content-around align-items-center">
        <h2>Fuoriclasse on GCN channel</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mwKXqbY9gFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="youtubevideo" allowfullscreen></iframe>
    </div>
</section>

<?php

$users = UserController::getUserList($users);
var_dump(($users));

?>