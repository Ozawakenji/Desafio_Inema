<?php

	header('Content-Type: text/plain; charset=utf-8');

	
	
	// TROQUE O CAMINHO DO UPLOAD PARA NAO QUEBRAR O BANCO
	
	
	
	
	//Escrevendo na simulacao do banco, no caso um txt 
	
	$filename = 'banco.txt';
	
	$arquivoqtd = fopen ('qtd.txt', 'r+');
	$soma = "";
	while (FALSE !== ($ch = fgetc($arquivoqtd))) {		
		$soma= $ch;
	}
	$soma++;
	$escreve = fwrite($arquivoqtd, $soma);
	fclose($arquivoqtd);
	
	$fp = fopen("banco.txt", "a");
	$nomemodificado = $soma.$_FILES['foto']['name'];
	$escreve = fwrite($fp, $soma."|".$_POST["nomeCol"]."|".$_POST["nomeFoto"]."|".$_POST["aprovado"]."|".$_POST["localFoto"]."|".$_POST["dataFoto"]."|".$nomemodificado.PHP_EOL);
	 
	// Fecha o arquivo
	fclose($fp);
	


$temporario =  explode( '\\',$_FILES['foto']['tmp_name'],-2);
$sumTemp = sizeof($temporario);
$finalTemp = "";

for($x=0; $x < $sumTemp; $x++){
	$finalTemp .= $temporario[$x];
	$finalTemp .= "\\";
	
}


// Verificação do arquivo
try {
    
    // verifica indefinido e falha
    if (
        !isset($_FILES['foto']['error']) ||
        is_array($_FILES['foto']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    // Check $_FILES['foto']['error'] value.
    switch ($_FILES['foto']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    //tamanho do arquivo
    if ($_FILES['foto']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    //extensão do arquivo
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($_FILES['foto']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }

    //tenta aplicar a modança da TEMP para o local destino. O servidor gratuito que eu subi não tem um caminha claro, por isso desativei.
	//s[o funcionará no xampp. Cada local terá que alterar o local de upload de arquivo.
    if (!move_uploaded_file(
        $_FILES['foto']['tmp_name'],$finalTemp."htdocs\\INEMA\\fotos\\".$nomemodificado)) 
		{
        throw new RuntimeException('Failed to move uploaded file.');
    }

} catch (RuntimeException $e) {

    echo $e->getMessage();

}

	
	
	header("Location:../index.html?mensagem=ok");
	
?>