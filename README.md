## Ola

Para que o projeto funcione corretamente cofigure o ambiente preenchendo as chaves que tem o prefixo DB no arquivo .env com os valores nescessarios.
Crie um banco de dados com o nome definido no .env.
Depois rode as migrations para gerar o banco de dados.

- para rodar o projeto:
```bash
php artisan serve --port=PORTA
```
- para rodar as migrations:
```bash
php artisan migrate
```
