<?= snippet('top') ?>
<body id="illustrations">

<?= snippet('h') ?>
<?= snippet('breadcrumb') ?>
<main>
    <article>
        <h1><?= $page->heading() ?></h1>
        <div class="layout">

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('bugs.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('feathers.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('skulls.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('veggies.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('fh1.jpg')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('fh2.jpg')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('fh3.jpg')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('russia.jpg')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('balance_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('contrast_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('emphasis_bisiaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('movement_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('pattern_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('scale_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('unity_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>

            <figure>
                <a>
                    <img src="<?= $site->page('illustrations')->file('variety_biziaeva.png')->url() ?>" alt="image" class="adjustsize">
                    <figcaption><?= $page->caption() ?></figcaption>
                </a>
            </figure>
        </div>
    </article>
    <article>
        <div class="bf">
            <a href="<?= $site->page('swipaw')->url()?>">&lt; Previous Project</a> 
            <a href="<?= $site->page('home')->url()?>">&gt; To the Main Page</a>
        </div>
    </article>
    
</main>

<?= snippet('footer') ?>