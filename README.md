# REST API CRUD com Laravel e MySQL
---

### Tecnologias Utilizadas
- Laravel
- MySQL
- Xampp
- Insomnia

### Instruções 
1. Coloque o projeto dentro da pasta "htdocs" do Xampp.
2. Inicie o servidor do Apache e o MySQL do Xampp.
3. Crie um banco com o nome "db_crud" no MySQL do Xampp e de o comando "php artisan migrate", para que a tabela seja criada no banco de dados.

### Rotas
1. Adiconar nova pessoa 
**POST:** 'localhost/crud/public/api/pessoas', 
passando json: 
{
	"nome": "",
	"sobrenome": "",
	"nascimento": "",
	"naturalidade": "",
	"hobby": ""
}
&nbsp;
2. Listar todas as pessoas
**GET:** 'localhost/crud/public/api/pessoas'
&nbsp;
4. Listar uma única pessoa
**GET:** 'localhost/crud/public/api/pessoas/pessoas/id', passando o id da pessoa
&nbsp;
3. **PUT:** 'localhost/crud/public/api/pessoas/id', passando o id da pessoa a ser atualizada e json:
{
	"nome": "",
	"sobrenome": "",
	"nascimento": "",
	"naturalidade": "",
	"hobby": ""
}
&nbsp;
4. **DELETE:** localhost/crud/public/api/pessoas/id, passando o id da pessoa a ser deleteda
