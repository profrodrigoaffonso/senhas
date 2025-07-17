# Aplicativo de chamada de senhas simples

Um aplicativo web para chamada de senhas.

## Funcionalidades

- Cadastrar guichês
- Chamada automática de senhas de acordo com o guichê

## Tecnologias utilizadas

- PHP 8.4
- Laravel 11
- MySQL
- HTML / CSS
- JavaScript
- Bootsrapp

## Estrutura do projeto

```text

app/
├── Http/
│ └── Controllers/
│   ├── GuichesController.php
|   └── TelaController.php
├── Models/
│ ├── Chamadas.php
│ ├── Configs.php
│ ├── Guiches.php
│ ├── Senhas.php
│ ├── TelaMaster.php
│ └── User.php
routes/
└── web.php