Projeto simples para demonstração de Master-Detail com Laravel 8.

Master-Detail de forma simplificada significa "Mestre-Detalhe", mas o que isso significa?
No master-detail, temos um objeto mestre o qual possui detalhes (relação com outros objetos).

Nesse projeto utilizamos o master-detail para fazer a relação entre produtos e categorias, onde uma categoria pode possuir muitos produtos e um produto pertence a uma categoria.

Instruções:

1- git clone https://github.com/gutoholiveira/master_detail_laravel.git

2- configurar o arquivo .env com a conexão do banco de dados

3- cd master_detail_laravel

4- composer install

5- php artisan key:generate

6- php artisan migrate

7- php artisan serve


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
