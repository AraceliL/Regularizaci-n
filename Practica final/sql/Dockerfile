#Imagen de MySQL
FROM mysql:5.7

#Establecer la contraseña de root
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=crud

#Copiar el script
COPY ./sql/ /docker-entrypoint-initdb.d/





