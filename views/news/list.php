<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
    <head>
        <!-- Basic Page Needs================================================== -->
        <meta charset="utf-8">
        <title>M & M</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS================================================== -->
        <link rel="stylesheet" href="/template1/css/zerogrid.css">
        <link rel="stylesheet" href="/template1/css/style.css">
        <!-- Custom Fonts -->
        <link href="/template1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/template1/css/menu.css">
        <script src="/template1/js/jquery1111.min.js" type="text/javascript"></script>
        <script src="/template1/js/script.js"></script>
        <!-- Owl Carousel Assets -->
        <link href="/template1/owl-carousel/owl.carousel.css" rel="stylesheet">
        <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
        <!--[if lt IE 9]>
                    <script src="js/html5.js"></script>
                    <script src="js/css3-mediaqueries.js"></script>
            <![endif]-->
    </head>
    <body class="gallery-page">
        <div class="wrap-body">
            <header class="">
                <div class="logo">
                    <a href="#">M & M</a>
                    <span>Travels</span>
                </div>
                <div id="cssmenu" class="align-center">
                    <ul>
                        <li><a href='/articles/'><span>Home</span></a></li>
                        <li class="has-sub"><a href="/gallery/"><span>Poems</span></a>
                            <ul>
                                <?php foreach ($articlesCategories as $articlesItem): ?>
                                    <li class="has-sub"><a href="/articles/<?php echo $articlesItem['type']; ?>"><span>Category: <?php echo $articlesItem['type']; ?></span></a>
                                        <ul>
                                            <li><a href="/articles/<?php echo $articlesItem['id']; ?>"><span><?php echo $articlesItem['title']; ?></span></a></li>
                                        </ul>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="active has-sub"><a href="/news/"><span>Trips</span></a>
                            <ul>
                                <?php foreach ($newsList as $newsItem): ?>
                                    <li class="has-sub"><a href="/news/<?php echo $newsItem['id']; ?>"><span><?php echo $newsItem['title']; ?></span></a>
                                        <ul>
                                            <li><a href="/news/<?php echo $newsItem['id']; ?>"><span><?php echo $newsItem['short_content']; ?></span></a></li>
                                        </ul>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="/about/"><span>About</span></a></li>
                        <li class="last"><a href="/contact/"><span>Contact</span></a></li>
                    </ul>
                </div>
            </header>
            <!--////////////////////////////////////Container-->
            <section id="container">
                <div class="wrap-container">
                    <!-----------------Content-Box-------------------->
                    <div id="main-content">
                        <div class="wrap-content">
                            <div class="row">
                                <?php foreach ($newsList as $newsItem): ?>
                                    <article class="single-post zerogrid">
                                        <div class="row wrap-post"><!--Start Box-->
                                            <div class="entry-header">
                                                <span class="time"><?php echo $newsItem['date']; ?>  by <?php echo $newsItem['author_name']; ?></span>
                                                <h2 class="entry-title"><a href="/news/<?php echo $newsItem['id']; ?>"><?php echo $newsItem['title']; ?></a></h2>
                                                <span class="cat-links"><a href="<?php echo $newsItem['type']; ?>">Category: <?php echo $newsItem['type']; ?></a></span>
                                            </div>
                                            <div class="post-thumbnail-wrap">
                                                <img src="/template/<?php echo $newsItem['preview']; ?>">
                                            </div>
                                            <div class="entry-content">
                                                <center><h2><?php echo $newsItem['short_content']; ?></h2></center>
                                                <center><a class="button " href="/news/<?php echo $newsItem['id']; ?>">Read More</a></center>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<?php include ROOT . '/views/layouts/footer.php'; ?>
