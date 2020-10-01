# Teste da COMPUFOUR

## Api Rest Laravel


### End Points da api
- Endpoint para obter uma lista dos próximos filmes.
- O mesmo endpoint deve retornar a lista dos próximos 20 filmes conforme o parâmetro de página é fornecido.
- Endpoint para obter uma lista dos filmes mais bem avaliados.
- O mesmo endpoint deve retornar a lista dos próximos 20 filmes conforme o parâmetro de página é fornecido.
- Endpoint para obter um único filme específico.
- O mesmo endpoint deve retornar todos os vídeos relacionados a filmes com uma única solicitação.
- Endpoint para obter uma lista de gêneros.
- O mesmo endpoint deve retornar um único gênero por id.

## Questões sobre conhecimento foram respondidas no arquivo

```
questoes.txt
```


## Instruções para rodar o projeto back-end Laravel

## Pacotes

Pacotes do Composer PHP

```
composer install
```

Pacotes do Node.JS

```
npm install && npm run dev
```

## Migration

Bando de dados **MySQL**

```
php artisan migrate
```

Gere os registros do banco de dados para teste

```
php artisan db:seed --class=FilmeSeeder
php artisan db:seed

```
