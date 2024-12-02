
# Apache Vulnerable CTF

## Descripción del reto
Un servidor Apache vulnerable con configuraciones inseguras. La flag está oculta en la página principal del servidor.

## Instrucciones
1. Construye la imagen Docker:
    ```bash
    docker build -t apache_vuln_ctf .
    ```
2. Ejecuta el contenedor:
    ```bash
    docker run -d -p 8080:80 apache_vuln_ctf
    ```
3. Escanea el puerto 8080 de la máquina anfitriona.
4. Encuentra la flag accediendo al contenido del servidor.

## Nivel de dificultad
Fácil.
