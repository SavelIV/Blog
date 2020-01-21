<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> 
    <!--<![endif]-->
    <head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8">
        <title>M & M</title>
        <meta name="description" content="">
        <!-- Mobile Specific Metas ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- CSS  ================================================== -->
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
    <body class="single-page">
        <div class="wrap-body">
            <header class="">
                <div class="logo">
                    <a href="#">M & M</a>
                    <span>Poems & Photos</span>
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
                        <li class="active"><a href="/about/"><span>About</span></a></li>
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
                                <article class="single-post zerogrid">
                                    <div class="row wrap-post"><!--Start Box-->
                                        <div class="entry-header">
                                            <span class="time">May 15, 2018  by admin</span>
                                            <h2 class="entry-title"><a href="/articles/">THIS IS SIMPLE RETRO GALLERY: BEAUTY PHOTOS AND FAMOUS POEMS.</a></h2>
                                            <span class="cat-links">TAGS: <a href="/gallery/">POEMS</a>,  <a href="/news/">TRAVELS</a></span>
                                        </div>
                                        <div class="post-thumbnail-wrap">
                                            <img src="/template1/images/avatar.jpg">
                                        </div>
                                        <div class="entry-content">
                                            <div class="excerpt">
                                                <p>This site was made on PHP 7.2 with using MVC pattern and OOP practice.
                                                    It realizes Router and Front Controller components, that helps to make
                                                    user-friendly URLs. 
                                                </p>
                                            </div>
                                            <blockquote><p>All code is well documented (and self-documented :)). Code you may find here: https://github.com/SavelIV/Blog </p></blockquote>
                                            <p>Site uses MySql database for storing articles and poems(using PDO with prepared statements).
                                            </p>
                                            <p>Mail is working, you may leave a comment. If you know some great poems and you would like to share, 
                                               paste it below, please. I add it to this site with my pleasure. Thanks.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <div class="zerogrid">
                                    <div class="comments-are">
                                        <div id="comment">
                                            <?php if ($result): ?>
                                                <span style='color:blue; font-size: 25px; line-height: 20px;'>Your Message was sent successfully !</span>
                                            <?php else: ?>
                                                <span style='color:red; font-size: 25px; line-height: 20px;'>Error! Please try again.</span>
                                            <?php endif; ?>
                                            <h3>Leave a Reply</h3>
                                            <span>Your email address will not be published. Required fields are marked </span>
                                            <form name="comment_form" id="comment_form" method="post" action="">
                                                <label>
                                                    <span>Comment:</span>
                                                    <textarea name="message" id="message"></textarea>
                                                </label>
                                                <label>
                                                    <span>Name:</span>
                                                    <input type="text"  name="name" id="name" required>
                                                </label>
                                                <label>
                                                    <span>Email:</span>
                                                    <input type="email"  name="email" id="email" required>
                                                </label>
                                                <center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<?php include ROOT . '/views/layouts/footer.php'; ?>