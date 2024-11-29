# Usar una imagen base de Apache
FROM httpd:2.4

# Copiar un archivo de configuración inseguro
COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf

# Copiar una página web vulnerable
COPY ./vulnerable-site /usr/local/apache2/htdocs/

# Exponer el puerto del servidor web
EXPOSE 80

# Comando para iniciar Apache
CMD ["httpd-foreground"]
