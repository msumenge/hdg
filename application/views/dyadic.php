<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <img class="marg-top-50 marg-bottom-20" src="<?php echo base_url('images/dyadic_banner.png'); ?>" alt="Daydic" style="width: 100%; max-width: 700px;" />
            <h4>Avaliable Feburary 26th, 2016 <i class="fa fa-windows"></i></h4>
            <h2 id="dyadic-download-link">
                <a href="http://store.steampowered.com/app/442140/" target="_blank">
                    Buy Dyadic
                </a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center font-1-3 dyadic-text">
            In Dyadic, two players find themselves trapped in ancient ruins after discovering a rare and priceless artifact. Both of you want to be the one to escape ruins with the artifact, but you don't necessarily have enough equipment to do it on your own. Will both of you work together to try and solve the perilous puzzles that stand in your path? Or will you forsake each other to try and keep the treasure for yourselves? There’s only one way to find out…
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #101010;">
    <div class="row">
        <div class="col-md-12 text-center">
            <video id="dyadic-trailer" controls poster="<?php echo base_url('images/poster.png'); ?>">
			<source src="<?php echo base_url('videos/demo_trailer.mp4'); ?>" type="video/mp4">
                Please <a href="https://support.google.com/chrome/answer/95346?hl=en" target="_blank">download and install</a> Google Chrome browser to view this video.
            </video>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center font-1-3 dyadic-text">
            Dyadic is a co-op puzzle platformer…kind of. It’s definitely got platforms and puzzles, but there’s no requirement for you to work together with your partner. Working together may make your journey easier, but you’ll likely have to give up your control over the Jade Statue, an ancient and valuable relic. So, are you and your partner friends, or foes? That’s for you to decide.
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #101010;">
    <div class="row">
        <div class="col-md-12">
            <div id="dyadic-gallery" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#dyadic-gallery" data-slide-to="0" class="active"></li>
                    <?php
                        for($loop = 1; $loop < 9; $loop++) {
                            echo '<li data-target="#dyadic-gallery" data-slide-to="'.$loop.'"></li>
                            ';
                        }
                    ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo base_url('images/slide1.png'); ?>" alt="Image 1" />
                        <!--div class="carousel-caption"></div-->
                    </div>
                    <?php
                        for($loop = 2; $loop < 10; $loop++) {
                    ?>
                    <div class="item">
                        <img src="<?php echo base_url('images/slide'.$loop.'.png'); ?>" alt="Image <?php echo $loop; ?>" />
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#dyadic-gallery" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#dyadic-gallery" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center font-1-3 dyadic-text">
        Dyadic was greenlit on the 14th of August, 2015! We truly appreciate all your support and votes. You can check out the greenlight page <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=491366195" target="_blank">here</a>! It is also planned to be released through <a href="itch.io" target="_blank">itch.io</a> and Steam early 2016.
            <br>
            <br>
            <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=491366195" target="_blank">
                <img src="<?php echo base_url('images/greenlight.png'); ?>" alt="Green light page" class="animate zoom-on-hover" style="width: 200px;"/>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-warning">
                <div class="panel-heading text-center"><h3 class="marg-0">Minimum requirements</h3></div>
                <div class="panel-body">
                    <table class="min-req fullwidth light-font">
                        <tr>
                            <td>OS</td>
                            <td>: Windows 7 SP1+</td>
                        </tr>
                        <tr>
                            <td>CPU</td>
                            <td>: 2.4Ghz Intel Core 2 Duo or equivalent</td>
                        </tr>
                        <tr>
                            <td>GPU</td>
                            <td>: Nvidia 260 GTS or Radeon HD 4850</td>
                        </tr>
                        <tr>
                            <td>HDD</td>
                            <td>: 1 GB</td>
                        </tr>
                        <tr>
                            <td>Memory</td>
                            <td>: 4 GB RAM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>