# Projeto Prático Web 2026A

Sistema web desenvolvido em PHP utilizando o padrão de arquitetura MVC para gerenciamento de gofragens e serviços.

## 📌 Sobre o Projeto

Este projeto foi desenvolvido como atividade prática acadêmica com foco em desenvolvimento web utilizando PHP, PostgreSQL, HTML e CSS.

O sistema permite:

- Cadastro de gofragens
- Cadastro de serviços
- Listagem de registros cadastrados
- Armazenamento de dados em PostgreSQL
- Organização da aplicação utilizando arquitetura MVC

### O que é Gofragem?

Gofragem é um processo aplicado em folhas de papel para criar texturas e efeitos visuais em relevo. O sistema permite registrar diferentes tipos de gofragem, gramaturas, tamanhos e acabamentos.

---

## 🛠 Tecnologias Utilizadas

- PHP
- PostgreSQL
- HTML5
- CSS3
- Arquitetura MVC
- XAMPP
- pgAdmin 4

---

## 📂 Estrutura do Projeto

```bash
Projeto_pratico_01_web2026a/
│
├── controller/
│   ├── GofragemController.php
│   └── ServicoController.php
│
├── dao/
│   ├── GofragemDao.php
│   └── ServicoDao.php
│
├── model/
│   ├── Gofragem.php
│   └── Servico.php
│
├── view/
│   ├── cadastrogofragem.php
│   ├── cadastroservico.php
│   ├── listagofragem.php
│   └── listaservico.php
│
├── css/
│   └── arquivos de estilo
│
├── creates.sql
├── Database.php
└── index.html
```

---

## 🗄 Banco de Dados

O projeto utiliza PostgreSQL como sistema de gerenciamento de banco de dados.

### Entidade Gofragem

| Campo | Descrição |
|---|---|
| id | Identificador do registro |
| tipo | Tipo de gofragem |
| gramatura | Gramatura do papel |
| tamanho | Dimensões da folha |
| acabamento | Tipo de acabamento |

---

## 🚀 Como Executar o Projeto

### Requisitos

- XAMPP
- PostgreSQL
- pgAdmin 4
- PHP 8+

### Instalação

1. Clone o repositório:

```bash
git clone https://github.com/FeMagonUnivates/Projeto_pratico_01_web2026a.git
```

2. Mova a pasta do projeto para o diretório `htdocs` do XAMPP.

3. Crie o banco de dados no PostgreSQL.

4. Execute o script:

```bash
creates.sql
```

5. Configure a conexão com o banco de dados no arquivo:

```bash
Database.php
```

6. Inicie o Apache pelo XAMPP.

7. Abra no navegador:

```bash
http://localhost/Projeto_pratico_01_web2026a
```

---

## 📖 Objetivos de Aprendizado

Este projeto foi desenvolvido para praticar:

- Arquitetura MVC
- Operações CRUD
- Integração entre PHP e PostgreSQL
- Programação Orientada a Objetos
- Persistência de dados
- Estruturação de projetos web
- Utilização do padrão DAO
- Estilização com HTML e CSS

---

## 👨‍💻 Autor

Desenvolvido por Fernando Weizenmann

GitHub:  
:contentReference[oaicite:0]{index=0}

Repositório:  
:contentReference[oaicite:1]{index=1}

---

## 📄 Licença

Projeto desenvolvido para fins educacionais.
