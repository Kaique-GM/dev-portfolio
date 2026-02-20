# 🚀 Portfolio

<p align="center">
  <img src="./public/images/about/pixel.gif" width="90">
</p>

### 🌎 Acesse o projeto

🔗 Live Demo: https://kaique-gm.github.io/

## 📌 Sobre o Projeto

Este é meu portfólio pessoal, desenvolvido para apresentar:

- Minhas habilidades como Desenvolvedor Full Stack
- Projetos desenvolvidos
- Certificações
- Tecnologias que utilizo no dia a dia

## 🛠️ Tecnologias Utilizadas

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-4E56A6?style=for-the-badge&logo=livewire&logoColor=white)
![Tailwind_CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)

### ⚙️ Funcionalidades

- 🌍 Alternância de idioma (PT / EN)
- 🎬 Parallax com requestAnimationFrame
- ✨ Animações on-scroll
- 📱 Layout totalmente responsivo

## 🎯 Objetivo

Este projeto foi criado com o objetivo de:
Consolidar conhecimentos em frontend moderno
Trabalhar performance e animações
Construir uma presença profissional online

## ✅ Requisitos

Antes de rodar o projeto, você precisa ter um ambiente de desenvolvimento configurado.

### 🖥️ Ambiente local

Recomenda-se usar um pacote como XAMPP, Laragon ou Docker, que já inclui:

- PHP 8.2+
- MySQL (ou MariaDB)
- Servidor web (Apache ou Nginx)

### 📦 Dependências obrigatórias

Além do ambiente local, você precisa ter instalado:

- Composer
- Node.js
- NPM
- Git

Você pode verificar se está tudo instalado com:

```bash
php -v
composer -V
node -v
npm -v
git -v
```

### 🗄️ Banco de Dados

- MySQL ou MariaDB
- Gerenciado via:
  - phpMyAdmin (XAMPP/Laragon)
  - MySQL Workbench
  - Outro gerenciador de sua preferência

## 📥 Instalação do Projeto

Clone o repositório:

```bash
git clone https://github.com/Kaique-GM/laravel-base-project.git
```

Entre na pasta do projeto:

```bash
cd nome-do-projeto
```

Instale as dependências do PHP:

```bash
composer install
```

Instale as dependências do Node:

```bash
npm install
```

## ⚙️ Configuração do arquivo ```.env```

Crie o arquivo ```.env``` baseado no ```.env.example```:

```bash
cp .env.example .env
```

Agora gere a chave da aplicação:

```bash
php artisan key:generate
```

## 🗄️ Configurar Banco de Dados

No arquivo ```.env```, configure as credenciais do banco:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=
```

Depois rode as migrations:

```bash
php artisan migrate
```

## 📂 Storage (Upload de arquivos)

Caso o projeto utilize uploads, crie o link simbólico do storage:

```bash
php artisan storage:link
```

## ▶️ Rodando o projeto

Rodar servidor Laravel:

```bash
php artisan serve
```

Rodar o Vite:

```bash
npm run dev
```

Agora acesse:

```bash
http://127.0.0.1:8000
```

## 🏗️ Build para produção

Para gerar os arquivos finais do frontend:

```bash
npm run build
```
