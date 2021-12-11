<?= snippet('top') ?>
<body id="kiwi">

    <?= snippet('h') ?>  
    <?= snippet('breadcrumb') ?>

<main>
    <article>
        <h1><?= $page->heading() ?></h1>
        <div>
    <p><?= $page->intro() ?></p>
            <img src="<?= $site->page('kiwi')->file('lg.jpg')->url() ?>" alt="large">
            <figcaption><?= $page->caption() ?></figcaption>

            <img src="<?= $site->page('kiwi')->file('med.jpg')->url() ?>" alt="medium">
            <figcaption><?= $page->caption() ?></figcaption>

            <img src="<?= $site->page('kiwi')->file('sm.jpg')->url() ?>" alt="small">
            <figcaption><?= $page->caption() ?></figcaption>  
        </div>
        <div class="bf">
            <a href="<?= $site->page('home')->url()?>">&lt; Back</a> 
            <a href="<?= $site->page('chef')->url()?>">&gt; Next Project</a>
        </div>
    </article>
</main>

<?= snippet('footer') ?>