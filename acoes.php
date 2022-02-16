<?php
require("conexao.php");

if($_GET['acao'] == 'listaAlbum'){
    $listaAlbum = "SELECT * FROM album ORDER BY ano ASC";
    $execlistaAlbum = mysqli_query($conn, $listaAlbum);
    while($result = mysqli_fetch_array($execlistaAlbum)){

        $return[] = array(
            'codigo' => $result['id'],
            'nome' => $result['nome'],
            'ano' => $result['ano']
        );
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($return);
}

if($_GET['acao'] == 'listaFaixas'){
    $listaFaixas = "SELECT a.id as codigofaixa, a.id_album as codigoalbumfk, a.numero as numerofaixa, a.nome as nomefaixa, a.duracao as duracaofaixa, b.id as codigoalbum, b.nome as nomealbum, b.ano as anoalbum
    FROM faixa a
    LEFT JOIN album b ON a.id_album = b.id
    WHERE b.id = '".$_GET['album']."' ";
    $execListaFaixas = mysqli_query($conn, $listaFaixas);

    while($result = mysqli_fetch_array($execListaFaixas)){

        $return[] = array(
            //faixas
            'codigofaixa' => $result['codigofaixa'],
            'codigoalbumfk' => $result['codigoalbumfk'],
            'numerofaixa' => $result['numerofaixa'],
            'nomefaixa' => $result['nomefaixa'],
            'duracaofaixa' => $result['duracaofaixa'],
            
            //album
            'codigoalbum' => $result['codigoalbum'],
            'nomealbum' => $result['nomealbum'],
            'anoalbum' => $result['anoalbum']
        );
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($return);
}

if($_GET['acao'] == 'editaFaixas'){
    $editaFaixa = "UPDATE faixa SET nome = '".$_POST['novoNome']."', duracao = '".$_POST['novaDuracao']."' WHERE id = '".$_POST['idFaixa']."' ";
    $up = 0;
    if($execEditaFaixa = mysqli_query($conn, $editaFaixa)){
        $up = $up +1;
    }
    if($up > 0){
        $response_array = array(
            'retorno' => 'success'
        );
    }else{
        $response_array = array(
            'retorno' => 'error'
        );
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response_array);
}

if($_GET['acao'] == 'DeletaFaixas'){
    $deletaFaixa = "DELETE FROM faixa WHERE id = '".$_POST['codigofaixa']."' ";
    $execDeletaFaixa = mysqli_query($conn, $deletaFaixa);
    $returnMsg = array(
        'retorno' => 'success'
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($returnMsg);
}

if($_GET['acao'] == 'cadastraFaixas'){
    $insereFaixa = "INSERT INTO faixa(id_album, numero, nome, duracao) VALUES('".$_POST['albumcad']."', '".$_POST['numerocad']."', '".$_POST['nomecad']."', '".$_POST['duracaocad']."' )";
    $execInsereFaixa = mysqli_query($conn, $insereFaixa);
    $returnMsg = array(
        'retorno' => 'success'
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($returnMsg);
}

