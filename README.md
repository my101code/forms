# Forms PHP

Proyecto de ejemplo para practicar formularios en PHP con diferentes métodos de envío y tipos de inputs.

## Descripción

Este repositorio contiene varios ejemplos básicos de formularios web en PHP:

- Selección de usuario mediante GET
- Selección de usuario mediante POST
- Uso de radio buttons y checkbox para elegir datos
- Validación simple del lado del servidor
- Visualización de la selección realizada por el usuario

## Estructura

- `data.php`: datos de ejemplo para usuarios y suscripciones.
- `input_checkbox/`: formulario con selección de usuario y colores usando checkboxes.
- `seleccion_use_get/`: ejemplo con envío de datos por URL mediante GET.
- `seleccion_use_post/`: ejemplo con envío de datos por POST.

## Ejemplo principal

El ejemplo más completo está en `input_checkbox/users.php` y `input_checkbox/suscripcion.php`.

### Flujo

1. El usuario elige un nombre de la lista.
2. El usuario selecciona uno o varios colores.
3. El formulario se envía por POST.
4. El servidor valida la entrada.
5. Se muestra el resultado final en pantalla.

## Requisitos

- PHP 7.4 o superior
- Un servidor web local como XAMPP, WAMP o PHP built-in server

## Cómo ejecutar

### Con XAMPP

1. Copia esta carpeta dentro de `htdocs`.
2. Inicia Apache en XAMPP.
3. Abre la URL:

   `http://localhost/proyectos/php-project/forms/input_checkbox/users.php`
   `http://localhost/proyectos/php-project/forms/seleccion_use_get/users.php`
   `http://localhost/proyectos/php-project/forms/seleccion_use_post/users.php`

### Con PHP built-in server

Desde la raíz del proyecto ejecuta:

```bash
php -S localhost:8000
```

Y luego accede a:

```text
http://localhost:8000/input_checkbox/users.php
```

## Notas

- El código usa `filter_var` y validación básica para evitar entradas no válidas.
- Se sanitiza la salida HTML con `htmlspecialchars` para evitar problemas de seguridad.
- Los formularios están diseñados para fines educativos y de práctica.
