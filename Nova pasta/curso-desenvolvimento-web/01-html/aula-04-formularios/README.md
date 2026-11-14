Aula 04: Formulários

O index.html cria um formulário com os campos nome e e-mail e um botão de envio.

O form agrupa os campos. O método GET coloca os valores enviados na URL. Como não há um endereço no atributo action, o envio volta para a própria página. Esse exemplo não salva os dados.

Cada label descreve um campo. O for do label corresponde ao id do input. O name define o nome pelo qual o valor aparece no envio.

O required torna o preenchimento obrigatório na validação do navegador. O maxlength limita o tamanho do nome, e type="email" verifica se o e-mail tem um formato aceito. O botão com type="submit" envia o formulário.
