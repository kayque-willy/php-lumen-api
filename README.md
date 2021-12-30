# Exemplo de API PHP Restful
PHP Lumen, Enloquent e PostgreSQL.

## Development server

Navigate to `http://localhost:8000/api`. The app will automatically reload if you change any of the source files.

## API REQUESTS: 

ROTA                           |     HTTP(Verbo)   |    Request            |    Return   |    Description           |
------------------------------ | ----------------- | --------------------- | ----------- | ------------------------ |
/api/                          |       GET         |        -              |     HTML    | API index                |
/api/author                    |       GET         |        -              |     JSON    | List author              |
/api/author                    |       POST        |       JSON            |     JSON    | Create author            |
/api/author/{id}               |       GET         |      int(id)          |     JSON    | Get author by id         |
/api/author/{param}            |       PUT         |    JSON, param        |     JSON    | Update author by param   |
/api/author/{id}               |       DELETE      |   JSON, int(id)       |    boolean  | Delete author by id      |
/api/news                      |       GET         |          -            |     JSON    | List news                |
/api/news                      |       POST        |       JSON            |     JSON    | Create news              |
/api/news/{param}              |       GET         |       param           |     JSON    | List news by param       |
/api/news/{param}              |       PUT         |    JSON, param        |     JSON    | Update news by param     |
/api/news/{param}              |       DELETE      |   JSON, param         |    boolean  | Delete news by param     |
/api/news/author/{author_id}   |       GET         | JSON, int(author_id)  |     JSON    | Get news by author id    |
/api/news/author/{author_id}   |       DELETE      | JSON, int(author_id)  |    boolean  | Delete news by author id |
/api/image-news                |       GET         |          -            |     JSON    | List image news          |
/api/image-news                |       POST        |        JSON           |     JSON    | Create image news        |
/api/image-news/{id}           |       GET         |     JSON, int(id)     |     JSON    | Get image  by  id        |
/api/image-news/{id}           |       DELETE      |     JSON, int(id)     |    boolean  | Delete image by param    |
/api/image-news/{param}        |       PUT         |     JSON, param       |     JSON    | Update image by param    |
/api/image-news/news/{news_id} |       GET         |      int(news_id)     |     JSON    | List image by news id    |
/api/image-news/news/{news_id} |       DELETE      |  JSON, int(news_id)   |    boolean  | Delete image by news id  |

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
