<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Cadastrar fornecedor</title>

    <?php require_once("dist/css/css.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php require_once("layout/navBar.php"); ?>

        <?php require_once("layout/mainSideBar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cadastrar fornecedor</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="fornecedor.php">Fornecedor</a></li>
                                <li class="breadcrumb-item active">Cadastrar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Dados do Fornecedor </h5>
                                </div>
                                <form role="form" name="formCadastrarFornecedor" action="processa_cadastro.php" method="GET">
                                
                                <div class="card-body">
                                <p>CNPJ/CPF - NOME/RAZAOSOCIAL - EMAIL-INSC ESTADUAL - END.COMPLETO - CONTATOS</p>
                                    
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                  
                                                    <label>Estabelecimento</label>
                                                    <div class="form-check">
                                                        <input id="pf" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pf" class="form-check-label">Pessoa Física</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input id="pj" class="form-check-input" type="radio"
                                                            name="radio1">
                                                        <label for="pj" class="form-check-label">Pessoa Jurídica</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" id="divTipoDocumento">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5" id="divNomeRazaoSocial">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="nome">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="divNomeFantasia">
                                                <div class="form-group">
                                                    <label></label>
                                                    <input type="text" class="form-control" name="fanstasia">
                                                </div>
                                            </div>


                                        </div>


                                    
                                    <form>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" class="form-control cep" id="cep" name="cep">
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Logradouro</label>
                                                    <input type="text" class="form-control" id="rua" name="logradouro">
                                                </div>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input type="text" class="form-control" id="NumeroResidencia" data-mask="s00.0" name="numero">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control" id="bairro" name="bairro">
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control" id="cidade" name="cidade">
                                                </div>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <input type="text" class="form-control" id="uf" name="estado">
                                                </div>

                                            </div>
                                             
                                        
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Telefone</label>
                                                    <input type="text" class="form-control" id="idTel" data-mask="(00)0000-0000" name="telefone">
                                                </div>

                                            
                                        </div>
                                        
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Cel</label>
                                                    <input type="text" class="form-control" id="idCel" data-mask="(00)00000-0000" name="cel">
                                                </div>
                                                </div>
                                            </div>
                                        
                                    
                                    

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    <button type="reset" class="btn btn-link">Limpar formulário</button>
                                </div>
                            </div>
                        </div>

                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        </form>
        <?php require_once("layout/controlSideBar.php"); ?>

        <?php require_once("layout/footer.php"); ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <?php require_once("dist/js/javascript.php"); ?>
    <script src="dist/js/pages/fornecedor/fornecedor_incluir.js"></script>
    <script src="dist/js/viacep.js"></script>
    <script src="dist/js/meuInputMask.js"></script>
  
    
</body>

</html>