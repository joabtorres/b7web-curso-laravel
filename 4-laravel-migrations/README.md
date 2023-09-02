# MODULO 4: Migrations

As migrations são estrutura das tabelas a serem criadas no banco de dados, elas ficam localizadas em `database/migrations`.

## MIGRATION
-- criando uma migration da tabela do banco

`php artisan make:migration create_NOME-DA-TABELA_table`

-- Criando as tabelas no banco pela primeira vez

`php artisan migrate`

-- APAGA COMPLETAMENTE O BANCO E RECRIAR O BANCO TODO DO ZERO

`php artisan migrate:fresh`

-- desfaz a ultima migration executada

`php artisan migrate:rollback`

## Atualizando uma tabela
 
 Para atualizar uma tabela adicionando uma nova coluna por exemplo, deve ser criado uma nova migration e adicionar o novos campos.

 `php artisan make:migration add_column_min_quantity_and_obs_in_NOME-DA-TABELA_table`

OBS: Na criação de migrations de alteração recomenda-se a criação do nome da migration espeficicando o que ela ira alterar


## DELETANDO UMA MIGRATION
1º) consulte no banco na tabela migration quando ela foi criada


2º) caso não venha prejudicar a aplicação (se foi a ultima migration excutada) então podera executa o codigo abaixo

`php artisan migrate:rollback`


## CONSULTA O STATUS DA MIGRAITON

utilizada para acompanhar o status da migrate que RODARAM OU NÃO.

`php artisan migrate:status`


## VOLTANDO ROLBACKS

para voltar rolbacks de migrations criadas é necessário informar o comando abaixo

`php artisan migrate:rollback --step=QUANTIDADE_DE_VOLTAS`.

por exemplo caso queira voltar os 3 ultimos migrate execute o comando.

`php artisan migrate:rollback --step=3`



