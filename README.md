# Seeders y migraciones en Laravel para estados y municipios de México

Migraciones de estados, municipios y tabla pivote para unir ambos, así como también los Seeders para insertar los datos a través de Laravel.

Se requiere que se encuentre referenciado en DataBaseSeeder.php de la siguiente manera
```php
$this->call(StateSeeder::class);
$this->call(CitySeeder::class);
$this->call(StateCitySeeder::class)
```
Comando para ejecutar el Seeder
```sh
php artisan db:seed
```



