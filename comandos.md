# Comandos básicos

1. php artisan serve
2. npm run dev
3. php artisan make:controller PageController
4. php artisan migrate
5. php artisan make:migration create_posts_table
6. php artisan make:model Post
7. php artisan migrate:refresh --seed
8. php artisan route:list
9. php artisan vendor:publish --tag=laravel-pagination
10. php artisan tkinter (dentro ejecutar DB::connection()->getPdo(); "Para ver la conexión a la bse de datos")
    Dentro de tkinter si se hacen cambios se puede ejecutar:
11. php artisan cache:clear
12. php artisan make:controller Api/V1/PostController --api --model=Post
13. php artisan make:resource V1/PostResource
14. php artisan test
15. php artisan make:test ExampleTest
16. php artisan make:test ExampleTest --unit
17. php artisan test --filter ExampleTest
    Si se va a trabajar con test en bases de datos, descomentar las líneas referentes a DB en `phpunit.xml`
