# Prueba Técnica PHP

## Introducción
El propósito de esta prueba técnica es evaluar el nivel del candidato en relación a las tecnologías requeridas para el puesto. Estas tecnologías son: PHP, MySQL y Git.

## Consignas
### Paso 1: Configuración de la Base de Datos
1. Crear una base de datos llamada `crud_user`.
2. Dentro de la base de datos, crear una tabla llamada `users` con las siguientes columnas:
   - `id` (INTEGER, Primary Key, Auto Incrementable)
   - `name` (VARCHAR(50))
   - `surname` (VARCHAR(50))
   - `email` (VARCHAR(100), Unique)
   - `password` (VARCHAR(255))

### Paso 2: Formulario de Registro de Usuarios
1. Desarrollar un formulario HTML que permita registrar usuarios.
2. El formulario debe solicitar los siguientes datos:
   - Nombre
   - Apellido
   - Correo electrónico
   - Contraseña
   - Repetir la contraseña
3. Los datos del formulario se envían al backend a través del método POST.
4. El backend se encarga de almacenar los usuarios en la base de datos creada en el Paso 1.
5. Se deben realizar validaciones en el backend, como asegurarse de que todos los campos estén completos, validar el formato del correo electrónico y verificar que el correo no esté duplicado en la base de datos. Las contraseñas deben coincidir.
6. Las contraseñas deben guardarse encriptadas en la base de datos utilizando la función `password_hash`.

### Paso 3: Repositorio Público y Compartir
1. Una vez completada la Consigna 2, crear un repositorio público en una plataforma de control de versiones (por ejemplo, GitHub, GitLab, etc.).
2. Subir el proyecto al repositorio y compartir el enlace con el entrevistador.

## Contacto
Si tienes alguna pregunta o necesitas asistencia con la prueba técnica, no dudes en ponerte en contacto con nosotros.

¡Buena suerte!
