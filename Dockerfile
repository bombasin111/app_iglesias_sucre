# Dockerfile falso para evitar que Render use Docker
FROM alpine:latest
CMD echo "No se está usando Docker, Render está usando PHP y Apache."