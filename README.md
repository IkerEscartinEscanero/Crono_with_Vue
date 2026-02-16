## PERMISOS
### SPATIE
Instalar librería para gestionar roles:
```bash
composer require spatie/laravel-permission
```

Publicar migraciones:
```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

Ejecutamos las migraciones:
```bash
php artisan migrate
```
En nuestra base de datos se podrán visualizar en modo diseñador 
las tablas publicadas.

* Añadir en el modelo User la extensión "HasRoles", el cual es 
la clase de permisos, para verificar el rol de cada usuario.




