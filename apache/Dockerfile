
# Imagen base
FROM ubuntu:20.04

# Configuración no interactiva
ENV DEBIAN_FRONTEND=noninteractive

# Instalación de dependencias
RUN apt-get update && apt-get install -y \
    apache2 \
    curl \
    wget \
    vim

# Crear el directorio "hidden" y añadir un archivo de flag
RUN mkdir /var/www/html/hidden && echo "Flag: CTF{hidden_directory_flag}" > /var/www/html/hidden/flag.txt

# Habilitar opciones de indexación en Apache
RUN echo "<Directory /var/www/html/hidden>\n    Options Indexes\n    Require all granted\n</Directory>" >> /etc/apache2/apache2.conf

# Exponer el puerto 80
EXPOSE 80

# Iniciar el servidor
CMD ["apachectl", "-D", "FOREGROUND"]
