# README

## Projeto de Cadastro de Alunos para Academia

Este é o meu primeiro projeto desenvolvido em PHP utilizando o padrão de arquitetura MVC (Model-View-Controller) e a biblioteca PDO para acesso ao banco de dados. O objetivo deste projeto é fornecer um sistema completo de gerenciamento de alunos para uma academia, permitindo a realização das operações básicas de um CRUD (Create, Read, Update, Delete).

### Funcionalidades

- **Cadastro de Alunos:** Permite adicionar novos alunos ao sistema, incluindo informações como nome, idade, gênero, entre outros.
- **Visualização de Alunos:** Possibilita visualizar a lista completa de alunos cadastrados, com opções para filtrar e ordenar os resultados.
- **Atualização de Informações:** Permite a edição das informações de um aluno já cadastrado, proporcionando a atualização de dados conforme necessário.
- **Remoção de Alunos:** Permite excluir um aluno do sistema, caso necessário.

### Tecnologias Utilizadas

- **PHP:** Linguagem de programação utilizada para o desenvolvimento do sistema.
- **MVC (Model-View-Controller):** Padrão de arquitetura utilizado para separar as responsabilidades de modelos, visualizações e controladores, facilitando a manutenção e organização do código.
- **Bootstrap:** Framework front-end utilizado para o desenvolvimento da interface do usuário, proporcionando um design responsivo e agradável.
- **PDO (PHP Data Objects):** Extensão do PHP utilizada para acessar bancos de dados de forma genérica, permitindo a conexão com diversos sistemas de gerenciamento de banco de dados relacionais, como MySQL, PostgreSQL, SQLite, entre outros.

### Requisitos

- Servidor web (por exemplo, Apache) com suporte a PHP.
- Banco de dados compatível com o PDO (por exemplo, MySQL, PostgreSQL).
- Navegador web moderno com suporte a JavaScript (recomendado para uma melhor experiência do usuário).

### Configuração

1. Faça o download ou clone este repositório para o diretório raiz do seu servidor web.
2. Importe o arquivo SQL fornecido (`script.sql`) para criar a estrutura do banco de dados.
3. Configure as credenciais do banco de dados no arquivo `model/FabricadorConexoes.php`.
4. Inicie o servidor web e acesse o sistema através do navegador.
