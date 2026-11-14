Banco de dados e conexão

O schema.sql define o banco curso_web e a tabela alunos. O CREATE DATABASE IF NOT EXISTS cria o banco somente se ele ainda não existir. O USE seleciona esse banco para os comandos seguintes. O conjunto de caracteres utf8mb4 permite armazenar textos com acentos e emojis.

O CREATE TABLE IF NOT EXISTS cria a tabela sem recriar uma tabela que já existe. A coluna id é um número inteiro sem valores negativos. O AUTO_INCREMENT gera um número para cada novo aluno, e PRIMARY KEY faz dele o identificador único do registro.

A coluna nome aceita até 100 caracteres, e email aceita até 150. O NOT NULL impede valores nulos nessas colunas. O UNIQUE impede que dois registros tenham e-mails considerados iguais pela comparação do banco. A coluna criado_em recebe a data e a hora atuais quando o registro é inserido, por causa de DEFAULT CURRENT_TIMESTAMP.

O conexao.php define a função conectar, que devolve um objeto PDO. O getenv lê as configurações do ambiente: DB_HOST indica o servidor, DB_PORT indica a porta, DB_NAME é o banco, DB_USER é o usuário e DB_PASS é a senha.

Quando as configurações não têm valor, o código usa 127.0.0.1, porta 3306, banco curso_web e usuário curso_app. A senha não tem valor padrão. Se ela estiver ausente ou vazia, a função lança uma PDOException em vez de tentar a conexão. O arquivo não faz leitura automática de arquivos .env.

O texto passado ao PDO começa com mysql: e informa o servidor, a porta, o banco e a codificação da conexão. O usuário e a senha são passados como argumentos separados. O driver pdo_mysql faz a comunicação entre PDO e MySQL.

O ERRMODE_EXCEPTION faz as falhas de banco gerarem exceções. O FETCH_ASSOC faz as consultas devolverem linhas com os nomes das colunas como chaves. O EMULATE_PREPARES definido como false faz o PDO usar as consultas preparadas do MySQL.

O arquivo de conexão é compartilhado pelo teste de conexão e pelo cadastro de alunos. Ele abre o acesso ao banco, enquanto os arquivos de cada aula executam suas próprias consultas.
