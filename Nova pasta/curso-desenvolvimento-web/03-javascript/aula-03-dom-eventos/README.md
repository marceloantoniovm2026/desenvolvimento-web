Aula 03: DOM e eventos

O index.html mostra um contador começando em zero e um botão com o texto Somar 1. O id de cada elemento permite encontrá-lo pelo JavaScript.

No script.js, a variável contador começa com o número zero. A variável valor guarda a referência ao parágrafo que mostra esse número.

O addEventListener registra uma função para o evento click do botão. A cada clique, contador += 1 soma uma unidade. Depois, textContent atualiza o número mostrado no parágrafo.

O aria-live="polite" permite que leitores de tela anunciem a mudança sem interromper imediatamente o que estavam lendo. O contador fica apenas na memória da página e volta a zero quando ela é recarregada.
