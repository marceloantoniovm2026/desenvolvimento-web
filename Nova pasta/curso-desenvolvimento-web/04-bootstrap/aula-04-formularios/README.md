Aula 04: Formulários com Bootstrap

O index.html cria um formulário de inscrição com um campo de nome, uma seleção de trilha e um botão de envio.

A classe form-label estiliza os rótulos. O form-control dá aparência ao campo de texto, e form-select estiliza a caixa de seleção. O mb-3 separa os grupos com uma margem inferior. O botão usa btn e btn-success para receber o formato de botão e a cor verde do Bootstrap.

O for de cada label corresponde ao id do campo. O required torna o nome obrigatório na validação do navegador. O select reúne as opções, e cada option representa uma delas.

O método GET coloca os valores na URL usando os nomes nome e trilha. Como as opções não têm um atributo value, o valor enviado é o próprio texto da opção. O exemplo não grava os dados em um banco.
