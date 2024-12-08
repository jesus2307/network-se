# Capture the Flag - SQL Injection

**Description:** 

Your task is to identify and exploit a **SQL Injection** vulnerability in a web application hosted in a Docker container.

**Difficulty:**  
Medium

---

## Requirements

1. Have Docker installed on your machine.
2. Have web security analysis tools.
3. Familiarity with SQL injection attacks.

---

## Instructions

1. **Raise the work environment:**  
   Start the container from the provided location:
   ```bash
docker run -d -p 8081:80 sql_vulnerable
This will make the app available on [http://localhost:8081](http://localhost:8081).

2. ## Analyze the application:
The application has a vulnerability that can be discovered by analyzing traffic and using standard testing techniques.

3. ## Initial scan:
Generate traffic to the app and perform analysis with your favorite security tools.

4. ## Find and exploit the vulnerability:
Once the vulnerability is identified, use your skills to exploit it and access the required information.
