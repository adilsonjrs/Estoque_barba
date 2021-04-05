<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/estoque.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <title>Estoque</title>
</head>
<body>
    <input type="checkbox" id="inputActive">
    <div class="sidebar">
        <div class="sidebar-marca">
            <h1>
                <i class="lab la-atlassian la-2x"></i>
                <span>Stock</span>
            </h1>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../../index.php"><span class="las la-home la-2x"></span>
                    <span>Inicio</span></a>
                </li>
                <li>
                    <a href="../pages/estoque.php"><span class="las la-archive la-2x"></span>
                    <span>Estoque</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-plus-circle la-2x"></span>
                    <span>Entrada de Produtos</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-chalkboard la-2x"></span>
                    <span>Relatório</span></a>
                </li>
                <li>
                    <a href="../scripts/logout.php"><span class="las la-door-open la-2x"></span>
                    <span>Sair</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>
                <label for="inputActive">
                    <span class="las la-bars la-lg"></span>
                </label>
            </h1>
            <div class="user">
                <i class="lar la-user-circle la-2x"></i>
                <div>
                    <h4>Fernando H.</h4>
                </div>
                
            </div>
        </header>

        <div class="pesquisa">
            <i class="las la-search"></i>
            <input type="search" placeholder="Procurar">
        </div>

        <div class="container-estoque">
            <div class="estoque-geral">
                <div class="produtos-estoque">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>REF</th>
                                <th>MARCA</th>
                                <th>DESCRIÇÃO DO PRODUTO</th>
                                <th>QNTD ESTOQUE</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4P1HID001
        
                                </td>
                                <td>4POR1
        
            
                                </td>
                                <td>HIDRATANTE E PROTETOR PARA TATUAGEM 4POR1 60G
        
            
                                </td>
                                <td>-4
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>4P1BAL001
                                </td>
                                <td>4POR1
            
                                </td>
                                <td>BALM PARA BARBA 4POR1 55G
            
                                </td>
                                <td>211
            
                                </td>
                                <td>
                                    <button id="btnEdit">Editar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>