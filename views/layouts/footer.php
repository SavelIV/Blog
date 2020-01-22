<!--////////////////////////////////////Footer-->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><!--favicon-->
<footer>
    <div class="zerogrid wrap-footer">
        <div class="row">
            <div class="col-1-4 col-footer-1">
                <div class="wrap-col">
                    <h3 class="widget-title">About Us</h3>
                    <p>THIS IS SIMPLE RETRO GALLERY: BEAUTY PHOTOS AND FAMOUS POEMS.</p>
                    <p>This site was made with love (love to travels, love to poems, love to all the world).</p>
                </div>
            </div>
            <div class="col-1-4 col-footer-2">
                <div class="wrap-col">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
                        <?php foreach ($recentArticles as $recentItem): ?>
                        <li><a href="/articles/<?php echo($recentItem['id']); ?>"><?php echo $recentItem['title']  ; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-1-4 col-footer-3">
                <div class="wrap-col">
                    <h3 class="widget-title">Categories</h3>
                    <div class="row">
                        <div class="col-1-2">
                            <h3 class="widget-title">Travels:</h3>
                            <p><?php foreach ($newsCategories as $newsCategory): ?></p>
                            <a href="/news/<?php echo $newsCategory['type'] ;?>"><?php echo $newsCategory['type'];?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-1-2">
                            <h3 class="widget-title">Poems: </h3>
                            <p><?php foreach ($articlesCategories as $articlesCategory): ?></p>
                            <a href="/articles/<?php echo $articlesCategory['type'] ;?>"><?php echo $articlesCategory['type'];?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-4 col-footer-4">
                <div class="wrap-col">
                    <h3 class="widget-title">Gallery</h3>
                    <div class="row">
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="/template1/images/11.jpg"></a>
                                <a href="#"><img src="/template1/images/1.jpg"></a>
                                <a href="#"><img src="/template1/images/13.jpg"></a>
                                <a href="#"><img src="/template1/images/3.jpg"></a>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="/template1/images/10.jpg"></a>
                                <a href="#"><img src="/template1/images/9.jpg"></a>
                                <a href="#"><img src="/template1/images/4.jpg"></a>
                                <a href="#"><img src="/template1/images/7.jpg"></a>
                            </div>
                        </div>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <a href="#"><img src="/template1/images/2.jpg"></a>
                                <a href="#"><img src="/template1/images/6.jpg"></a>
                                <a href="#"><img src="/template1/images/5.jpg"></a>
                                <a href="#"><img src="/template1/images/8.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="zerogrid bottom-footer">
        <div class="row">
            <div class="bottom-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="copyright">
            Copyright @ - Designed by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
        </div>
    </div>
</footer>
