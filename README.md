# Teste Desenvolvedor PHP Laravel



## Índice

-   [Pré-requisitos](#pré-requisitos)
-   [Instalação](#instalação)
-   [Configuração do Banco de Dados](#configuração-do-banco-de-dados)
-   [Rodando o Projeto com XAMPP](#rodando-o-projeto-com-xampp)
-   [Testes](#testes)
-   [Tecnologias Usadas](#tecnologias-usadas)
-   [Contribuição](#contribuição)
-   [Licença](#licença)

## Pré-requisitos

Antes de começar, verifique se você tem os seguintes pré-requisitos instalados em sua máquina:

-   [XAMPP](https://www.apachefriends.org/index.html) (inclui PHP e MySQL)
-   [Composer](https://getcomposer.org/download/) (para gerenciar dependências do PHP)

## Instalação

Siga os passos abaixo para instalar e configurar o projeto:

1. **Clone o repositório:**

    ```bash
    git clone https://github.com/DiegoRodrigues007/4juris.git
    cd 4juris
    ```

2. **Instale as dependências do PHP:**

    ```bash
    composer install
    ```

## Configuração do Banco de Dados

1. **Crie um banco de dados:**

    - Acesse o painel do XAMPP e inicie o Apache e o MySQL.
    - Acesse o phpMyAdmin em `http://localhost/phpmyadmin` e crie um novo banco de dados:

    ```sql
    CREATE DATABASE nome_do_banco_de_dados;
    ```

2. **Configure o arquivo `.env`:**

    - Renomeie o arquivo `.env.example` para `.env`.
    - Abra o arquivo `.env` e configure as credenciais do banco de dados:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco_de_dados
    DB_USERNAME=root  # O padrão do XAMPP
    DB_PASSWORD=      # Deixe vazio se não houver senha
    ```

3. **Gere a chave da aplicação:**

    ```bash
    php artisan key:generate
    ```

4. **Migre o banco de dados:**

    - Execute as migrações para criar as tabelas necessárias:

    ```bash
    php artisan migrate
    ```

## Rodando o Projeto com XAMPP

1. **Inicie o servidor de desenvolvimento:**

    - Se você está usando o XAMPP, você não precisa do comando `php artisan serve`.
    - Em vez disso, coloque o diretório do seu projeto na pasta `htdocs` do XAMPP (normalmente em `C:\xampp\htdocs`).
    - Acesse o projeto no navegador em `http://localhost/nome-do-projeto/public`.

## Testes

Para executar os testes automatizados, use o seguinte comando:

```bash
php artisan test
```

## Tecnologias Usadas

-   PHP 8.x
-   Laravel
-   MySQL (via XAMPP)
-   JWT-Auth (Para autenticação)

