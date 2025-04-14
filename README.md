# Projeto Salão Leila

Este readme irá ajudá-lo a configurar e rodar o projeto com Docker, além de instalar as dependências necessárias.

### Instalando o Docker

**No Windows ou Mac:**
   - Siga instruções na documentação oficial: [Documentação Oficial Docker](https://docs.docker.com/get-started/).

### Configuração do Projeto

**Criar o arquivo `.env`:**

   Na raiz do projeto, crie um arquivo `.env` com o seguinte conteúdo:

   ```dotenv
   APP_ENV=dev

   # MySQL Configurações
   MYSQL_ROOT_PASSWORD=root
   MYSQL_DATABASE=salao
   MYSQL_USER=salaoleila
   MYSQL_PASSWORD=default
   MYSQL_PORT=3306

   DATABASE_URL="mysql://salaoleila:default@mysql:3306/salao?charset=utf8"
   ```

### Rodando o Projeto

1. **Iniciar os containers com Docker Compose:**

   Na raiz do projeto, onde está o arquivo `docker-compose.yml`, execute o seguinte comando para iniciar os containers:

   ```bash
   docker-compose up -d
   ```

2. **Entrar no container PHP:**

    Após os containers estarem em execução, entre no container PHP com o seguinte comando:

    ```bash
   docker exec -it php bash
   ```

3. **Instalar as dependências do Composer:**

    Dentro do container PHP, execute o seguinte comando para instalar as dependências:

    ```bash
    composer install
    ```

4. **Criar o banco de dados com Doctrine:**

   Ainda dentro do container:

    ```bash
   php bin/console doctrine:database:create
   ```

5. **Atualizar o schema do banco de dados (com --force):**

   Ainda dentro do container:

    ```bash
   php bin/console doctrine:schema:update --force
   ```
## Acessando o Projeto

Após a instalação das dependências, você pode acessar o projeto no navegador através da URL:

[http://localhost:8000/login](http://localhost:8000/login)