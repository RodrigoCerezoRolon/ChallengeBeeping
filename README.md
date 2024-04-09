Aquí tienes un ejemplo de archivo `README.md` que incluye las instrucciones para correr el proyecto:

```markdown
# Challenge Beeping

Este proyecto es un desafío llamado Challenge Beeping.

## Instrucciones de Instalación

1. Clona este repositorio en tu máquina local.

2. Instala las dependencias del proyecto ejecutando el siguiente comando en la raíz del proyecto:

   ```bash
   composer install
   ```

3. Crea una base de datos llamada `challengebeeping` en tu servidor MySQL.

4. Copia el archivo `.env.example` y renómbralo como `.env`. Luego, configura las variables de entorno para tu proyecto, incluyendo las siguientes:

   ```dotenv
   REDIS_HOST=localhost
   REDIS_PASSWORD=null
   REDIS_PORT=6379
   ```

5. Genera una nueva clave de aplicación ejecutando el siguiente comando:

   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones de la base de datos para crear las tablas necesarias en la base de datos `challengebeeping`:

   ```bash
   php artisan migrate
   ```

7. Ejecuta los seeders para poblar la base de datos con datos de prueba:

   ```bash
   php artisan db:seed
   ```

## Uso del Proyecto

- Para calcular el total de precios, ejecuta el siguiente comando:

  ```bash
  php artisan execute:total
  ```

- Para correr el job de cálculo de costos en segundo plano, ejecuta el siguiente comando:

  ```bash
  php artisan queue:work --queue=calculate_costs_queue
  ```

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).
```