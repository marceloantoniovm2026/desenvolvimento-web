Aula 04: Conexão ao MySQL com PDO

O index.php verifica se o PHP consegue acessar o MySQL. O require carrega o arquivo conexao.php, que contém a função conectar. O caminho usa a pasta do arquivo atual como base para localizar esse arquivo de conexão.

Dentro do try, conectar abre a conexão e devolve um objeto PDO. O query executa SELECT 1, uma consulta que devolve o número 1 sem depender de uma tabela. O fetchColumn lê o valor da primeira coluna do resultado.

O código compara o resultado com 1 e escolhe a mensagem que aparecerá na página. Quando a consulta funciona como esperado, a mensagem informa que a conexão foi realizada.

Se ocorrer uma falha de PDO, o catch recebe a exceção. O error_log registra os detalhes no log do servidor, e http_response_code define o status 500. A página mostra uma mensagem de falha, sem expor os detalhes da conexão. O htmlspecialchars trata o texto antes de inseri-lo no HTML.
