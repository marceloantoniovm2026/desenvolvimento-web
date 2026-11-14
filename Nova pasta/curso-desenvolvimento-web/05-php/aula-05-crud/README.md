Aula 05: Cadastro de alunos

O index.php faz o cadastro de alunos no MySQL. Ele permite criar, listar, editar e excluir registros. Essas quatro operações formam o CRUD.

O session_start inicia ou recupera a sessão. A função e usa htmlspecialchars para mostrar os textos no HTML sem interpretá-los como tags. O arquivo conexao.php fornece a função que abre o acesso ao banco.

O código cria um token com random_bytes e bin2hex e o guarda em $_SESSION['csrf']. Cada formulário leva uma cópia desse token em um campo oculto. No envio, hash_equals compara o token recebido com o da sessão. Se eles não correspondem, o código retorna o status 403 e encerra a resposta. Essa verificação ajuda a proteger contra envios feitos por outra página sem um token válido.

O campo acao indica se o pedido é para criar, editar ou excluir. O in_array verifica se a ação existe. Nas operações de edição e exclusão, filter_var também verifica se o id é um número inteiro maior que zero.

Na criação e na edição, o código retira os espaços das pontas do nome e do e-mail. Depois verifica os tamanhos, o preenchimento do nome e o formato do e-mail. O strlen mede os limites em bytes.

O INSERT INTO cria um aluno. O UPDATE muda o nome e o e-mail do aluno identificado pelo id. O DELETE remove o registro daquele id. Em cada caso, prepare define a consulta com parâmetros como :nome e :id. O execute envia os valores separados do texto SQL, impedindo que esses valores sejam tratados como comandos da consulta.

Depois que um POST é tratado sem exceção, a mensagem fica guardada na sessão. O header devolve um redirecionamento com status 303 para a própria página, e o exit encerra a requisição. Isso evita repetir a alteração ao atualizar a página depois do redirecionamento. A mensagem é recuperada e removida da sessão na requisição seguinte.

O SELECT busca os alunos em ordem decrescente de id. O fetchAll transforma o resultado em um array. O foreach percorre esse array e monta um cartão para cada aluno, com um formulário de edição e outro de exclusão. Os campos ocultos levam a ação, o id e o token.

O catch trata as falhas do banco. A tabela tem um e-mail único por aluno, e a violação dessa restrição gera a mensagem de e-mail já cadastrado. As outras falhas de PDO geram uma mensagem genérica e o status 500. Os detalhes ficam no log do servidor.

O CSS no head limita a largura da página, organiza os campos e separa visualmente os alunos. Esse exemplo não tem login nem controle de permissão por usuário; quem tem acesso à página pode alterar os registros.
