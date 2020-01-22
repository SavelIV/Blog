<?php

/**
 * Class NewsController
 * Class for news manage
 */
class NewsController {

    /**
     * Action for "news" site page 
     */
    public function actionList() {
        $newsCategories = News::getNewsCategories();
        $newsList = News::getNewsList();
        $articlesList = Articles::getArticlesList();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();

        require_once(ROOT . '/views/news/list.php');

        return true;
    }

    /**
     * Action for "news/view" site page 
     * @param int $id news id
     */
    public function actionView($id) {
        if ($id) {
            $newsCategories = News::getNewsCategories();
            $newsList = News::getNewsList();
            $articlesList = Articles::getArticlesList();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $newsItem = News::getNewsItemByID($id);
            if ($newsItem == 0) {
                //error page
                Router::Error();
            }
            
            require_once(ROOT . '/views/news/view.php');
        }

        return true;
    }

    /**
     * Action for "news/category" site page 
     * @param string $type news type
     */
    public function actionCategory($type) {
        if ($type) {
            $newsCategories = News::getNewsCategories();
            $newsList = News::getNewsList();
            $articlesList = Articles::getArticlesList();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $newsType = News::getNewsByCategory($type);
            if ($newsType == 0) {
                //error page
                Router::Error();
            }

            require_once(ROOT . '/views/news/category.php');
        }

        return true;
    }

}
