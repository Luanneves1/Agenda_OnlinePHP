# Agenda Online

## Descrição

Este é um projeto de uma agenda online desenvolvido para fins de estudos, porém com uma implementação bem completa. O objetivo é fornecer uma plataforma robusta e eficiente para gerenciar clientes e agendamentos de tarefas. O desenvolvimento foi realizado utilizando principalmente PHP, Bootstrap e jQuery, com o gerenciamento do banco de dados feito pelo phpMyAdmin.

![Logo](Tela_Agenda)

## Funcionalidades

- **Cadastro de Cliente:** Permite cadastrar novos clientes com informações detalhadas como nome, e-mail, telefone, endereço e observações.
- **Consulta de Cliente:** Permite buscar e visualizar informações detalhadas dos clientes cadastrados, com opções de edição e exclusão.
- **Agendamento de Tarefas:** Permite agendar tarefas e compromissos, associando-os a clientes específicos e configurando notificações e lembretes.
- **Calendário Interativo:** Visualize todas as tarefas e compromissos em um calendário interativo e responsivo.
- **Relatórios:** Gere relatórios detalhados sobre os clientes e agendamentos, com filtros e opções de exportação.
- **Usuários e Permissões:** Gerenciamento de usuários com diferentes níveis de acesso e permissões.

## Tecnologias Utilizadas

- **PHP:** Linguagem de programação server-side utilizada para o desenvolvimento da lógica do servidor.
- **Bootstrap:** Framework CSS utilizado para estilização e responsividade do layout.
- **jQuery:** Biblioteca JavaScript utilizada para manipulação do DOM e requisições AJAX.
- **phpMyAdmin:** Ferramenta utilizada para gerenciamento do banco de dados MySQL.

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/luanneves1/Agenda_OnlinePHP

  2. Navegue até o diretório do projeto:
   cd agenda-online

3. Importe o banco de dados utilizando o phpMyAdmin:

Abra o phpMyAdmin e crie um novo banco de dados.
Importe o arquivo database.sql localizado na pasta sql do projeto.

4. Configure o arquivo config.php com as informações do seu banco de dados:
<?php
$db_host = 'localhost';
$db_name = 'nome_do_banco';
$db_user = 'usuario';
$db_pass = 'senha';
?>

   
5. Execute o servidor PHP:
 php -S localhost:8000


6. Acesse o projeto no navegador:
   http://localhost:8000




Capturas de Tela
Tela de Cadastro de Cliente

Tela de Consulta de Cliente

Tela de Agendamento de Tarefas

Tela do Calendário Interativo

Tela de Relatórios

Tela de Gerenciamento de Usuários

- Créditos
Este projeto foi desenvolvido com orientação do professor NerdSchoolTech - Prof. Marcos Melo. Agradecemos pela dedicação e pelo compartilhamento de conhecimento.


Certifique-se de substituir `seu-usuario`, `nome_do_banco`, `usuario` e `senha` com as informações corretas de acordo com o seu ambiente de desenvolvimento.
