Aula 04: Lista de tarefas

O index.html tem um formulário para digitar uma tarefa, uma área de aviso e uma lista inicialmente vazia. O script.js controla a lista e guarda as tarefas no localStorage do navegador.

A variável chave guarda o nome usado para salvar os dados. O getItem lê o conteúdo salvo, e JSON.parse transforma o texto em dados do JavaScript. Quando não há conteúdo, o código usa uma lista vazia. O Array.isArray verifica se o resultado é um array, e o filter mantém apenas os itens que são textos.

A função renderizar limpa a lista da página com replaceChildren. Depois cria um li para cada tarefa, preenche o texto com textContent e acrescenta o item com append.

O evento submit trata o envio do formulário. O preventDefault impede o recarregamento da página. O trim retira espaços das pontas do texto, e o return encerra a função se o campo estiver vazio. O push adiciona a nova tarefa ao array.

O JSON.stringify transforma o array em texto, e setItem salva esse texto no navegador. Em seguida, o campo é esvaziado e a lista é desenhada novamente. As tarefas salvas podem continuar disponíveis depois que a página é fechada.

Os blocos try e catch tratam falhas de leitura ou gravação. Se o armazenamento falhar, o aviso explica o problema. Uma tarefa que não pôde ser salva ainda fica na lista enquanto a página permanece aberta.
