# Capture the flag - Brute Force SSH

**Description:**  
Your task is to identify and exploit a weakness in the SSH service of a server configured in a Docker container.

**Difficulty:**  
Medium

---

## Requirements

1. Have Docker installed on your machine.
2. Have adequate tools for analysis and brute force attacks.
3. A password dictionary file (or create your own).
---

## Instrucctions

1. **Raise the work environment:**  
  Start the container from the provided location:
   ```bash
   docker run -d -p 2222:22 ssh_vulnerable
