Aula 01: Variáveis

O index.html contém um parágrafo vazio com id="resultado". A tag script carrega o script.js, e o defer faz o código rodar depois que o HTML foi lido pelo navegador.

No script.js, nome guarda um texto, aulasConcluidas guarda um número e estudando guarda o valor verdadeiro. O const declara variáveis que não recebem uma nova atribuição, enquanto o let permite trocar o valor depois.

O document.querySelector encontra o parágrafo pelo id. O textContent coloca nele uma frase com o nome e a quantidade de aulas concluídas. Os trechos entre ${} inserem os valores das variáveis no texto.

Os três console.log mostram os valores no console do navegador. Eles não acrescentam conteúdo à página.
