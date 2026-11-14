Aula 03: Formulários com PHP

O index.php mostra um formulário de nome e e-mail e verifica os valores recebidos. A variável $mensagem começa vazia e passa a guardar o resultado da validação depois do envio.

O $_SERVER['REQUEST_METHOD'] informa o método da requisição. Quando ele é POST, o código procura os campos em $_POST. O is_string confirma que cada valor é texto, e o trim retira espaços das pontas. O operador ?? fornece null quando o campo não existe.

O if verifica se o nome está vazio, se algum valor ultrapassa o limite ou se o e-mail tem formato inválido. O strlen mede o tamanho em bytes. Por isso, uma letra com acento pode ocupar mais de um byte. O filter_var com FILTER_VALIDATE_EMAIL valida o formato do endereço.

Quando algum valor falha na validação, a mensagem informa o problema. Quando os valores são aceitos, a mensagem inclui o nome recebido. O htmlspecialchars protege a saída dessa mensagem no HTML.

O form usa POST, e os atributos name identificam os campos enviados. O required, o maxlength e o type="email" também fazem verificações no navegador. Esse código apenas valida os dados; ele não salva registros nem envia e-mails.
