<h1 align="center" > Acessibilidade-Cypress <h1>

<p align="center">
<img loading="lazy" src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge"/>
</p>

O projeto base é um site onde são realizados avaliações acerca de acessibilidade de outros sites. A extensão desse, existe testes End-to-End acima do projeto realizados em cypress.

* [Como rodar o projeto localmente](#Como-rodar-o-projeto-localmente)
* [Preparando o ambiente para os testes](#Preparando-o-ambiente-para-os-testes)

<h1>Como rodar o projeto localmente<h1>

Primeiramente, é preciso instalar os seguintes softwares em sua máquina. 

- [NodeJs](https://nodejs.org/en)


- [Xampp](https://www.apachefriends.org/pt_br/index.html) 


- [Composer](https://getcomposer.org/download/ ) 


- [MySQL workbench](https://www.mysql.com/products/workbench/ ) 


*Todos os softwares podem ser instalados da forma padrão como é recomendado, ou também seguindo suas próprias preferências.* 

 

<h2>Alteração necessária no xampp <h2>

Após a instalação do mesmo, será necessário abrir a sua pasta de instalação e procurar a pasta “php” (possivelmente no endereço “C:\xampp\php”). Procure o arquivo também chamado “php” do tipo “parâmetro de configuração” e o abra com algum programa de editor de texto (como bloco de notas). 

Ache o texto “;extension=zip” e exclua o “;” que precede o “extension”. 

 

-  Xampp 

Abra o xampp e dê “start” no “MySQL”. 

 

-  MySQL Workbench

Abra o workbench, crie uma conexão e execute o código “create database laravel” 

 

Link para clonar o projeto: https://github.com/Ferreira327/acessibilidade.git 

 

<h2>Com o projeto clonado... <h2>

1. No terminal aberto no projeto dê o comando `composer i` para a instalação do composer; 

2. Adicione o arquivo “.env” na pasta do projeto (perceba que existe a chance do “.” sumir, se atente em renomear o arquivo); 

3. Abra o arquivo “.env”, editando a linha que possui “DB_PASSWORD", apagando a senha que vem como padrão (admin), deixando espaço vazio após o “=”; 

4. Cole o arquivo “2024_05_01_220147_create_erros_table” na pasta “...database\migrations”; 

5. Execute o código  `php artisan migrate`, no qual dará um erro quando for realizada a ação no arquivo recém adicionado; 

6. Exclua o arquivo “2024_05_01_220147_create_erros_table”, o qual foi adicionado; 

7. Execute novamente o `php artisan migrate`; 

8. Execute os seguintes códigos em sequência: 

   -`npm i  `

   -`npm run dev `

   -`php artisan serve `

9. Agora abra o MySQL Workbench e execute o código que está no arquivo “Inserir itens no Banco”, basta copiar o texto. 