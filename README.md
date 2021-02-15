!!! this project is for deploying on laradock (https://github.com/repetitor/stream202-laradock)

##step1 (https://github.com/repetitor/stream202-laravel8/tree/step1)

https://www.youtube.com/watch?v=HX2qiMxZVD0&t=0s - запустим ларавель чисто в докере (на ларадоке)

https://www.youtube.com/watch?v=iN5k3JKgOks&t=0s - применяем xdebug in laravel
``` 
git checkout step1
cp .env-example-repetitor202 .env
```
##step2 (https://github.com/repetitor/stream202-laravel8/tree/step2_postgres)

https://www.youtube.com/watch?v=06zV86cRsOI&t=0s - запускаем php artisan migrate in postgres
``` 
git checkout step2_postgres
cp .env-example-repetitor202 .env
```
##step3 (https://github.com/repetitor/stream202-laravel8/tree/step3-migrate-seed)

https://www.youtube.com/watch?v=5Z9sbFZ9UrY&t=0s - laravel migrate seed
``` 
git checkout step3-migrate-seed
cp .env-example-repetitor202 .env

# php artisan php artisan make:migration create_flights_table
# php artisan migrate

# php artisan make:seeder UserSeeder
# php artisan db:seed
# php artisan db:seed --class=UserSeeder
```
##step4 (https://github.com/repetitor/stream202-laravel8/tree/step4-make-model-a-DTO-translator-service)
``` 
git checkout step4-make-model-a-DTO-translator-service
cp .env-example-repetitor202 .env

# php artisan make:model Article -a
# Route::apiResource('articles', \App\Http\Controllers\ArticleController::class);
```

##step5 (https://github.com/repetitor/stream202-laravel8/tree/step5-clockwork)
``` 
https://underground.works/clockwork/
composer require itsgoingd/clockwork
php artisan vendor:publish
1
http://localhost:180/clockwork/app#
```

##step6 (https://github.com/repetitor/stream202-laravel8/tree/step6-database-EAV)
``` 
# php artisan migrate

# console-query in container with db
-- CREATE INDEX "filmAttributeValues_subtitres_index" ON "filmAttributeValues" USING btree("val_bool")
--     WHERE "attribute_id" = 1;
-- CREATE INDEX "filmAttributeValues_subtitres_true_index" ON "filmAttributeValues" USING btree("val_bool")
--     WHERE "attribute_id" = 1 AND "val_bool" = TRUE;
-- create index "filmAttributeValues_val_text_not_null_index"
--     on "filmAttributeValues" (val_text)
--     where (val_text IS NOT NULL);
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
