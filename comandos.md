# Comandos básicos de Laravel

1. laravel new proyecto
2. php artisan serve
3. php artisan make:controller PageController
4. php artisan migrate
5. php artisan make:migration create_posts_table
6. php artisan make:model Post
7. php artisan migrate:refresh --seed
8. php artisan route:list
9. php artisan vendor:publish --tag=laravel-pagination
10. php artisan tkinter (dentro, ejecutar DB::connection()->getPdo(); para ver la conexión a la base de datos)
11. php artisan cache:clear (si se hacen cambios dentro de tkinter)
12. php artisan make:controller Api/V1/PostController --api --model=Post
13. php artisan make:resource V1/PostResource
14. php artisan test
15. php artisan make:test ExampleTest
16. php artisan make:test ExampleTest --unit
17. php artisan test --filter ExampleTest
18. php artisan make:livewire Task
19. php artisan db:seed
20. php artisan route:list --path=api

Por si hay que configurar alguna ruta de los componentes de livewire como por ejemplo la opción de layout:

21. php artisan livewire:publish --config

Recuerda descomentar las líneas referentes a DB en `phpunit.xml` si vas a trabajar con test en bases de datos.
