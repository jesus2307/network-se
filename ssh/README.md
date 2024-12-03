# Captura de Bandera - Fuerza Bruta SSH

**Descripción:**  
Tu tarea consiste en identificar y explotar una debilidad en el servicio SSH de un servidor configurado en un contenedor Docker.

**Dificultad:**  
Media

---

## Requisitos

1. Tener Docker instalado en tu máquina.
2. Contar con herramientas adecuadas para análisis y ataques de fuerza bruta.
3. Un archivo de diccionario de contraseñas (o crear uno propio).

---

## Instrucciones

1. **Levanta el entorno de trabajo:**  
   Inicia el contenedor desde la ubicación proporcionada:  
   ```bash
   docker run -d -p 2222:22 ssh_vulnerable
