Pasos para ejecutar el entorno:
Construye y levanta el servicio:

Desde la carpeta del proyecto, ejecuta:

bash
Copiar código
docker-compose up --build
Conéctate al servicio SSH:

Usa un cliente SSH desde el host:

bash
Copiar código
ssh root@localhost -p 2222
Contraseña: 123456 (o la que configures en ROOT_PASSWORD).