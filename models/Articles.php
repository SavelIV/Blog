<?php

class Articles {
    
    /**
     * return one article by $id:
     * @param int $id article id
     */
    public static function getArticleByID($id) {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM articles WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $articleId = $result->fetch();
            // if request successful returns article id
            if ($articleId) {
                return $articleId;
            }
            // otherwise return 0
            return 0;
        }
    }

    /**
     * Returns array of articles
     */
    public static function getArticlesList() {

        $db = Db::getConnection();
        $articlesList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content, preview, type '
                . 'FROM articles ORDER BY id ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $articlesList[$i]['id'] = $row['id'];
            $articlesList[$i]['title'] = $row['title'];
            $articlesList[$i]['date'] = $row['date'];
            $articlesList[$i]['author_name'] = $row['author_name'];
            $articlesList[$i]['short_content'] = $row['short_content'];
            $articlesList[$i]['preview'] = $row['preview'];
            $articlesList[$i]['type'] = $row['type'];
            $i++;
        }
        return $articlesList;
    }

    // recent articles in footer
    const RECENT = 6;

    /**
     * Returns recent articles
     */
    public static function getRecentArticles($count = self::RECENT) {


        $db = Db::getConnection();
        $recentArticles = array();

        $result = $db->query("SELECT id, title, date, author_name, short_content, preview, type "
                . "FROM articles ORDER BY date DESC LIMIT $count");
        $i = 0;
        while ($row = $result->fetch()) {
            $recentArticles[$i]['id'] = $row['id'];
            $recentArticles[$i]['title'] = $row['title'];
            $recentArticles[$i]['date'] = $row['date'];
            $recentArticles[$i]['author_name'] = $row['author_name'];
            $recentArticles[$i]['short_content'] = $row['short_content'];
            $recentArticles[$i]['preview'] = $row['preview'];
            $recentArticles[$i]['type'] = $row['type'];
            $i++;
        }
        return $recentArticles;
    }

    /**
     * return array of article by category:
     * @param string $type articles category
     */
    public static function getArticlesByCategory($type) {

        $type = trim($type);
        $articlesType = array();
        if ($type) {

            $db = Db::getConnection();
            $result = $db->query("SELECT * FROM articles WHERE type='$type'");

            $i = 0;
            while ($row = $result->fetch()) {
                $articlesType[$i]['id'] = $row['id'];
                $articlesType[$i]['title'] = $row['title'];
                $articlesType[$i]['date'] = $row['date'];
                $articlesType[$i]['author_name'] = $row['author_name'];
                $articlesType[$i]['short_content'] = $row['short_content'];
                $articlesType[$i]['preview'] = $row['preview'];
                $articlesType[$i]['type'] = $row['type'];
                $i++;
            }
            if ($articlesType) {
                return $articlesType;
            }
            return 0;
        }
    }

    /**
     * Returns articles categories
     */
    public static function getArticlesCategories() {

        $articlesCategories = array();

        $db = Db::getConnection();

        $result = $db->query("SELECT id, title, type FROM articles GROUP BY type");
        $i = 0;
        while ($row = $result->fetch()) {
            $articlesCategories[$i]['id'] = $row['id'];
            $articlesCategories[$i]['type'] = $row['type'];
            $articlesCategories[$i]['title'] = $row['title'];
            $i++;
        }
        return $articlesCategories;
    }

}
