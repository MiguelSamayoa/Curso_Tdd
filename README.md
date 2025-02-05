# Sistema de Gestión de Repositorios

Este proyecto es el resultado del **Curso de Desarrollo en Laravel con TDD**. Se trata de un sistema que permite registrar y gestionar repositorios utilizando las mejores prácticas de desarrollo, aplicando la metodología **Test-Driven Development (TDD)**. 

## Características

- **Inicio de Sesión**: Implementado con **Jetstream**, permitiendo la autenticación de usuarios.
- **Gestión de Repositorios**:
  - Crear, editar y eliminar repositorios.
  - Cada repositorio incluye:
    - Título
    - Descripción
    - Enlace al repositorio
- **Acceso Público y Privado**:
  - Los repositorios son visibles para todos los usuarios, incluso si no están registrados.
  - Solo los usuarios autenticados pueden crear o modificar sus propios repositorios.

## Tecnologías Utilizadas

- **Framework**: Laravel
- **Autenticación**: Laravel Jetstream
- **Base de Datos**: MySQL (configurable según el entorno)
- **Testing**: PHPUnit
- **Metodología de Desarrollo**: Test-Driven Development (TDD)

## Requisitos

- PHP 8.1 o superior
- Composer
- MySQL
- Node.js y NPM

## Instalación y Configuración

1. Clona este repositorio:

   ```bash
   git clone https://github.com/tu_usuario/nombre-del-repo.git
   ```

2. Accede al directorio del proyecto:

   ```bash
   cd nombre-del-repo
   ```

3. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

4. Instala las dependencias de JavaScript:

   ```bash
   npm install
   ```

5. Configura el archivo `.env`:

   ```bash
   cp .env.example .env
   ```
   Modifica las variables necesarias, como la configuración de la base de datos.

6. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

7. Migra y configura la base de datos:

   ```bash
   php artisan migrate
   ```

   Si quieres usar los datos semilla incluidos ejecuta
   ```bash
   php artisan migrate --seed
   ```
   
8. Compila los assets:

   ```bash
   npm run dev
   ```

## Ejecución

Inicia el servidor de desarrollo:

```bash
php artisan serve
```

Accede a la aplicación en: [http://localhost:8000](http://localhost:8000)

## Testing

Ejecuta las pruebas para garantizar el correcto funcionamiento del proyecto:

```bash
php artisan test
```

## Contribución

¡Las contribuciones son bienvenidas! Por favor, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una rama con tu feature:
   ```bash
   git checkout -b mi-feature
   ```
3. Realiza tus cambios y haz commit:
   ```bash
   git commit -m "Añadir nueva característica"
   ```
4. Envía los cambios:
   ```bash
   git push origin mi-feature
   ```
5. Abre un Pull Request.

## Autor

Desarrollado por Miguel Samayoa (https://www.linkedin.com/in/miguel-samayoa-0153562b2/).
