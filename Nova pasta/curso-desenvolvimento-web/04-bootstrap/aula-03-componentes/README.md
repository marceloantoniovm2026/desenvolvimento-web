Aula 03: Componentes

O index.html cria um cartão com título, texto e um botão que mostra ou esconde detalhes.

A classe card define a aparência do cartão. O card-body cria a área interna, enquanto card-title e card-text aplicam os estilos do título e do parágrafo.

No botão, data-bs-toggle="collapse" indica o componente usado. O data-bs-target="#detalhes" aponta para o elemento que será aberto ou fechado. Esse elemento tem id="detalhes" e a classe collapse, que o mantém escondido no início.

O JavaScript do Bootstrap trata o clique e alterna a exibição dos detalhes. O aria-controls identifica a área controlada, e aria-expanded informa se ela está aberta. A classe mt-3 acrescenta um espaço acima do texto de detalhes.
