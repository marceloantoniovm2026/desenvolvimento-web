Aula 01: Introdução ao PHP

O index.php gera uma página com uma saudação. O PHP roda no servidor, e o navegador recebe o HTML resultante.

O bloco PHP no início do arquivo contém a lógica da página. O declare(strict_types=1) ativa o modo de tipos estritos. A variável $nome guarda o texto Estudante.

Dentro do h1, a forma curta de echo escreve o valor no HTML. O htmlspecialchars transforma caracteres especiais do nome em representações seguras para a página. Assim, o sinal de menor aparece como texto, em vez de começar uma tag.

O ENT_QUOTES inclui aspas simples e duplas nessa conversão. O UTF-8 indica a codificação do texto. O restante do arquivo é HTML comum, com o título da aba, o título da página e um parágrafo.
