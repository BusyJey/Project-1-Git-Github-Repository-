<?= snippet('top') ?>
<body id="chef"> 

<?= snippet('h') ?>
<?= snippet('breadcrumb') ?>


<main>
    <article>
        <h1><?= $page->heading() ?></h1>
        <div>
            <p><?= $page->intro() ?></p>
            <img src="<?= $site->page('chef')->file('chef.jpg')->url() ?>" alt="pitch desk">
            <div class="video">
                <h2><?= $page->subheading() ?></h2>
                <video class="cssMask2"  width="480" height="auto" preload controls poster="<?= $page->file('splash.png')->url() ?>">
                    <source src = "<?= $page->file('20200218_225526.mp4')->url() ?>" type = "video/mp4" />
                </video>
            </div>
        </div>
        <div class="bf">
            <a href="<?= $site->page('kiwi')->url()?>">&lt; Previous Project</a> 
            <a href="<?= $site->page('swipaw')->url()?>">&gt; Next Project</a>
        </div>
    </article>
</main>

<?= snippet('footer') ?>