## Este projeto foi desenvolvido em Laravel, MySQL, Boostrap e JavaScript.

Abaixo, temos as principais tecnologias por detrás desta aplicação:

## FRONTEND:

HTML
CSS
Boostrap
JAVASCRIPT

## BACKEND:

LARAVEL
PHP
MySQL

## 🚀 Como começar

## Geral:

Use o Visual Studio Code e instale os plugins eslint, prettier e editor config em sua IDE.
Instale o https://brew.sh.

## Instalações necessárias para rodar o projeto:

Para instalar o Laravel, é necessário ter o Composer já instalado. Se você não possuir o Composer em seu computador, poderá ver como realizar sua instalação através desse link: https://getcomposer.org/

É necessário possuir o PHP configurado em seu computador. 

Neste projeto, é usada a versão PHP 7.3.29.

Depois de instalar o PHP e o Composer, você pode criar novos projetos Laravel instalando globalmente o instalador do Laravel via Composer:

"composer global require laravel/installer".

Para mais informações sobre a instalação do Laravel, acesse sua documentação em: https://laravel.com/docs/9.x

Inicie o servidor de desenvolvimento local do Laravel usando o comando Laravel's Artisan CLI:
"php artisan serve".

## Configurando o arquivo .env do aplicativo

O MySQL é usado neste projeto para armazenar alguns dados em um banco de dados. Por padrão, o ".env", arquivo de configuração do seu aplicativo, especifica que o Laravel estará interagindo com um banco de dados MySQL e acessará o banco de dados em 127.0.0.1.

Cada instalação, em um novo ambiente, exige um arquivo de ambiente personalizado para definir coisas como as configurações de conexão com o banco de dados, as opções de depuração, a URL do aplicativo, entre outros itens que possam variar, dependendo do ambiente em que o aplicativo esteja funcionando.

## Executar a migração

As migrações são um tipo de controle de versão para seu banco de dados. Eles permitem que uma equipe modifique o esquema do banco de dados e se mantenha atualizado sobre o estado atual do esquema.

Para executar a migração do projeto, use o comando:
"php artisan migrate"
