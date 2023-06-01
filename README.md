# Sistema de Gerenciamento de Pedidos

O Sistema de Gerenciamento de Pedidos é uma aplicação web desenvolvida para auxiliar empresas no controle e organização de pedidos, vendedores, transportadoras e etiquetas de entrega. Com este sistema, é possível cadastrar, visualizar, editar e excluir registros relacionados a essas entidades, proporcionando uma visão centralizada e simplificada do processo de gerenciamento de pedidos.

## Tecnologias Utilizadas

- PHP 8.2: Linguagem de programação utilizada no desenvolvimento da aplicação.
- Laravel 10: Framework de desenvolvimento web em PHP que fornece uma estrutura robusta e elegante para construir aplicativos web.
- MySQL 8.33: Sistema de gerenciamento de banco de dados relacional usado para armazenar e gerenciar os dados da aplicação.
- Node.js: Plataforma de desenvolvimento JavaScript utilizada para compilar os assets do projeto.

## Funcionalidades Principais

- Cadastro de pedidos, vendedores, transportadoras e etiquetas de entrega.
- Visualização detalhada de informações de pedidos, vendedores, transportadoras e etiquetas de entrega.
- Associação de vendedores e transportadoras aos pedidos.
- Geração de etiquetas de entrega para cada pedido.
- Autenticação de usuários com recursos de login e logout.

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas em seu ambiente de desenvolvimento:

- PHP 8.2 ou versão superior
- MySQL 8.33 ou versão superior
- Node.js

## Instalação e Configuração
OBS: EXISTE A DOCUMENTAÇÃO COMPLETA DENTRO DA RAIZ DO REPOSITÓRIO

1. Clone o repositório para o seu ambiente local.
2. Instale as dependências do PHP executando o comando `composer install` no terminal.
3. Configure as informações do banco de dados no arquivo `.env`.
4. Execute as migrações do banco de dados executando o comando `php artisan migrate` no terminal.
5. Execute as factories para popular as tabelas com dados de exemplo usando o comando `php artisan db:seed` no terminal.
6. Compile os assets executando o comando `npm run dev` no terminal.
7. Inicie o servidor executando o comando `php artisan serve` no terminal.

A aplicação estará disponível em `http://localhost:8000`.

## Uso do Sistema

1. Acesse a aplicação pelo navegador utilizando o endereço `http://localhost:8000`.
2. Faça login utilizando suas credenciais.
3. Navegue pelo sistema para criar, visualizar, editar e excluir pedidos, vendedores, transportadoras e etiquetas de entrega.
4. Utilize os formulários para adicionar ou editar informações e clique em "Salvar" para confirmar as alterações.
5. Para sair do sistema, clique em "Logout" no canto superior direito da página.

## Suporte

Se você encontrar algum problema ou tiver alguma dúvida em relação ao uso do sistema, entre em contato com a equipe de suporte técnico através do e-mail support@empresa.com ou pelo telefone (XX) XXXX-XXXX.

## Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests com melhorias, correções de bugs ou novas funcionalidades.

## Considerações Finais

O Sistema de Gerenciamento de Pedidos foi desenvolvido para simplificar e agilizar o processo de gerenciamento de pedidos em sua empresa. Esperamos que esta aplicação seja útil para você e atenda às suas necessidades.

Agradecemos por escolher nosso sistema e estamos à disposição para qualquer suporte adicional.

Equipe de Desenvolvimento Empresa XYZ
