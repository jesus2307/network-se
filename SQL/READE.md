# Captura de Bandera - SQL Injection

**Descripción:**  
Tu tarea consiste en identificar y explotar una vulnerabilidad de **SQL Injection** en una aplicación web alojada en un contenedor Docker.

**Dificultad:**  
Media

---

## Requisitos

1. Tener Docker instalado en tu máquina.
2. Contar con herramientas de análisis de seguridad web.
3. Familiaridad con ataques de inyección SQL.

---

## Instrucciones

1. **Levanta el entorno de trabajo:**  
   Inicia el contenedor desde la ubicación proporcionada:  
   ```bash
   docker run -d -p 8081:80 sql_vulnerable
