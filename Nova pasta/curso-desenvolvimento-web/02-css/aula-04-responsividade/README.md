Aula 04: Responsividade

O index.html divide o conteúdo entre uma apresentação e uma área de contato. O link Começar aponta para o aside que tem id="contato".

No style.css, o main usa Grid e tem largura máxima de 1000 pixels. Em telas pequenas, as duas partes ficam uma abaixo da outra. O margin: auto centraliza o conteúdo, e o gap separa as áreas.

A regra @media passa a valer quando a tela tem pelo menos 768 pixels de largura. Nessa situação, grid-template-columns: 2fr 1fr cria duas colunas. A primeira recebe duas partes do espaço disponível, e a segunda recebe uma. A margem interna da página também aumenta.

O aside recebe fundo e espaço interno. O overflow-wrap: anywhere permite quebrar textos longos, como o endereço de e-mail, para que não ultrapassem a área disponível.
