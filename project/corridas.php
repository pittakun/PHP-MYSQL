<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<html>
<head>

</head>
<body id="gerente">
    <ul>
        <li>
            Transporter Flex
        </li>
    </ul>
    <nav>
        <ul>
            <a href="motorista.php">
                <li >
                    Motorista
                </li>
            </a>

            <a href="passageiro.php">
                <li >
                    Passageiro
                </li>
            </a>
            <a href="corridas.php">
                <li >
                    corrida
                </li>
            </a>
            <a href="">
                <li >
                    Sair
                </li>
            </a>
        </ul>
    </nav>
    <br />
    <p id="local">
        Motorista
    </p>
    <section>
        <div id="menu">
            <ul>
                <li>
                    <button type="button">
                        <img src="img/icon/magnifier.png" alt="" />
                    </button>
                </li>
                <li>
                    <input type="text" name="name" value="" />
                </li>
                <li>
                    <button type="button" data-toggle="modal" data-target="#register">
                        <img src="img/icon/plus.png" alt="" />
                    </button>
                </li>

            </ul>
        </div>
    </section>

    <section id="busca">
        <table>
            <tr class="first">
                <th scope="col">Nome</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Modelo do Carro</th>
                <th scope="col">Sexo</th>
                <th scope="col">Status</th>
                <th scope="col">Ativação</th>
            </tr>
            <tr>
                <td>Adriano abreu</td>
                <td>15/02/1991</td>
                <td>123.123.123.65</td>
                <td>Golf</td>
                <td>Masculino</td>
                <td>Ativo</td>
                <th scope="col"><button>Ativar</button></th>
            </tr>
            <tr>
                <td>Mark</td>
                <td>15/02/1991</td>
                <td>123.123.123.65</td>
                <td>Golf</td>
                <td>Masculino</td>
                <td>Ativo</td>
                <th scope="col"><button>Ativar</button></th>
            </tr>
            <tr>
                <td>Olivander Carbray</td>
                <td>15/02/1991</td>
                <td>123.123.123.65</td>
                <td>Golf</td>
                <td>Masculino</td>
                <td>Ativo</td>
                <th scope="col"><button>Ativar</button></th>
            </tr>
        </table>
    </section>

    <footer>
        <p>
            Todos Direitos Reservados.
        </p>
    </footer>



    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Adicionar motorista</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" name="name" value="" placeholder="Nome" class="inp" />
                    <input type="date" name="name" value="" placeholder="Data de Nascimento" class="inp" /><br />
                    <input type="text" name="name" value="" placeholder="Modelo do Carro" class="inp" /><br />
                    <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script src="js/jquery-3.2.1.min.js"></script>

<script>



</script>