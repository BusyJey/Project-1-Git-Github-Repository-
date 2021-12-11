<?= snippet('top') ?>

<body id="process"> 

<?= snippet('h') ?>

<main>
    <h1><?= $page->heading() ?></h1>
        <img src="<?= $site->page('process')->file('map.png')->url() ?>" class="responsive">
  
        <?php foreach ($page->children()as $place): ?>
        <p><?= $place->intro() ?></p>
        <h2><?= $place->subheading() ?></h2>
        <p><?= $place->text() ?></p>
    <?php endforeach ?>
        
    <?= snippet('footer') ?>