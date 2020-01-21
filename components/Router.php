<?php

class Router {
    /**
     * Variable for storing an array of routes
     * @var array 
     */
    private $routes;

    /**
     * Constructor
     */
    public function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    /**
     * Returns query string
     */
    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    
    
    /**
     * Method to handle requests
     */
    public function run() {
   
        $uri = $this->getURI();
        //for russian url
        $uri = rawurldecode($uri);

        // check if it exists in routes.php
        foreach ($this->routes as $uriPattern => $path) {
            
            // compare $uriPattern with $uri:
            if (preg_match("~^$uriPattern$~", $uri)) {

                // get internal route ($path) according to this rule
                $internalRoute = preg_replace("~^$uriPattern$~", $path, $uri);
                
                //partition it on segments:
                $segments = explode('/', $internalRoute);
               

               // define controller, action, parameters
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;
                
                 // Create object, call method with given parameters
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if ($result != null) {
                    break;
                }
                 
            }
            
        }
        
    }
    
    /**
     * Error 404
     */

    static public function Error() {
        // error mesage on site page
        $newsList = News::getNewsList();
        $newsCategories = News::getNewsCategories();
        $articlesCategories = Articles::getArticlesCategories();
        $recentArticles = Articles::getRecentArticles(); 
        include ROOT . '/views/error404/404.php';  // template page 
        die();
    }

    
}
