<header>
<ul>
        <a href="<?= $site->url()?>">
        <li class="yellow">
            <div>
            <span class="full">
                <span class="y">Y</span>
                <span class="u">u</span>
                <span class="l">l</span>
                <span class="i">i</span>
                <span class="a">a</span>
            </span>
             <span class="full">Biziaeva</span>
         </div>
        </li>
    </a>
     <li class="pink"><a class="home-pg" href="<?= $site->page('home')->url()?>">Projects</a></li>
    <li class="skyblue"><a class="exhibitions-pg" href="<?= $site->page('process')->url()?>">Process</a></li>
    <li class="red"><a class="news-pg" href="<?= $site->page('about')->url()?>">About</a></li>
    <li class="green"></li>
    </ul>
    
</header>