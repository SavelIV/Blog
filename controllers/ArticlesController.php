<?php

/**
 * Class ArticlesController
 * Class for articles manage
 */
class ArticlesController {

    /**
     * Action for "index" site page 
     */
    public function actionList() {
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/list.php');

        return true;
    }

    /**
     * Action for "articles/view" site page 
     * @param int $id article id
     */
    public function actionView($id) {

        if ($id) {
            $newsCategories = News::getNewsCategories();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $articlesList = Articles::getArticlesList();
            $newsList = News::getNewsList();
            $articleId = Articles::getArticleByID($id);
            if ($articleId == 0) {
                //error page
                Router::Error();
            }


            require_once(ROOT . '/views/articles/view.php');
        }


        return true;
    }

    /**
     * Action for "gallery" site page 
     */
    public function actionGallery() {
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/gallery.php');

        return true;
    }

    /**
     * Action for "articles/category" site page 
     * @param string $type articles type
     */
    public function actionCategory($type) {

        if ($type) {
            $newsCategories = News::getNewsCategories();
            $articlesCategories = Articles::getArticlesCategories();
            $newsList = News::getNewsList();
            $recentArticles = Articles::getRecentArticles();
            $articlesList = Articles::getArticlesList();
             $articlesType = Articles::getArticlesByCategory($type);
            if ($articlesType == 0) {
                //error page
                Router::Error();
            }

            require_once(ROOT . '/views/articles/category.php');
        }

        return true;
    }
    
    /**
     * Action for "about" site page 
     */
    public function actionAbout() {
        
        $name = $email = $message = $result = false;

        if (isset($_POST['submitcomment'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // send email to admin
            $to = "saviv@saviv.site";
            $subject = "M & M - comment from site:";
            $message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

            $from = "admin@saviv.site";
            $headers = "From:" . $from . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
            $result = mail($to, $subject, $message, $headers);
        }
        
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/about.php');

        return true;
    }
    
    /**
     * Action for "contact" site page 
     */
    public function actionContact() {

        $name = $email = $message = $subject = $result = false;

        if (isset($_POST['submitcontact'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];

            // send email to admin
            $to = "saviv@saviv.site";
            $subject = "M & M - mail from site:" . $subject;
            $message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

            $from = "admin@saviv.site";
            $headers = "From:" . $from . "\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
            $result = mail($to, $subject, $message, $headers);
        }
        
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/contact.php');

        return true;
    }

}
