<?php

class NewsController {

    public function actionList() {
        $newsCategories = News::getNewsCategories();
        $newsList = News::getNewsList();
        $articlesList = Articles::getArticlesList();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles();

        require_once(ROOT . '/views/news/list.php');

        return true;
    }

    public function actionView($id) {
        if ($id) {
            $newsCategories = News::getNewsCategories();
            $newsList = News::getNewsList();
            $articlesList = Articles::getArticlesList();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $newsItem = News::getNewsItemByID($id);
            if ($newsItem == 0) {
                Router::Error();
            }
            
            require_once(ROOT . '/views/news/view.php');
        }

        return true;
    }

    public function actionCategory($type) {
        if ($type) {
            $newsCategories = News::getNewsCategories();
            $newsList = News::getNewsList();
            $articlesList = Articles::getArticlesList();
            $articlesCategories = Articles::getArticlesCategories();
            $recentArticles = Articles::getRecentArticles();
            $newsType = News::getNewsByCategory($type);
            if ($newsType == 0) {
                Router::Error();
            }

            require_once(ROOT . '/views/news/category.php');
        }

        return true;
    }

}
