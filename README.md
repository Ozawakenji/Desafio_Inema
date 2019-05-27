# Desafio_Inema

Aplicação web responsiva, simples e leve com a utilização de JavaScript, jQuery, HTML, PHP 7.3.4 com txt como base de dados com o intuito de funcionar sem SGBD ;

Em função do perfil da empresa, não foram adicionados tantos plugins ou efeitos. A ideia do desafio é trazer um visual mais limpo e focado no Front-end. O objetivo era criar um sistema para um concurso de fotografia de temática águas para colaboradores da empresa.



INSTALAÇÃO.

Por ser um script simples e sem banco de dados, a aplicação só precisa de um servidor com suporte para PHP.
Para funcionar corretamente, é necessário colocar o sistema no caminho correto:       

No meu caso, por usar o xampp como servidor, coloquei no Xampp\htdocs\INEMA (pode ser colocado na raiz também);

Como a aplicação utiliza txt como banco de dados, é necessário manter os arquivos da pasta /banco na mesma ordem para a pasta /js e /fotos;

É necessário conferir e alterar o caminho do de upload das imagens e do banco no arquivo INEMA/banco/gerarbanco.php
Se o caminho do upload das fotos, que é ../fotos/, não estiver correto, vai quebrar o banco de dados.



O SISTEMA

A aplicação web foi feita em html, jquery e css, utilizando o php e txt para guardar os dados.
O foco dela foi o Front-end simples e funcional, onde priorizei deixa-lo responsivo.
Possui inserção de dados no txt e um upload de imagem.
Possui uma galeria para visualizar as  e dados dos participantes do concurso de fotografia.
Foi iniciado, mas não terminado a área administrativa para aprovar as imagens postadas.

