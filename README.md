# Laravel-API
>a RESTful API using Laravel 5 to CRUD articles

# Using application

config .env file with your DB settings

``` bash
# Change directory using 
cd LArticles

# Install Dependencies
composer install

# Make DB tables using 
php artisan migrate

# Insert the dummy data using 
php artisan db:seed

# Run the application using 
php artisan serve
```

# Endpoints

### List all articles with links and meta
``` bash
GET api/articles
```
### Get single article
``` bash
GET api/article/{id}
```

### Delete article
``` bash
DELETE api/article/{id}
```

### Add article
``` bash
POST api/article
title/body
```

### Update article
``` bash
PUT api/article
article_id/title/body
```



# Resource
https://github.com/bradtraversy/larticles_api

https://www.youtube.com/watch?v=4pc6cgisbKE