Aula 02: Condições, funções e repetições

O index.html tem uma lista vazia com id="notas". O script.js preenche essa lista com as notas e seus resultados.

A função situacao recebe uma nota. O if verifica se ela é maior ou igual a 7. Quando isso acontece, o return devolve Aprovado. Para as outras notas, a função devolve Continuar estudando.

O array notas guarda os valores 8, 5 e 9. O for...of passa por cada um deles. Em cada passagem, document.createElement cria um li, e textContent coloca a nota e o retorno da função nesse item.

O append acrescenta o item à lista da página. Ao final, aparecem três itens, um para cada nota.
