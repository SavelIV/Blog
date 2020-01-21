<?php

class ArticlesController {

    public function actionList() {
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/list.php');

        return true;
    }

    public function actionView($id) {

        if ($id) {
            $newsCategories = News::getNewsCategories();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $articlesList = Articles::getArticlesList();
            $newsList = News::getNewsList();
            $articleId = Articles::getArticleByID($id);
            if ($articleId == 0) {
                Router::Error();
            }


            require_once(ROOT . '/views/articles/view.php');
        }


        return true;
    }

    public function actionGallery() {
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();
        $articlesList = Articles::getArticlesList();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/articles/gallery.php');

        return true;
    }

    public function actionCategory($type) {

        if ($type) {
            $newsCategories = News::getNewsCategories();
            $articlesCategories = Articles::getArticlesCategories();
            $newsList = News::getNewsList();
            $recentArticles = Articles::getRecentArticles();
            $articlesList = Articles::getArticlesList();
             $articlesType = Articles::getArticlesByCategory($type);
            if ($articlesType == 0) {
                Router::Error();
            }

            require_once(ROOT . '/views/articles/category.php');
        }

        return true;
    }
    
    public function actionAbout() {
        
        $name = $email = $message = $result = false;

        if (isset($_POST['submitcomment'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

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
    
    public function actionContact() {

        $name = $email = $message = $subject = $result = false;

        if (isset($_POST['submitcontact'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = $_POST['subject'];

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
