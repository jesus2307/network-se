
# Apache Vulnerable CTF

## Description of the challenge
A vulnerable Apache server with insecure configurations. The flag is hidden on the server's main page.

## Instructions
1. Build the Docker image:
    ```bash
    docker build -t apache_vuln_ctf .
    ```
2. Run the container:
    ```bash
    docker run -d -p 8080:80 apache_vuln_ctf
    ```
3. Scans port 8080 of the host machine.
4. Find the flag by accessing the server's content.

## Difficulty level
Easy.
