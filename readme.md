# Rest-api mapeado no modelo CRUD
## Nome: Gustavo Gois de Sena Rafael

REST é um dos modelos de arquitetura que foi descrito por Roy Fielding, um dos principais criadores do protocolo HTTP, em sua tese de doutorado e que foi adotado como o modelo a ser utilizado na evolução da arquitetura do protocolo HTTP.

Muitos desenvolvedores perceberam que também poderiam utilizar o modelo REST para a implementação de Web Services, com o objetivo de se integrar aplicações pela Web, e passaram a utilizá-lo como uma alternativa ao SOAP.

REST na verdade pode ser considerado como um conjunto de princípios, que quando aplicados de maneira correta em uma aplicação, a beneficia com a arquitetura e padrões da própria Web.

Ja O “CRUD é simples e rápido” são as quatro operações basicas utilizadas em bases de dados relacionais (RDBMS) ou em interface para utilizadores para criação, consulta, atualização e destruição de dados sendo elas(Create, Read, Update e Delete ).

Neste projeto, foi criado uma API que solicita cada função descrita acima através de rotas construídas, permitindo que cada uma seja chamada separadamente.

# Detalhes do Rest-api
 ## Requisitos para rodar a API

-Composer 1.8.4
-Laravel 5.8
-Banco de dados mysql ou sql
-Editor de texto
-servidor oline ou localhost(xampp ou wamp)
-Postman

## Etapas processadas:

* Cria-se o banco de dados no *phpMyAdmin* dando-lhe um nome: **bancoteste** por exemplo. Com isso já podemos configurar o arquivo *.env* que esta na raiz do projeto, colocando as informações do usuario do BD, senha e nome do banco.

*O arquivo .env foram adicionadas a seguintes informações para rodar o migration.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rest_api
DB_USERNAME=usuario1
DB_PASSWORD=teste@123teste
Permitindo ao usúario rodar o migration assim crinado um estrutura de migrção do banco.

* Abra o **Shell** novamente e digite:


php artisan make:migration create_nametable_table

//esse comando cria a estrutura da tabela que queremos adicionar ao banco.

* Ainda no **Shell**…

php artisan make:model NameModel

//esse passo criará a *model* que faz a conexão direta com a tabela do banco.

* Continuando:

php artisan make:controller NameController

//esse passo criará a *controller*, que será responsável pela lógica da aplicação.

Esses são as principais etapas, para criar a estrutura logica do **CRUD**.

Foi criado um arquivo **usarios.php** dentro da pasta **seeds** com um pequeno exemplo para popular o banco. As rotas do API estão configuradas no **api.php** dentro da pasta **routes**.

## Tecnologias Usadas

* VsCode
* Sublime
* Mysql(phpMyAmin)
* Postman
* Laravel
* Xampp

* **Laravel:** <https://laravel.com/docs/5.8>
* **Laravel Brasil:** <http://www.laravel.com.br/>
* **GitHub:** <https://github.com/laravelbrasil>





