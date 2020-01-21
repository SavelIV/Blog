<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
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
                        <li><a href="/about/"><span>About</span></a></li>
                        <li class="active last"><a href="#"><span>Contact</span></a></li>
                    </ul>
                </div>
            </header>
            <!--////////////////////////////////////Container-->
            <section id="container">
                <div class="wrap-container">
                    <!-----------------Content-Box-------------------->
                    <section class="content-box zerogrid">
                        <div class="row wrap-box"><!--Start Box-->
                            <h3 class="t-center" style="font-size: 30px;margin: 10px 0px 30px">Contact Form</h3>
                            <div class="embed-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14245.720244102282!2d30.31510941541239!3d59.93570856384633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696311969a2145d%3A0x72b3cdb5229676ea!2z0JzQtdC00L3Ri9C5INCy0YHQsNC00L3QuNC6!5e0!3m2!1sru!2sru!4v1579528365026!5m2!1sru!2sru" width="800" height="500"></iframe>
                            </div>
                            <div id="contact_form">
                                <?php if ($result): ?>
                                    <span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>
                                <?php endif; ?>
                                <form name="form1" id="ff" method="post">
                                    <div class="row">
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <input type="text" name="name" id="name" placeholder="Enter name" required="required" />
                                            </div>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <input type="email" name="email" id="email" placeholder="Enter email" required="required" />
                                            </div>
                                        </div>
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="wrap-col">
                                            <textarea name="message" id="message" class="form-control" rows="2" cols="100" required="required"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <!-- Google Map -->
        <script>
            $('.embed-container').click(function () {
                $('.embed-container iframe').css("pointer-events", "auto");
            });
            $(".embed-container").mouseleave(function () {
                $('.embed-container iframe').css("pointer-events", "none");
            });
        </script>
    </body>
</html>
<?php include ROOT . '/views/layouts/footer.php'; ?>