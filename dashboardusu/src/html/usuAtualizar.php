<?php session_start();
if (!isset($_SESSION['usuarioLogado'])) {
    header('location: /sgp/index.php ');
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SGP - Sistema de Gerenciamento de Permutas</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/cadusu.css" />

    <script src="https://use.fontawesome.com/0147a96ddf.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--CDN import JQueryMask -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        <div id="Menus"></div><br />

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Conta:</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Início</a>
                                    <li class="breadcrumb-item"><a>Configuração Conta</a>

                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                  </div>
                </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

              <section class="form-section">

                <form action="" method="" class="needs-validation" novalidate>

                  <div class="form-group">
                    <label for="validationCustom01">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="Nome" required>

                    <div class="invalid-feedback">
                      Insira o nome!
                    </div>
                  </div>


                  <div class="form-group">

                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="Endereço" required>
                        <div class="invalid-feedback">
                          Por favor, informe um Endereço.
                        </div>
                      </div>
                      <div class="col-md-6 mb-6">
                        <label for="validationCustom03">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="Bairro" required>
                        <div class="invalid-feedback">
                          Por favor, informe um bairro válido.
                        </div>
                      </div>
                    </div>

                    <div class="form-row">

                      <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Número</label>
                        <input type="number" class="form-control" id="numero" name="numero" value="10" required>
                        <div class="invalid-feedback">
                          Por favor, informe um numero válido.
                        </div>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="Cidade" required>
                        <div class="invalid-feedback">
                          Por favor, informe uma cidade.
                        </div>
                      </div>


                      <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="Estado" required>
                        <div class="invalid-feedback">
                          Por favor, informe um estado válido.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom06">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="56000000" required>
                        <div class="invalid-feedback">
                          Por favor, informe um CEP válido.
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">

                    <div class="form-row">
                      <div class="col-md-4 mb-4">
                        <label for="validationCustom07">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="Telefone" required>
                        <div class="valid-feedback">
                          Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                          Por favor, informe um Telefone válido.
                        </div>
                      </div>
                      <div class="col-md-8 mb-6">
                        <label for="validationCustom08">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="Email" required>
                        <div class="valid-feedback">
                          Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                          Por favor, informe um email válido.
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-4 mb-4">
                        <label for="validationCustom09">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="CPF" required>
                        <div class="valid-feedback">
                          Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                          Por favor, informe um CPF válido.
                        </div>
                      </div>
                      <div class="col-md-8 mb-6">
                        <label for="validationCustom10">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" value="RG" required>
                        <div class="valid-feedback">
                          Tudo certo!
                        </div>

                        <div class="invalid-feedback">
                          Por favor, informe um RG válido.
                        </div>
                      </div>
                    </div>

                  </div>



                  <div class="form-group">

                    <label for="validationCustom11">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" value="Senha" required>

                    <div class="invalid-feedback">
                      Por favor, informe a Senha.
                    </div>

                  </div>

                  <div class="form-group">

                    <label for="validationCustom11">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirmarsenha" name="confirmarsenha" value="Senha" required>

                    <div class="invalid-feedback">
                      Por favor, informe a Senha.
                    </div>

                  </div>


                  <div style="text-align: center;">
                    <button type="submit" onclick="validar()" class="btn btn-success">Atualizar</button>
                  </div>
                </form>
              </section>

              <script>
                (function validar() {
                  'use strict';
                  window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                      form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    });
                  }, false);
                })();
              </script>






            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script>
  $("#Menus").load("Menus.php");
</script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="../dist/js/validaEconsultaCnpj.js"></script>
    <script src="../dist/js/buscarcep.js"></script>


    <!-- Seta as mascaras dos campos -->
    <script>
        $(document).ready(function(){
            $.get("/sgp/control/listarInstituicoes.php");
            $('#cnpj').mask('00.000.000/0000-00');
            $('#cep').mask('00000-000');
            $('#estado').mask('AA');
        });
    </script>



<?php
    if(isset($_SESSION['msg']['erroLogin'])){
        echo $_SESSION['msg']['erroLogin'];
        unset($_SESSION['msg']['erroLogin']);

    }else if(isset($_SESSION['msg']['usuCadSuccess'])){
        echo $_SESSION['msg']['usuCadSuccess'];
        unset($_SESSION['msg']['usuCadSuccess']);
}
?>

</body>

</html>