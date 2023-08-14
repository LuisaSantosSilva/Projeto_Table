<!DOCTYPE html>
<html lang="en">

<!-- Cabeçalho do código HTML -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Titúlo da página -->
    <title>BootStrap</title>
</head>

<!-- Edição do corpo do código HTML, Coloração do Fundo da página e edição da posição do texto  -->
<body class= "bg-dark-subtle">
    <div class="container text-center bg-dark-subtle">

        <!-- Linha e Coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <!-- Barra de Navegação: -->
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <!-- Barra de Navegação com o nome SISTEMA WEB -->
                        <!-- OBS: navbar-brand para o nome de seu projeto, produto ou companhia -->
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- OBS: navbar-nav para obter uma leve navegação com suporte a dropdowns -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Link da barra de Navegação Cadastrar -->
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                 <!-- Link da barra de Navegação Consultar -->
                                <li class="nav-item">
                                <a class="nav-link" href="consultar.html">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>


        <!-- Linha e coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <!-- Cor do Fundo da página de Formulário e edição de texto-->
            <div class="col bg-white p-4">
                
                <!-- Titúlo e subtitúlo do formulário: -->
                
                <p>

                    <!-- Formulário: -->
                    <form>

                        <!-- Criação de aba de preenchimento do tipo texto - Nome -->
                        <div class="mb-3 text-start">
                            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o seu nome completo">
                        </div>

                        <!-- Criação de aba de preenchimento do tipo telefone -->
                        <div class="mb-3 text-start">
                            <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                        </div>

                        <!-- Criação de aba de preenchimento e seleção de origem -->
                        <div class="mb-3 text-start">
                            <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Celular</option>
                                <option value="1">WhatsApp</option>
                                <option value="2">Telefone Fixo</option>
                            </select>
                        </div>

                        <!-- Criação de aba de preenchimento do Tipo Data - Data de Contato -->
                        <div class="mb-3 text-start">
                            <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <!-- Criação de aba de preenchimento do Tipo texto - Observação -->
                        <div class="mb-3 text-start">
                            <label for="exampleFormControlInput1" class="form-label">Observação:</label>
                            <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>

                        <!-- Criação do botão Cadastrar -->
                        <div class="mb-3 text-start">
                            <button type="button" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </p>

            </div>

            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 

</body>
</html>