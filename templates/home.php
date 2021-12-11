<?= snippet('top') ?>
<body id="index">

    <?= snippet('h') ?>   
    
<main>
        <h1><?= $page->heading() ?></h1>
        <h3><?= $page->intro() ?></h3>
   
        <div class="layout">
    <figure>
                <a href="kiwi.html">
                    <img src="images/lg.jpg" alt="image" class="adjustsize">
                    <figcaption>Kiwi's Portfolio UI</figcaption>
                </a>
            </figure>

            <figure>
                <a href="chef.html">
                    <img src="images/splash.png" alt="image" class="adjustsize">
                    <figcaption>Chef Recipes UI</figcaption>
                </a>
            </figure>

            <figure>
                <a href="swipaw.html">
                    <img src="images/swipaw/SwiPow.png" alt="image" class="adjustsize">
                    <figcaption>SwiPaw UX/UI</figcaption>
                </a>
            </figure>

            <figure>
                <a href="illustrations.html">
                    <img src="images/illustrations/russia.jpg" alt="image" class="adjustsize">
                    <figcaption>Illustrations</figcaption>
                </a>
            </figure>
    </div>
    
</main>
<?= snippet('footer') ?>