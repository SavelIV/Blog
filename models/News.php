<?php

class News 
{
    /**
     * return one news by $id:
     * @param int $id news id
     */
    public static function getNewsItemByID($id) 
    {
        $id = intval($id);

        if ($id) {
            
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            // if request successful returns news id
            if ($newsItem) {
                return $newsItem;
            }
            // otherwise return 0
            return 0;
        }
    }

     /**
     * Return array of news by category:
     * @param string $type news category
     */
    public static function getNewsByCategory($type) 
    {
       
        $type = trim($type);
        $newsType = array();
        if ($type) {
           
            $db = Db::getConnection();
            
            $result = $db->query("SELECT * FROM news WHERE type='$type'");
            
            $i = 0;
            while ($row = $result->fetch()) {
                $newsType[$i]['id'] = $row['id'];
                $newsType[$i]['title'] = $row['title'];
                $newsType[$i]['date'] = $row['date'];
                $newsType[$i]['author_name'] = $row['author_name'];
                $newsType[$i]['short_content'] = $row['short_content'];
                $newsType[$i]['preview'] = $row['preview'];
                $newsType[$i]['type'] = $row['type'];
                $i++;
                
            }
            if ($newsType) {
                return $newsType;
            }
            return 0;
        }
    }

    /**
     * Returns an array of news items
     */
    public static function getNewsList() 
    {
        
        $db = Db::getConnection();
        $newsList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content, preview, type FROM news ORDER BY id ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['preview'] = $row['preview'];
            $newsList[$i]['type'] = $row['type'];
            $i++;
        }

        return $newsList;
    }
    
    /**
     * Returns news categories
     */
    public static function getNewsCategories() {

        $newsCategories = array();

        $db = Db::getConnection();

        $result = $db->query("SELECT id, title, type FROM news GROUP BY type");
        $i = 0;
        while ($row = $result->fetch()) {
            $newsCategories[$i]['id'] = $row['id'];
            $newsCategories[$i]['type'] = $row['type'];
            $newsCategories[$i]['title'] = $row['title'];
            $i++;
        }
        return $newsCategories;
    }

}
