# Desafio - Paggi

Desafio realizado para a empresa Paggi, onde foi feito um pequeno sistema de manipulação de cartão de crédito.

O sistema contém a API para operações no banco de dados (buscar, apagar, atualizar e inserir), utilizando:

  - Java
  - JPA - Hibernate
  - Jersey Framework
  - Tomcat WebServer
  - Maven
  - MySQL
  
E também a aplicação web para consumo da API, utilizando:

  - PHP - Laravel
  - GuzzleHttp
  - HTML5, CSS e JavaScript
  
Foi utilizado GuzzleHttp para consumo da API por ser uma biblioteca simples e intuitiva, de código limpo e bastante "legível", além de oferecer funcionalidades como a realização de requisições assíncronas.

Para rodar o projeto, é necessário:

  1. Criar um schema no banco de dados local (MySQL) chamado 'paggi-teste'
  2. No projeto "paggi-teste-api", mudar o username e password no arquivo "persistence.xml", localizado em src/META-INF
  3. Fazer deploy do projeto "paggi-teste-api" no WebServer Tomcat 9 na porta 8080 do localhost.
  4. Subir o projeto "paggi-teste-app" (seja pelo artisan ou xampp, ou qualquer outro servidor)
  5. Testar no link /cartaoCredito/criar (em servidor xampp ou semelhante, não esquecer do /public antes do /cartaoCredito)
