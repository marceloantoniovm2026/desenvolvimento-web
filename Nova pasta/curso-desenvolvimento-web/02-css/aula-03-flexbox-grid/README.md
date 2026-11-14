Aula 03: Flexbox e Grid

O index.html contém um menu e três cartões com nomes de tecnologias. O link Projetos aponta para o main que tem id="cards".

No style.css, display: flex organiza os links do nav em uma linha. O flex-wrap permite a quebra para outra linha quando falta espaço. O gap cria a distância entre os links, e margin-bottom separa o menu dos cartões.

A classe grade usa display: grid para organizar os cartões em colunas. O repeat com auto-fit calcula quantas colunas cabem. O minmax dá a elas uma largura mínima que se ajusta ao espaço disponível e permite que cresçam por igual com 1fr.

Cada article recebe espaço interno, fundo azul claro e cantos arredondados. O gap da grade separa os cartões.
