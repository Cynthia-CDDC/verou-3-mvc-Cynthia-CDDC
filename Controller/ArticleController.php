<?php

declare(strict_types = 1);

class ArticleController
{   
    private DatabaseManager $databaseManager;

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }
    
    public function index()
    {   
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {
        // prepare the database connection
        $query = "SELECT * FROM articles";
        $result = $this->databaseManager->connection->query($query); //returns PDOStatement object

        $rawArticles = $result->fetchAll(PDO::FETCH_ASSOC); //turning PDOStatement into array
        
        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date'], $rawArticle['image']);
        }
        pre_r($articles);
        return $articles;
    }

    public function show($id)
    {
        // this can be used for a detail page
        $query = "SELECT * FROM `articles` WHERE id= {$id}";
        $showMoreQuery = $this->databaseManager->connection->query($query);

        $rawArticle = $showMoreQuery->fetch(PDO::FETCH_ASSOC);
        $article = new Article($rawArticle['id'], $rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date'], $rawArticle['image']);
        pre_r($article);
        require 'View/articles/show.php';
    }
}