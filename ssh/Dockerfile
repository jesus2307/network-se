# Usa una imagen base ligera con OpenSSH
FROM ubuntu:22.04

# Instala el servidor SSH
RUN apt-get update && apt-get install -y openssh-server

# Crea el directorio necesario para SSH
RUN mkdir /var/run/sshd

# Permite el acceso como root con contraseña
RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config

# Exponer el puerto SSH
EXPOSE 22

# Configura la contraseña débil
ARG ROOT_PASSWORD
RUN echo "root:${ROOT_PASSWORD}" | chpasswd

# Configura un entrypoint para iniciar el servicio SSH
CMD ["/usr/sbin/sshd", "-D"]

