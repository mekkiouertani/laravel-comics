# laravel-comics

-   Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
-   Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

## Bonus:

-   Create più pagine istituzionali che condividono lo stesso layout (utilizzando il routing)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

```bash

cd cartella_esercizi

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd  .\your_project_name_here

code . -r

php artisan serve

ctrl + c

```

## Configurazione Laravel

```bash

composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm  install

npm install --save @fortawesome/fontawesome-free

#in vite.config aggiungo
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartelal webfont di fortawesome dentro resources
```

## Comandi Git

```bash
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/mekkiouertani/template_laravel_base.git
git push -u origin main
```

## Clone Repository

```bash
# creo nuova repo su github da template e la clono su vscode
composer install

# copiare .env.examples e rinominarla in .env
php artisan key:generate

npm install
```
