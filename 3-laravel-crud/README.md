# MODULO 3: CRUD

-- docker iniciando servidor:
`sail up -d`

-- docker encerrando servidor:
`sail down`

--gera uma key para aplicação
`sail artisan key:generate`


## MIGRATION
-- criando uma migration 
`php artisan make:migration create_posts_table`

-- exportando os dados da migrate
`php artisan migrate`

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
`php artisan make:controller NOME_DO_CONTROLLER --resource --model=User`

## Rotas

mostra todas as rotas criadas
`php artisan route:list --except-vendor`