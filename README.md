A atividade proposta em sala foi:

1 – Faça o que se pede.

A. Crie um formulário com os seguintes itens:

a. Nome do Produto: (caixa de texto)

b. Setor do Produto: (caixa de seleção)

c. Preço de Custo: (caixa de texto)

d. Preço de Venda: (caixa de texto)

e. Estoque: (caixa de numero)

B. O item setor do produto deve consultar na base de dados os setores cadastrados em uma tabela específica para setores, e armazenado seu id na
tabela de produtos conforme descrito abaixo:

PRODUTOS SETORES

id_prod int(9) A_I Primary

id_set int(9) A_I Primary

nome_prod varchar(30)

nome_set varchar(20)

setor_prod int(9)

custo_prod float(10)

venda_prod float(10)

estoque_prod int (5)

situacao_prod int(1)

C. Exiba os produtos cadastrados.

ps. A tabela “setores” não tem a necessidade de ser dinâmica para essa atividade, apenas crie alguns dados diretamente no banco.