<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> 
    <!--<![endif]-->
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
                    <span>Poems & Photos</span>
                </div>
                <div id="cssmenu" class="align-center">
                    <ul>
                        <li class="active"><a href='/articles/'><span>Home</span></a></li>
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
                        <li class="has-sub"><a href="/news/"><span>Trips</span></a>
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
                <div id="owl-slide" class="owl-carousel">
                    <div class="item">
                        <img src="/template1/images/slide1.jpg" />
                    </div>
                    <div class="item">
                        <img src="/template1/images/slide2.jpg" />
                    </div>
                    <div class="item">
                        <img src="/template1/images/slide3.jpg" />
                    </div>
                </div>
            </header>
            <!--////////////////////////////////////Container-->
            <section id="container">
                <div class="wrap-container">
                    <!-----------------content-box-1-------------------->
                    <section class="content-box box-1">
                        <div class="zerogrid">
                            <div class="wrap-box"><!--Start Box-->
                                <div class="box-header">
                                    <h2>ЕВГЕНИЙ ЕВТУШЕНКО.</h2><h2> Не понимать друг друга страшно</h2>
                                </div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-1-2">
                                            <div class="wrap-col">
                                                <p>Не понимать друг друга страшно — не понимать и обнимать, </p>
                                                <p>и все же, как это ни странно,но так же страшно, так же страшно</p>
                                                <p>во всем друг друга понимать.</p>
                                            </div>
                                        </div>
                                        <div class="col-1-2">
                                            <div class="wrap-col">
                                                <p>Тем и другим себя мы раним.
                                                    И, наделен познаньем ранним,</p>
                                                <p>я душу нежную твою
                                                    не оскорблю непониманьем</p>
                                                и пониманьем не убью.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-----------------content-box-2-------------------->
                    <section class="content-box box-style-1 box-2">
                        <div class="zerogrid">
                            <div class="wrap-box"><!--Start Box-->
                                <div class="row">
                                    <?php foreach ($recentArticles as $recentItem): ?>
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <article>
                                                    <div class="post-thumbnail-wrap">
                                                        <a href="/articles/<?php echo $recentItem['id']; ?>" class="portfolio-box">
                                                            <img src="/template1/images/<?php echo $recentItem['id'] . '.jpg'; ?>" alt="">
                                                            <div class="portfolio-box-second">
                                                                <img src="/template1/images/<?php echo ($recentItem['id'] + 3) . '.jpg'; ?>" alt="">
                                                            </div>
                                                        </a>
                                                        <div class="entry-header ">
                                                            <h3 class="entry-title"><?php echo $recentItem['title']; ?></h3>
                                                            <div class="l-tags"><a href="#">Author: <?php echo $recentItem['author_name']; ?></a> / <a href="/articles/<?php echo $recentItem['type']; ?>">Category: <?php echo $recentItem['type']; ?></a></div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-----------------content-box-3-------------------->
                    <section class="content-box box-3">
                        <div class="zerogrid">
                            <div class="wrap-box"><!--Start Box-->
                                <div class="box-header">
                                    <h2>ЕВГЕНИЙ ЕВТУШЕНКО. </h2><h2>Дай бог!</h2>
                                </div>
                                <div class="box-content">
                                    <div class="row">
                                        <div class="col-1-2">
                                            <div class="wrap-col">
                                                <p>Дай бог слепцам глаза вернуть и спины выпрямить горбатым. </p>
                                                <p>Дай бог быть богом хоть чуть-чуть, но быть нельзя чуть-чуть распятым. </p>
                                                <p>Дай бог не вляпаться во власть и не геройствовать подложно, </p>
                                                <p>и быть богатым — но не красть, конечно, если так возможно. </p>
                                                <p>Дай бог быть тертым калачом, не сожранным ничьею шайкой, </p>
                                                <p>ни жертвой быть, ни палачом, ни барином, ни попрошайкой. </p>
                                                <p>Дай бог поменьше рваных ран, когда идет большая драка.</p>
                                            </div>
                                        </div>
                                        <div class="col-1-2">
                                            <div class="wrap-col">
                                                <p>Дай бог побольше разных стран, не потеряв своей, однако. </p>
                                                <p>Дай бог, чтобы твоя страна тебя не пнула сапожищем. </p>
                                                <p>Дай бог, чтобы твоя жена тебя любила даже нищим. </p>
                                                <p>Дай бог лжецам замкнуть уста, глас божий слыша в детском крике. </p>
                                                <p>Дай бог живым узреть Христа, пусть не в мужском, так в женском лике. </p>
                                                <p>Не крест — бескрестье мы несем, а как сгибаемся убого. </p>
                                                <p>Чтоб не извериться во всем, Дай бог ну хоть немного Бога!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <blockquote><p>Дай бог всего, всего, всего и сразу всем — чтоб не обидно… </p>
                                            <p>Дай бог всего, но лишь того, за что потом не станет стыдно.   </p>
                                            <p>1990 </p></blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-----------------content-box-4-------------------->
                    <section class="content-box box-style-1 box-4">
                        <div class="zerogrid" style="width: 100%">
                            <div class="wrap-box"><!--Start Box-->
                                <div class="row">
                                    <article>
                                        <div class="col-1-2">
                                            <img src="/template1/images/slide1.jpg" alt="">
                                        </div>
                                        <div class="col-1-2">
                                            <div class="entry-content t-center">
                                                <h3><a href="/articles/<?php echo $articlesList[5]['id']; ?>"><?php echo $articlesList[5]['title']; ?></a></h3>
                                                <p><?php echo $articlesList[5]['short_content']; ?> </p>
                                                <a class="button" href="/articles/<?php echo $articlesList[5]['id']; ?>">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="row">
                                    <article>
                                        <div class="col-1-2 f-right">
                                            <img src="/template1/images/slide2.jpg" alt="">
                                        </div>
                                        <div class="col-1-2">
                                            <div class="entry-content t-center">
                                                <h3><a href="/articles/<?php echo $articlesList[6]['id']; ?>"><?php echo $articlesList[6]['title']; ?></a></h3>
                                                <p><?php echo $articlesList[6]['short_content']; ?> </p>
                                                <a class="button" href="/articles/<?php echo $articlesList[6]['id']; ?>">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="row">
                                    <article>
                                        <div class="col-1-2">
                                            <img src="/template1/images/slide3.jpg" alt="">
                                        </div>
                                        <div class="col-1-2">
                                            <div class="entry-content t-center">
                                                <h3><a href="/articles/<?php echo $articlesList[7]['id']; ?>"><?php echo $articlesList[7]['title']; ?></a></h3>
                                                <p><?php echo $articlesList[7]['short_content']; ?> </p>
                                                <a class="button" href="/articles/<?php echo $articlesList[7]['id']; ?>">Read More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <!--carousel -->
            <script src="/template1/owl-carousel/owl.carousel.js"></script>
            <script>
                $(document).ready(function () {
                    $("#owl-slide").owlCarousel({
                        autoPlay: 3000,
                        items: 1,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [979, 1],
                        itemsTablet: [768, 1],
                        itemsMobile: [479, 1],
                        navigation: true,
                        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                        pagination: false
                    });
                });
            </script>
        </div>
    </body>
</html>
<?php include ROOT . '/views/layouts/footer.php'; ?>