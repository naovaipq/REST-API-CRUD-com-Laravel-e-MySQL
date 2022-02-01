# REST API CRUD com Laravel e MySQL
---

### Tecnologias Utilizadas
- Laravel
- MySQL
- Insomnia

### Instruções 
2. Crie um banco com o nome "db_crud" no MySQL.
1. Configure o banco MySQL no arquivo .env.
3. Inicie o servidor do Laravel.
4. De o comando "php artisan migrate", para que as tabela sejam criada no banco de dados.

### Rotas
1. Adiconar nova pessoa - 
**POST:** '/api/pessoas', 
passando json: 
{
	"nome": "",
	"sobrenome": "",
	"nascimento": "",
	"naturalidade": "",
	"hobby": ""
}
&nbsp;
2. Listar todas as pessoas - 
**GET:** '/api/pessoas'
&nbsp;
4. Listar uma única pessoa - 
**GET:** 'api/pessoas/id', informando o id da pessoa
&nbsp;
3. Atualizar pessoa - 
**PUT:** '/api/pessoas/id', informando o id da pessoa a ser atualizada e passando json:
{
	"nome": "",
	"sobrenome": "",
	"nascimento": "",
	"naturalidade": "",
	"hobby": ""
}
&nbsp;
4. Excluir pessoa - 
**DELETE:** '/api/pessoas/id', informando o id da pessoa a ser deleteda
