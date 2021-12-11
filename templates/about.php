<?= snippet('top') ?>

<body id="about"> 

<?= snippet('h') ?>

<main>
    <h1><?= $page->heading() ?></h1>
    <picture> 
        <source media="(min-width: 1024px)" srcset="<?= $site->page('about')->file('me-lg.png')->url() ?>">
        <source media="(min-width: 640px)" srcset="<?= $site->page('about')->file('me-med.png')->url() ?>">
        <img src="<?= $site->page('about')->file('me-sm.png')->url() ?>" alt="">
    </picture>
    <h2><?= $page->subheading() ?></h2>
    <h3><?= $page->intro() ?></h3>
    
    <?php foreach ($page->children()->listed() as $place): ?>
            <p><?= $place->text() ?></p>
    <?php endforeach ?>
</main>

<?= snippet('footer') ?>

