# TEES

Primeiramente deve-se criar um servidor apache para que seja possível utilizar a aplicação. Todos os arquivos devem ser extraídos no diretório do servidor.
Após esse passo, deve-se criar um banco de dados MySQL, e nele executar o arquivo 'db.sql'.
Esse projeto foi feito considerando um banco de dados de nome 'urna', o que pode ser modificado na linha 16 do arquivo 'sql.php'. Também nesse arquivo podem ser modificados o nome do servidor, o nome do usuário que pode acessar o servidor, e a senha do usuário.

A urna pode ser acessada pela página 'index.html' no diretório raiz.
Se o usuário desejar conferir os resultados das eleições, ele deve acessar 'eleicoes.php'.

A documentação doxygen dos arquivos php estão na pasta 'doxygen', a documentação jsdoc dos arquivos javascript estão na pasta 'js', nas pastas 'util jsdoc' e 'script jsdoc'.

Todo o código foi testado utilizando XAMPP.
