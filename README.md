## 📚 Sistema Inteligente de Sugestão, Gestão e Geração de Temas e Trabalhos Académicos

### 🚀 Visão Geral

Sistema web profissional, robusto e escalável para **gerenciamento inteligente de temas académicos, trabalhos escolares, tutoria e pagamentos** em instituições de ensino angolanas.

---

## 📋 Índice

- [Características Principais](#características-principais)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação](#instalação)
- [Configuração](#configuração)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Utilização](#utilização)
- [Segurança](#segurança)
- [API](#api)
- [Contribuição](#contribuição)

---

## ✨ Características Principais

### Para Estudantes
- ✅ Registro e autenticação por instituição
- ✅ Sugestão inteligente de temas académicos
- ✅ Geração gratuita de 2 temas, pagamento para adicionais
- ✅ Solicitação e gerenciamento de tutoria
- ✅ Geração de trabalhos académicos estruturados
- ✅ Sistema de favoritos
- ✅ Histórico completo
- ✅ Exportação em PDF

### Para Tutores
- ✅ Visualização de estudantes da sua instituição
- ✅ Aprovação/Rejeição de pedidos de orientação
- ✅ Acompanhamento de estudantes
- ✅ Visualização de temas e trabalhos
- ✅ Relatórios de orientação

### Para Administradores
- ✅ Gerenciamento completo de usuários
- ✅ Gestão de instituições
- ✅ Controle de cursos e níveis
- ✅ Aprovação de instituições
- ✅ Gerenciamento de pagamentos
- ✅ Relatórios e estatísticas

### Para Super Administrador
- ✅ Acesso total ao sistema
- ✅ Gestão de todos os módulos
- ✅ Configuração de taxas e preços
- ✅ Logs e auditoria
- ✅ Backups e recuperação

---

## 🛠️ Tecnologias Utilizadas

### Backend
- **PHP 8+** - Linguagem de programação
- **MySQL** - Banco de dados relacional
- **PDO** - Acesso seguro ao banco de dados
- **Arquitetura MVC** - Padrão de design

### Frontend
- **HTML5** - Markup
- **CSS3** - Estilos
- **Bootstrap 5** - Framework CSS responsivo
- **JavaScript ES6+** - Lógica frontend
- **jQuery** - Manipulação DOM
- **AJAX** - Requisições assíncronas
- **SweetAlert2** - Alertas e confirmações
- **Font Awesome** - Ícones

---

## 📦 Instalação

### Requisitos
- PHP 8.0 ou superior
- MySQL 5.7 ou superior
- Apache com mod_rewrite habilitado

### Passos

1. **Clone o repositório**
```bash
git clone https://github.com/Ildimauro/HildoDomingos.git
cd HildoDomingos
git checkout sistema-academico-v1
```

2. **Configure o banco de dados**
```bash
mysql -u root -p < database/schema.sql
mysql -u root -p < database/seeds.sql
```

3. **Configure as credenciais em config/config.php**

4. **Configure as permissões**
```bash
chmod -R 755 public/uploads
chmod -R 755 storage/logs
```

5. **Acesse http://localhost/HildoDomingos**

---

## 📁 Estrutura do Projeto

```
app/
├── BaseController.php
├── BaseModel.php
├── controllers/
├── models/
└── views/
config/
├── config.php
└── database.php
public/
├── assets/
│   ├── css/
│   ├── js/
│   └── uploads/
helpers/
├── functions.php
├── auth.php
└── validation.php
index.php
.htaccess
```

---

## 🔐 Segurança

✅ Proteção contra SQL Injection
✅ Proteção contra XSS
✅ Proteção contra CSRF
✅ Hash de senhas (bcrypt)
✅ Headers de segurança
✅ Sessões seguras
✅ Logs de atividade

---

## 🎯 Status do Projeto

![Status](https://img.shields.io/badge/Status-Em%20Desenvolvimento-yellow)
![Versão](https://img.shields.io/badge/Versão-1.0.0-blue)

**Desenvolvido com ❤️ por Ildimauro**