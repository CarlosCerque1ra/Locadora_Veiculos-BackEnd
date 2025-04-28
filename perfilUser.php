<?php
//  backend
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER - Locadora de veículos</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link do css -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h2>Sistema de Locadora de Veículos</h2>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size:24px;"></i>
                        </span>
                        <!-- Bem vindo,[usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuario</strong>!
                        </span>
                        <!-- botão de logout -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário para adicionar novos veículos -->
        <div class="row same-height-row">

            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">
                                    Tipo de veículo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">
                                    Quantidade de dias 📅
                                </label>
                                <input type="number" name="dias_calculo" class="form-control"
                                    value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">
                                Calcular previsão
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabela de veiculos cadastrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Veículos cadastrados 🚘</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Modelo</th>
                                        <th>Placa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Honda Civic 2015</td>
                                        <td>(*&*())</td>
                                        <td>
                                        <span>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalDisponivel" style="padding: 2px;">Disponível</button>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                    <!-- Botão Modal -->
                                                    <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        More Info
                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanque de Guerra</td>
                                        <td>IS-2</td>
                                        <td>Detona tiger</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                    <!-- Botão Modal -->
                                                    <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                        More Info
                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>Hayabusa 2016</td>
                                        <td>00000</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                        <td>
                                            <!-- Botão Modal -->
                                            <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                                More Info
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Honda Civic LXR 2.0 FlexOne Automático 2015</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Modelo:</strong> Honda Civic LXR 2.0 FlexOne Automático 2015</li>
                            <li><strong>Motor:</strong> 2.0 FlexOne i-VTEC, 4 cilindros</li>
                            <li><strong>Potência:</strong> 150 cv (gasolina) / 155 cv (etanol)</li>
                            <li><strong>Torque:</strong> 19,5 kgfm (etanol) / 19,3 kgfm (gasolina)</li>
                            <li><strong>Transmissão:</strong> Automática de 5 marchas</li>
                            <li><strong>Direção:</strong> Elétrica progressiva</li>
                            <li><strong>Consumo cidade:</strong> 7,1 km/l (etanol) / 10,5 km/l (gasolina)</li>
                            <li><strong>Consumo estrada:</strong> 8,9 km/l (etanol) / 13,0 km/l (gasolina)</li>
                            <li><strong>Porta-malas:</strong> 449 litros</li>
                            <li><strong>Tanque de combustível:</strong> 50 litros</li>
                            <li><strong>Freios:</strong> Discos ventilados (dianteira) / discos sólidos (traseira)</li>
                            <li><strong>Airbags:</strong> Frontais de série</li>
                            <li><strong>Rodas:</strong> Liga leve aro 16"</li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel2">IS-2</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Modelo:</strong> IS-2 (Iosif Stalin 2)</li>
                            <li><strong>País de origem:</strong> União Soviética</li>
                            <li><strong>Período de serviço:</strong> 1944 – anos 1950</li>
                            <li><strong>Tripulação:</strong> 4 pessoas (comandante, artilheiro, carregador, motorista)</li>
                            <li><strong>Peso:</strong> Aproximadamente 46 toneladas</li>
                            <li><strong>Blindagem:</strong> Até 120 mm na parte frontal</li>
                            <li><strong>Armamento principal:</strong> Canhão D-25T de 122 mm</li>
                            <li><strong>Armamento secundário:</strong> 1 metralhadora coaxial 7,62 mm + 1 metralhadora 12,7 mm (antiaérea)</li>
                            <li><strong>Motor:</strong> Diesel V-2-IS V12, 600 hp</li>
                            <li><strong>Velocidade máxima:</strong> Aproximadamente 37 km/h</li>
                            <li><strong>Autonomia:</strong> Cerca de 240 km em estrada</li>
                            <li><strong>Uso notável:</strong> Batalha de Berlim, ofensiva no Leste Europeu</li>
                        </ul>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModal3">Suzuki GSX1300R Hayabusa 2016</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Modelo:</strong> Suzuki GSX1300R Hayabusa 2016</li>
                            <li><strong>Categoria:</strong> Sport/Touring</li>
                            <li><strong>Motor:</strong> 4 cilindros em linha, DOHC, 1.340 cc (4 tempos, refrigeração líquida)</li>
                            <li><strong>Potência máxima:</strong> Aproximadamente 197 cv a 9.500 rpm</li>
                            <li><strong>Torque:</strong> 15.7 kgfm a 7.200 rpm</li>
                            <li><strong>Transmissão:</strong> Manual de 6 marchas</li>
                            <li><strong>Velocidade máxima:</strong> Aproximadamente 299 km/h (limitada eletronicamente)</li>
                            <li><strong>Chassi:</strong> Twin-spar em alumínio</li>
                            <li><strong>Freios:</strong> Dianteiros duplos Brembo 310 mm com ABS / Traseiro simples 260 mm com ABS</li>
                            <li><strong>Suspensão dianteira:</strong> Garfo telescópico invertido</li>
                            <li><strong>Suspensão traseira:</strong> Monochoque ajustável</li>
                            <li><strong>Peso (em ordem de marcha):</strong> Aproximadamente 266 kg</li>
                            <li><strong>Tanque de combustível:</strong> 21 litros</li>
                            <li><strong>Consumo médio:</strong> Cerca de 14–18 km/l (varia conforme pilotagem)</li>
                            <li><strong>Destaque:</strong> Considerada uma das motos de produção mais rápidas do mundo</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de Solicitação - Ford GT 2008 -->
        <div class="modal fade" id="modalDisponivel" tabindex="-1" aria-labelledby="modalDisponivel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDisponivel">Honda Civic 2015 Disponivel!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <p>Preencha o formulário abaixo para  :</p>
                        <form>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número de telefone</label>
                                <input type="tel" class="form-control" id="numero" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" required>
                            </div>
                            <div class="mb-3">
                                <label for="rg" class="form-label">Tempo de aluguel     (em dias)</label>
                                <input type="number" value="1" min="1" class="form-control" id="rg" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="endereco" class="form-label">Endereço</label>
                                <textarea class="form-control" id="endereco" rows="2" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar interesse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>