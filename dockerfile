# Usando a imagem PHP oficial
FROM php:7.4-apache

# Atualizando o sistema e instalando dependências
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    mariadb-server \
    && rm -rf /var/lib/apt/lists/*

# Copiando os arquivos do projeto para dentro do contêiner
COPY . /var/www/html

# Expondo a porta 80 para acessar o servidor web
EXPOSE 80

# Expondo a porta 3306 para acessar o MariaDB
EXPOSE 3306

# Comando para iniciar o MariaDB e o Apache
CMD ["bash", "-c", "service mariadb start && apache2-foreground"]
