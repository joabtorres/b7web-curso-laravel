# MODULO 5: Relacionamentos

HAS ONE (Tém um): Relacionamento de 1:1 indica relação de <b>1</b> para <b>1</b>.

-   Usuario (id, nome, <b>id_endereco</b>)
-   Endereco (id, endereco, numero)

BELONGS To (Pertence a): Relacionamento de n:1 indica a relação <b>varios</b> para <b>1</b>

-   Usuario (id, nome)
-   Endereco (id, endereco, numero, <b>id_usuario</b>)

HAS MANY (TEM MUITOS): Relacionamento de 1:n indica a relacao de <b>1</b> para <b>varios</b>

-   Usuario (id, nome)
-   Endereco (id, endereco, numero, <b>id_usuario</b>)

MANY TO MANY (MUITOS PARA MUITOS): Relacionamento de N:N indica a relação de <b>varios</b> para <b>varios</b>

-   Usuario (id, nome)
-   Endereco (id, endereco, numero)
-   usuario_endereco (<b>id_usuario</b>, <b>id_endereco</b>)

### PROJETO API

hasOne

belongsTo

hasMany

manyToMany

## comandos executados

Criando o projeto

`composer create_project laravel/laravel^9.0 5-laravel-relacionamento`

Iniciando o servidor

`php artisan serve`

Ativando migrations

`php artisan migrate`

## Criando os controllers

`php artisan make:controller UserController`

`php artisan make:controller AddressController`

`php artisan make:controller InvoiceController`

### criando models

`php artisan make:model Address`

`php artisan make:model Invoice`

## migrations

criando migration address

`php artisan make:migration create_addresses_table`,

criando novas migration de address_id na tabela users

`php artisan make:migration add_colmun_address_id_to_users_table --table=users`

criando migration invoice
`php artisan make:migration create_table_invoices`

criando migration foreignkey entre invoices e adrresses
`php artisan make:migration crete_foreignkey_invocies_address  --table=invoices`

criando migration foreignkey entre invoice e users
`php artisan make:migration crete_foreignkey_invocies_users  --table=invoice`



`php artisan make:migration add_column_user_id_to_address_users --table=addresses`

`php artisan make:migration create_foreignkey_addresses_users --table=addresses`

onDelete("SET NULL"); - SE DELETE A CHAVE PRIMARIA AS CHAVE ESTRANGEIRAS VIRAM NULL
onDelete("CASCADE"); - SE DELETE A CHAVE PRIMARIA TODOS OS REGISTRO VINCULADOS COM CHAVE ESTRANGEIRAS SÃO APAGADOS TBM

# Seeders

Criando uma seed (As seeders são formas de cadastrar registro no banco de dados via comando laravel )
`php artisan make:seed CreateUserAndAddressesSeed`

Ativando seeders
`php artisan db:seed`

