<?= snippet('top') ?>
<body id="swipaw">

    <?= snippet('h') ?>  
    <?= snippet('breadcrumb') ?>
<main>
    <article>
        <h1><?= $page->heading() ?></h1>
        <div>
            <img src="<?= $site->page('swipaw')->file('SwiPaw.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('About the Product.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Research Summary.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Persona.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Journey Map.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Functions and Site Architecture.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Wireframe Flows.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Style Guide.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Support Website.png')->url() ?>" alt="img">
            <img src="<?= $site->page('swipaw')->file('Support Website – 1.png')->url() ?>" alt="img">
        </div>
        <div class="bf">
            <a href="<?= $site->page('chef')->url()?>">&lt; Back</a> 
            <a href="<?= $site->page('illustrations')->url()?>">&gt; Next Project</a>
        </div>
    </article>
</main>

<?= snippet('footer') ?>
