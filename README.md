# CRUD Gofragem

Sistema web desenvolvido em PHP utilizando o padrão de arquitetura MVC para gerenciamento de gofragens e serviços.

## 📌 Sobre o Projeto

Este projeto foi desenvolvido como atividade prática acadêmica com foco em desenvolvimento web utilizando PHP, PostgreSQL, HTML e CSS.

O sistema permite:

- Cadastro de gofragens;
- Cadastro de serviços;
- Edição e exclusão de registros;
- Listagem de registros cadastrados;
- Armazenamento de dados em PostgreSQL;
- Organização da aplicação utilizando arquitetura MVC;
- Utilização de variáveis de ambiente para configuração segura da conexão com o banco de dados.

---

### O que é Gofragem?

Gofragem é um processo aplicado em folhas de papel para criar texturas e efeitos visuais em relevo. O sistema permite registrar diferentes tipos de gofragem, gramaturas, tamanhos e acabamentos.

---

## 🌐 Demonstração

O projeto encontra-se hospedado em uma máquina virtual e pode ser acessado pelo link abaixo:

**Aplicação:**

http://177.44.248.29/fernando-magon/CRUD-Gofragem/

---

## 🛠 Tecnologias Utilizadas

- PHP 8+
- PostgreSQL
- HTML5
- CSS3
- Arquitetura MVC
- PDO
- Variáveis de Ambiente
- Máquina Virtual (VM)
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
├── css/
│   └── arquivos de estilo
|
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
│   ├── editagofragem.php
│   ├── editaservico.php
│   ├── deletagofragem.php
│   ├── deletaservico.php
│   ├── listagofragem.php
│   └── listaservico.php
│
├── Database.php
├── Env.php
├── creates.sql
├── README.md
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

### Entidade Servico

| Campo | Descrição |
|---|---|
| id | Identificador do registro |
| grafica | Nome da gráfica |
| data | Data do serviço |
| quantidade | Quantidade de folhas |
| tempo | Tempo de execução do serviço (minutos) |

---

## 🔐 Configuração do Banco de Dados

A conexão com o PostgreSQL é realizada utilizando variáveis de ambiente, carregadas pelo arquivo `Env.php`.

Dessa forma, informações sensíveis como host, porta, nome do banco, usuário e senha não ficam expostas no código-fonte disponibilizado no GitHub.

Exemplo das variáveis utilizadas:

```text
DB_HOST
DB_PORT
DB_NAME
DB_USER
DB_PASS
```

Os arquivos que contêm os valores reais dessas variáveis são ignorados pelo Git, garantindo maior segurança na publicação do projeto.

---

## 📖 Objetivos de Aprendizado

Este projeto foi desenvolvido para praticar:

- Arquitetura MVC;
- Operações CRUD;
- Integração entre PHP e PostgreSQL;
- Programação Orientada a Objetos;
- Persistência de dados;
- Estruturação de projetos web;
- Utilização do padrão DAO;
- Uso do PDO para acesso ao banco de dados;
- Configuração segura através de variáveis de ambiente;
- Estilização com HTML e CSS.

---

## 👨‍💻 Autor

**Fernando Weizenmann**

GitHub:  
https://github.com/FeMagonUnivates

Repositório:  
https://github.com/FeMagonUnivates/CRUD-Gofragem.git
