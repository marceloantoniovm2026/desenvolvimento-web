Aula 02: Arrays, funções e laços

O index.php mostra uma lista de produtos e seus preços. O array $produtos guarda dois produtos. Cada um tem as chaves nome e preco, que identificam seus valores.

A função moeda recebe um número do tipo float e devolve um texto do tipo string. O number_format mostra duas casas decimais, usa vírgula nos centavos e ponto nos milhares. O ponto fora da chamada junta o prefixo R$ ao valor formatado.

O foreach percorre os produtos. Em cada passagem, ele gera um li com o nome e o preço do produto atual.

O htmlspecialchars faz o nome aparecer como texto no HTML. A função moeda formata o preço antes de mostrá-lo. O resultado é uma lista com Caderno e Caneta, cada um com seu valor em reais.
