Projeto Tema Undescores + Bootstrap 4.1 
===

Caso de estudo.

Estou criando este projeto para estudo próprio, mais quem se sentir a vontade para baixar e utilizar em seu site Wordpress, pode ajudar encontrando possíveis bug,s fiquem a vontade para reportar aqui.

Status do projeto
---------------

No momento o projeto ainda não é indicado para uso em produção pois ainda esta em desenvolvimento, pretendo em breve lançar um Build com uma versão estavel para produção.

Desenlvolva em cima deste pacote
-----

Necessário ter o Node.js instalado, execute o Npm install na pasta do projeto para instalar as dependencias.

abra o arquivo gulpfile.js e altere a linha de proxy do browserSync para o endereço que subiu a instalação local do seu Wordpress.


```javascript
//fazer o proxy para servidor PHP
    browserSync.init(files, {
        proxy: "http://localhost:8080/bs4base/"
    });
```

e pronto


* Licensed under GPLv2 or later. :) Use para fazer coisas legais!!!