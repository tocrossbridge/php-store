
# Lojinha PHP - Desenvolvimento Responsivo para Web

Projeto em PHP da matéria de _Desenvolvimento Responsivo para Web_ do 2º período de Engenharia de Software da UniOpet.

### Objetivos do projeto

A atividade proposta em sala foi:

* Crie um formulário com os seguintes itens:
    * Nome do Produto: (caixa de texto)
    * Setor do Produto: (caixa de seleção)
    * Preço de Custo: (caixa de texto)
    * Preço de Venda: (caixa de texto)
    * Estoque: (caixa de numero)

* O item setor do produto deve consultar na base de dados os setores cadastrados em uma tabela específica para setores, e armazenado seu id na
tabela de produtos conforme descrito abaixo:

### Tabela `PRODUTOS`

| Campo           | Tipo           | Restrições         |
|-----------------|----------------|--------------------|
| id_prod         | int(9)         | Auto Incremento, Chave Primária |
| nome_prod       | varchar(30)    |                    |
| setor_prod      | int(9)         |                    |
| custo_prod      | float(10)      |                    |
| venda_prod      | float(10)      |                    |
| estoque_prod    | int(5)         |                    |
| situacao_prod   | int(1)         |                    |

### Tabela `SETORES`

| Campo           | Tipo           | Restrições         |
|-----------------|----------------|--------------------|
| id_set          | int(9)         | Auto Incremento, Chave Primária |
| nome_set        | varchar(20)    |                    |


* Exiba os produtos cadastrados.

**Observação:**
A tabela “setores” não tem a necessidade de ser dinâmica para essa atividade, apenas crie alguns dados diretamente no banco.

## Pré-requisitos

Para utilizar o projeto, é necessário ter o xampp instalado. Segue o passo a passo para instalação e uso do mesmo:

* Baixe o programa [Xampp](https://www.apachefriends.org/download.html) de acordo com seu sistema operacional
* Siga as instruções no site para instalar de acordo com seu sistema operacional

## Como Executar o Projeto

### Passo 01: inicializando o xampp
Com o xampp devidademente instalado, siga os passos:

* Abra o Xampp Control Pane
* Inicie os serviços Apache e MySQL

#### Passo 02: criando o banco de dados
Com o Xampp rodando, utilize um navegador para acessar o link http://localhost/phpmyadmin/ 

Feito isso, crie uma nova tabela chamada **php_store**

Agora que o banco foi criado, copie o código no arquivo **base.sql** e cole na aba **SQL** da sua base de dados e clique no botão **Continuar**

#### Passo 03: utilizando o projeto

Depois de seguir os passos 1 e 2, navegue em http://localhost/php-store/ e utilize o projeto :D


## Contribuição

Se você quiser contribuir para o projeto (melhorias de código, correções de bugs), saiba que é muito bem-vindo!

### Instruções de Contribuição

Siga estas etapas:

1. Faça um fork do projeto
2. Crie uma nova branch
```
$ git checkout -b feature-x
```
3. Faça commit das suas alterações:
```
$ git commit -m 'Adicionei feature X'
```
4. Envie para o repositório original:
```
$ git push origin feature-x'
```
5. Abra um Pull Request e detalhe o que fez
6. Assim que possível confiro seu PR :)