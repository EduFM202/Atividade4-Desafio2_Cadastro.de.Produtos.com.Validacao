# 🛡️ Desafio: Cadastro de Produtos com Validação em PHP

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)

Projeto desenvolvido para a **Atividade 4 (Desafio 2)** da disciplina ministrada pelo professor **Denis dos Anjos Geres**. O objetivo é implementar um formulário web para cadastro de produtos com conexão ao banco de dados MySQL e **validação server-side** em PHP.

---

## 🎯 Objetivo do Desafio

Criar um script em PHP que processe a entrada de um formulário contendo **Nome do Produto** e **Preço**, aplicando regras de validação rigorosas antes de salvar as informações na tabela do banco de dados.

---

## 📋 Requisitos Implementados

- [x] **Banco de Dados:** Criação do banco `exercicio` e da tabela `produtos` via script SQL no MySQL local.
- [x] **Formulário Web:** Campos de entrada para *Nome do Produto* e *Preço*.
- [x] **Validação em PHP (Server-Side):**
  - Verificação se o campo **Nome** não está vazio.
  - Verificação se o campo **Preço** é um valor numérico e estritamente **maior que zero**.
- [x] **Tratamento de Mensagens:**
  - **Sucesso:** Exibe a mensagem `"Produto cadastrado com sucesso!"` após a inserção válida.
  - **Erro:** Exibe mensagens claras para dados inválidos (ex: `"Erro: O preço deve ser um número positivo."`).
- [x] **Segurança e Conexão:** Tratamento de erros de conexão e inserção segura no banco de dados.

---

## 🗄️ Estrutura do Banco de Dados

Script SQL utilizado para preparar o ambiente local no MySQL:

```sql
CREATE DATABASE IF NOT EXISTS exercicio;
USE exercicio;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);
