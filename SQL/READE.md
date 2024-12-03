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
Esto hará que la aplicación esté disponible en [http://localhost:8081](http://localhost:8081).

## Analiza la aplicación:
La aplicación tiene una vulnerabilidad que puede ser descubierta analizando el tráfico y utilizando técnicas de prueba estándar.

## Escaneo inicial:
Genera tráfico en la aplicación y realiza un análisis con tus herramientas de seguridad favoritas.

## Encuentra y explota la vulnerabilidad:
Una vez identificada la vulnerabilidad, utiliza tus habilidades para explotarla y acceder a la información requerida.
