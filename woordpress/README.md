# Capture the flag: WordPress Vulnerable

This container contains a vulnerable WordPress for security practices.

## Instructions
1. Start services with `docker-compose up -d`.
2. Access a [http://localhost:8080](http://localhost:8080).
3. Your goal is to find WordPress <= 4.2 - Unauthenticated Stored Cross-Site Scripting (XSS) and reproduce it.
   
## Context
- **Vulnerable version:** WordPress 4.2.
- **Difficulty:** Difficult.
