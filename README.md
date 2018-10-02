Projeto Tema Undescores + Bootstrap 4.1 
===

Caso de estudo.

Estou criando este projeto para estudo próprio, mais quem quiser sinta-se a vontade para baixar e utilizar em seu site Wordpress, você pode ajudar encontrando possíveis bug,s fiquem a vontade para reportar aqui.

Status do projeto
---------------

No momento o projeto ainda não é indicado para uso em produção pois ainda esta em desenvolvimento, pretendo em breve lançar um Build com uma versão estavel para produção.

Desenvolva em cima deste pacote
-----

Crie uma nova pasta dentro de wp-content/themes da sua instalação Wordpress local, baixe o zip ou faça clone do repositório

Necessário ter o Node.js instalado, execute o Npm install na pasta do projeto criada em /wp-content/themes/(pasta do tema) para instalar as dependencias.

abra o arquivo gulpfile.js e altere a linha de proxy do browserSync para o endereço que subiu a instalação local do seu Wordpress.


```javascript
//fazer o proxy para servidor PHP
    browserSync.init(files, {
        proxy: "http://localhost:8080/bs4base/"
    });
```

e pronto


* Licensed under GPLv2 or later. :) Use para fazer coisas legais!!!

Links úteis
---

* https://underscores.me/
* https://getbootstrap.com/docs/4.1/getting-started/introduction/
* https://browsersync.io/docs
* https://codex.wordpress.org/Main_Page
