# Teste da COMPUFOUR

## Api Rest Laravel


## End Points da api

- Endpoint para obter uma lista dos próximos filmes.
**http://127.0.0.1:8000/api/filme/lista**

- O mesmo endpoint deve retornar a lista dos próximos 20 filmes conforme o parâmetro de página é fornecido.
**http://127.0.0.1:8000/api/filme/lista/20**


- Endpoint para obter uma lista dos filmes mais bem avaliados.
**http://127.0.0.1:8000/api/filme/tops/**

- O mesmo endpoint deve retornar a lista dos próximos 20 filmes conforme o parâmetro de página é fornecido.
**http://127.0.0.1:8000/api/filme/tops/20**

- Endpoint para obter um único filme específico.
**http://127.0.0.1:8000/api/filme/nomedofilmeparaprocurar**

- Endpoint retorna todos filmes de uma mesma categoria (drama, acao, comedia, ficcao).
**http://127.0.0.1:8000/api/filme/categoria/drama** 

- Endpoint para obter uma lista de gêneros.
**http://127.0.0.1:8000/api/genero/**

- O mesmo endpoint deve retornar um único gênero por id.
**http://127.0.0.1:8000/api/genero/1**

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
php artisan db:seed
```

## Executando

```
php artisan serv
```
Irá rodar em **http://127.0.0.1:8000**
