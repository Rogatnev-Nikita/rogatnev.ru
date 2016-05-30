<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>

    <!-- META -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- SEARCH META -->
    <meta name="author" content="<?php echo $name; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    
    <!-- SEARCH VERIFICATION -->
    <meta name='yandex-verification' content='725ae1e1a0b5a334' />
    <meta name='google-site-verification' content='a070uDELI7RF7iSADEWdKqbMqHDMo9VihBN9TkgiVHE' />

    <!-- TITLE -->
    <title><?php echo $title; ?></title>
    
    <!-- ICON -->
    <link rel="shortcut icon" href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/' ?>images/favicon.ico" />

    <!-- CSS | STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>css/style.css" />

</head>
<body>

    <!-- CONTAINER -->
    <div id="hs-container" class="hs-container">

        <!-- SIDEBAR -->
        <aside class="hs-menu" id="hs-menu">

            <!-- PROFIL -->
            <div class="hs-headline">
                <a id="my-link" href="#my-panel"><i class="fa fa-bars"></i></a>
                <div class="img-wrap">
                    <img src="<?php echo $domain; ?>images/portrait.png" alt="rogatnev" width="150" height="150" />
                </div>
 
                 <div class="profile_info">
                    <h1><?php echo $name; ?></h1>
                    <!-- <h6><span class="fa fa-location-arrow"></span> <?php echo $location; ?></h6> -->
                    <h6><span class="fa fa-circle" style="color:green;font-size:10px;"></span>&nbsp;&nbsp;&nbsp; <?php echo $available; ?></h6>  
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="separator-aside"></div>
            <!-- PROFIL END -->

            <!-- MENU -->
            <nav>
                <a href="#section1"><span class="menu_name"><?php echo $menuitem1; ?></span><span class="fa fa-book"></span></a>
                <a href="#section2"><span class="menu_name"><?php echo $menuitem2; ?></span><span class="fa fa-university"></span></a>
                <a href="#section3"><span class="menu_name"><?php echo $menuitem3; ?></span><span class="fa fa-code"></span></a>
                <a href="#section4"><span class="menu_name"><?php echo $menuitem4; ?></span><span class="fa fa-cart-plus"></span></a>
                <a href="#section5"><span class="menu_name"><?php echo $menuitem5; ?></span><span class="fa fa-archive"></span></a>
                <a href="#section6"><span class="menu_name"><?php echo $menuitem6; ?></span><span class="fa fa-pencil"></span></a>
                <a href="#section7"><span class="menu_name"><?php echo $menuitem7; ?></span><span class="fa fa-paper-plane"></span></a>
            </nav>
            <!-- MENU END -->

            <!-- SOCIAL -->
            <div class="aside-footer">
                <a href="mailto:mail@rogatnev.ru" target="_blank"><i class="fa fa-envelope"></i></a>
                <a href="https://vk.com/rogatnev_nikita" target="_blank"><i class="fa fa-vk"></i></a>
                <a href="https://fi.linkedin.com/in/rogatnevnikita/" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="skype:rogatnev_nikita?call" target="_blank"><i class="fa fa-skype"></i></a>
                <a href="http://habrahabr.ru/users/nikita_rogatnev/" target="_blank"><i class="fa icon-habrahabr"></i></a>
                <a href="https://github.com/Rogatnev-Nikita" target="_blank"><i class="fa fa fa-github"></i></a>
                <a href="http://steamcommunity.com/profiles/76561198016455673/" target="_blank"><i class="fa fa fa-steam"></i></a>
            </div>
            <!-- SOCIAL END -->
            
        </aside>
        <!-- SIDEBAR END -->

        <!-- TO TOP -->
        <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
        <!-- TO TOP END -->

        <!-- hs-content-scroller -->
        <div class="hs-content-scroller">
            
            <!-- HEADER -->
            <div id="header_container">
                <div id="header">
                    <div><a class="home"><i class="fa fa-home"></i></a></div>
                    <div><a href="" class="previous-page arrow"><i class="fa fa-angle-left"></i></a></div>
                    <div><a href="" class="next-page arrow"><i class="fa fa-angle-right"></i></a></div>
                    
                    <!-- NEWS -->
                    <div class="news-scroll">
                        <span><i class="fa fa-newspaper-o"></i><?php echo $news; ?>: </span>
                        <ul id="marquee" class="marquee">
                            <li>
                                <?php echo $newsitem; ?></li>
                        </ul>
                    </div>
                    <!-- NEWS END -->

                    <div><a href="<?php echo $lang_switch; ?>" class="lang"><i class="fa fa-globe"></i></a></div>
                </div>
            </div>
            <!-- HEADER END -->

            <!-- CONTENT $page_url -->
            <div class="hs-content-wrapper">
                <?php 
                    include "01.php";
                    include "02.php";
                    include "03.php";
                    include "04.php";
                    include "05.php";
                    include "06.php";
                    include "07.php";
                ?>
            </div>
            <!-- CONTENT END -->
            
        </div>
        <!-- End hs-content-scroller -->

    </div>
    <!-- CONTAINER END -->
    
    <div id="my-panel"></div>

    <!-- SCRIPTS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $domain; ?>js/default.js"></script>
    <script type="text/javascript" src="<?php echo $domain; ?>js/layout.js"></script>
    <script type="text/javascript" src="<?php echo $domain; ?>js/main.js"></script>
    <!-- SCRIPTS END -->

    <!-- COUNTERS -->
    <script>(function(g,a,i){(a[i]=a[i]||[]).push(function(){try{a.yaCounter23982100=new Ya.Metrika({id:23982100,webvisor:true,clickmap:true,trackLinks:true,accurateTrackBounce:true,trackHash:true,params:window.yaParams||{}})}catch(c){}});var h=g.getElementsByTagName("script")[0],b=g.createElement("script"),e=function(){h.parentNode.insertBefore(b,h)};b.type="text/javascript";b.async=true;b.src=(g.location.protocol=="https:"?"https:":"http:")+"//mc.yandex.ru/metrika/watch.js";if(a.opera=="[object Opera]"){g.addEventListener("DOMContentLoaded",e,false)}else{e()}})(document,window,"yandex_metrika_callbacks");</script>
    <script>(function(d,e,j,h,f,c,b){d.GoogleAnalyticsObject=f;d[f]=d[f]||function(){(d[f].q=d[f].q||[]).push(arguments)},d[f].l=1*new Date();c=e.createElement(j),b=e.getElementsByTagName(j)[0];c.async=1;c.src=h;b.parentNode.insertBefore(c,b)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create","UA-48546828-1","rogatnev.ru");ga("send","pageview");</script>
    <!-- COUNTERS END -->

</body>
</html>