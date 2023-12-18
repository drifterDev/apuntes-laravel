Se requiere el componente de sanctum para poder realizar autenticación con Laravel en la api.

Al realizar la petición a la API, activar en los headers el campo accept con el valor application/json, para que la respuesta sea en formato JSON.

Acceder a api/login poner email, password y name en el body de la petición, para que se cree el token de autenticación.

Acceder a api/vx/posts y poner en los headers el campo Authorization con el valor Bearer {token}, para que se pueda acceder a la api.
