## Laravel Vuetify SPA Starter with JWT Authentication

Laravel-VueJS starter build with Laravel 6.5.0 and Vuetify 2.1.9 with JWT authentication 1.0.0-rc.5

## Includes

- **[Laravel 6.5.0](https://laravel.com/docs/6.x)**
- **[Vue 2.5.17](https://vuejs.org/)**
- **[Vuetify 2.1.9](https://vuetifyjs.com/en/getting-started/quick-start)**
- **[Vue Router 3.1.3](https://router.vuejs.org/)**
- **[Vuex 3.1](https://vuex.vuejs.org/)**
- **[JWT 1.0.0-rc.5](https://github.com/tymondesigns/jwt-auth)**

## Installation

<ul>
<li>Clone the repo with <code>git clone https://github.com/Tareque2208/laravel-vuetify-spa-starter-with-JWT.git</code></li>
<li>Run <code>cd laravel-vuetify-spa-starter-with-JWT</code></li>
<li>Run <code>cp .env.example .env</code></li>
<li>Configure <code>.env</code></li>
<li>Create <code>cache</code>,<code>sessions</code>,<code>views</code> folders in <code>storage/framework</code></li>
<li>Run <code>composer install</code></li>
<li>Run <code>php artisan key:generate</code></li>
<li>Run <code>php artisan jwt:secret</code></li>
<li>Run <code>php artisan migrate</code></li>
<li>Run <code>npm install</code></li>
</ul>

## Usage

<ul>
<li>Run <code>php artisan serve</code> for running laravel</li>
<li>Run <code>npm run hot</code> for serve with hot reloading</li>
<li>Run <code>npm run watch</code> for build and watch</li>
<li>Run <code>npm run prod</code> for production buid</li>
</ul>
