Desafio_Inema
Aplica��o web responsiva, simples e leve com a utiliza��o de JavaScript, jQuery, HTML, PHP 7.3.4 com txt como base de dados com o intuito de funcionar sem SGBD ;

Em fun��o do perfil da empresa, n�o foram adicionados tantos plugins ou efeitos. A ideia do desafio � trazer um visual mais limpo e focado no Front-end. O objetivo 
era criar um sistema para um concurso de fotografia de tem�tica �guas para colaboradores da empresa.

INSTALA��O.

Por ser um script simples e sem banco de dados, a aplica��o s� precisa de um servidor com suporte para PHP. Para funcionar corretamente, 
� necess�rio colocar o sistema no caminho correto:

No meu caso, por usar o xampp como servidor, coloquei no Xampp\htdocs\INEMA (pode ser colocado na raiz tamb�m);

Como a aplica��o utiliza txt como banco de dados, � necess�rio manter os arquivos da pasta /banco na mesma ordem para a pasta /js e /fotos;

� necess�rio conferir e alterar o caminho do de upload das imagens e do banco no arquivo INEMA/banco/gerarbanco.php Se o caminho do upload das fotos,
 que � ../fotos/, n�o estiver correto, vai quebrar o banco de dados.

O SISTEMA

A aplica��o web foi feita em html, jquery e css, utilizando o php e txt para guardar os dados. O foco dela foi o Front-end simples e funcional,
 onde priorizei deixa-lo responsivo. Possui inser��o de dados no txt e um upload de imagem. Possui uma galeria para visualizar as e dados dos participantes do concurso de fotografia.
 Foi iniciado, mas n�o terminado a �rea administrativa para aprovar as imagens postadas.


LEMBRAR DE VERIFICAR O ARQUIVO DE UPLOAD DE IMAGENS (banco/gerarbanco.php)