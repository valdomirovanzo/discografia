
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Discografia">
    <meta name="generator" content="">
    <title>Discografia</title>

    
    <meta name="theme-color" content="#7952b3">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">


    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }

        #titulo{
            font-family: 'Dancing Script', cursive;
            font-size: 38px;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-white bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
            <h3 class="float-md-start mb-0" id="titulo">Tião Carreiro</h3>
            </div>
        </header>

        

        <!-- MODAL EDIÇÃO -->
        <div class="modal fade" id="modalEdicaoFaixa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Título:</label>
                            <input type="text" class="form-control" id="novoNome">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Duração:</label>
                            <input type="text" class="form-control" id="novaDuracao">
                        </div>
                        <input type="hidden" value="" id="inputIdFaixa" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnConfirmaEdicaoFaixas">Confirmar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAL EDIÇÃO -->

        <!-- MODAL CADASTRO -->
        <div class="modal fade" id="modalCadastroFaixa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Nome:</label>
                            <input type="text" class="form-control" id="nomecad">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Duração:</label>
                            <input type="text" class="form-control" id="duracaocad">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Número:</label>
                            <input type="text" class="form-control" id="numerocad">
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label text-dark">Álbum</label>
                            <select class="form-select mt-2" aria-label="Default select example" id="albumcad">
                                <option selected>Selecione o álbum</option>
                             </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnConfirmaCadastroFaixas">Cadastrar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAL CADASTRO -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-md-3 offset-lg-3">
                    <h4>Aprecie esta arte!</h4>
                    <audio controls autoplay>
                        <source src="PagodeemBrasilia.mp3" type="audio/mpeg">Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-md-3 offset-lg-3">
                    <form>
                        <label>Escolha o álbum</label>
                        <select class="form-select mt-2" aria-label="Default select example" id="album">
                            <option selected>Selecione o álbum</option>
                        </select>
                        <div class="col-12">
                            <button type="button" class="btn btn-primary mt-2" id="btnBuscaFaixas">Buscar Faixas</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-md-3 offset-lg-3">
                    <div class="table-responsive">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Título</th>
                                <th scope="col">Duração</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="resultadoFaixas">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        

        <footer class="mt-auto text-white-50 text-center">
            <p>Todos os direitos reservados</p>
        </footer>
    </div>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/pt-br.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/1441f05dbf.js" crossorigin="anonymous"></script>

    <script>

       

        $("#btnMusica").click(function(){
            var audio = document.createElement("audio");
            audio.src = "PagodeemBrasilia.mp3"; 
            audio.play();
        })

        $(document).ready(function(){
            $("#btnMusica").click();
        })

        function listaAlbuns(box){
            $.get("acoes.php?acao=listaAlbum", function(data){
                var option = '';
                for (var i = 0; i < data.length; i++) {
                    option += '<option value='+data[i].codigo+'>'+data[i].nome+'</option>';
                }
                $("#"+box).html(option);
            })
        }

        $("#album").focus(function(){
            listaAlbuns('album');
        })


        function listaFaixas(){
            var album = $("#album").val();
            $.get("acoes.php?acao=listaFaixas&album="+album+"", function(data){
                var tr = '';
                for (var i = 0; i < data.length; i++) {
                    tr += '<tr><td>'+data[i].numerofaixa+'</td><td>'+data[i].nomefaixa+'</td><td>'+data[i].duracaofaixa+'</td><td><i class="fa fa-edit p-2" id="btnEdicaoFaixa" data-codigofaixa="'+data[i].codigofaixa+'" data-nomefaixa="'+data[i].nomefaixa+'" data-duracaofaixa="'+data[i].duracaofaixa+'"></i><i class="fa fa-trash-alt p-2" id="btnExcluiFaixa" data-codigofaixa="'+data[i].codigofaixa+'" data-nomefaixa="'+data[i].nomefaixa+'" data-duracaofaixa="'+data[i].duracaofaixa+'"></i><i class="fa fa-plus-circle p-2" id="btnCadastraFaixa"></i></td></tr>';
                }
                $("#resultadoFaixas").html(tr);
            })
        }

        $("#btnBuscaFaixas").click(function(){
            listaFaixas();
        });

        $(document).on('click', '#btnEdicaoFaixa', function(){
            codigofaixa = $(this).data('codigofaixa');
            nomefaixa = $(this).data('nomefaixa');
            duracaofaixa = $(this).data('duracaofaixa');
            $("#novoNome").val(nomefaixa);
            $("#novaDuracao").val(duracaofaixa);
            $("#inputIdFaixa").val(codigofaixa);
            $("#modalEdicaoFaixa").modal("toggle");
        });

        $(document).on('click', '#btnExcluiFaixa', function(){
            codigofaixa = $(this).data('codigofaixa');
            Swal.fire({
                title: 'Você tem certeza?',
                text: "Deseja realmente excluir?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim!',
                cancelButtonText: 'Cancelar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'acoes.php?acao=DeletaFaixas',
                        method: 'POST',
                        data: {
                            codigofaixa: codigofaixa
                        },
                        success: function(data){
                            if(data.retorno == 'success'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Parabéns!',
                                    text: 'Faixa deletada com sucesso!'
                                });
                            }else{
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ops...',
                                    text: 'Erro ao deletar a Faixa, entre em contato com o administrador!'
                                });
                            }
                        }
                    })

                    Swal.fire(
                    'Faixa Deletada!',
                    )
                    listaFaixas();
                }
            })
        })

        $(document).on('click', '#btnConfirmaEdicaoFaixas', function(){
            var novoNome = $("#novoNome").val();
            var novaDuracao = $("#novaDuracao").val();
            var idFaixa = $("#inputIdFaixa").val();
            $.ajax({
                url: 'acoes.php?acao=editaFaixas',
                method: 'POST',
                data: {
                    novoNome: novoNome,
                    novaDuracao: novaDuracao,
                    idFaixa: idFaixa
                },
                success: function(data){
                    $("#modalEdicaoFaixa").modal('hide');
                    if(data.retorno == 'success'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Parabéns!',
                            text: 'Faixa modificada com sucesso!'
                        });
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Ops...',
                            text: 'Erro ao modificar a Faixa, entre em contato com o administrador!'
                        });
                    }
                    listaFaixas();
                }
            })
        });

        $(document).on('click', '#btnCadastraFaixa', function(){
            $("#modalCadastroFaixa").modal("toggle");
            $("#albumcad").focus(function(){
                listaAlbuns('albumcad');
            })
        });

        $(document).on('click', '#btnConfirmaCadastroFaixas', function(){
            var nomecad = $("#nomecad").val();
            var duracaocad = $("#duracaocad").val();
            var albumcad = $("#albumcad").val();
            var numerocad = $("#numerocad").val();
            $.ajax({
                url: 'acoes.php?acao=cadastraFaixas',
                method: 'POST',
                data: {
                    nomecad: nomecad,
                    duracaocad: duracaocad,
                    albumcad: albumcad,
                    numerocad: numerocad
                },
                success: function(data){
                    $("#modalCadastroFaixa").modal('hide');
                    if(data.retorno == 'success'){
                        Swal.fire({
                            icon: 'success',
                            title: 'Parabéns!',
                            text: 'Faixa cadastrada com sucesso!'
                        });
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Ops...',
                            text: 'Erro ao cadastradar a Faixa, entre em contato com o administrador!'
                        });
                    }
                    listaFaixas();
                }
            })
        });
        
    </script>
    
  </body>
</html>
