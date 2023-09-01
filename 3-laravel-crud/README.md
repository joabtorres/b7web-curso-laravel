# MODULO 3: CRUD

-- iniciando servidor:
`php artisan server`

-- docker encerrando servidor:
`php artisan down`

--gera uma key para aplicação
`php artisan artisan key:generate`


## MIGRATION
-- criando uma migration da tabela do banco

`php artisan make:migration create_posts_table`

-- remove todas as tabelas criadas

`php artisan migrate:rollback`

-- exportando os dados da migrate para banco de dados

`php artisan migrate`

-- comando para atulizar as tabelas e colunas do banco de dados
`php artisan migrate:fresh`

## MODEL

-- criando model

`php artisan make:model NOME_DO_CONTROLLER`

## CONTROLLER

-- criando controller
`php artisan make:controller NOME_DO_CONTROLLER`

-- criando controller singleton
`php artisan make:controller NOME_DO_CONTROLLER --invokable`

-- criando controller resource (crude)
`php artisan make:controller NOME_DO_CONTROLLER --resource`

-- criando controller resource (crud) vinculando com o model
`php artisan make:controller NOME_DO_CONTROLLER --model=Post --resource`

## Rotas

mostra todas as rotas criadas
`php artisan route:list --except-vendor`