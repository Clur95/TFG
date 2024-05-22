<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservator</title>

    <script src="./js/jquery3.7.1.min.js"></script>
    <script src="./js/scriptsJQ.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/estils.css" type="text/css">
</head>

<body>
    <div id="container">

        <header>
            <img id="logo" src="./img/log.png" alt="Reservator">
        </header>

        <main>

            <h2>COMPAÑÍAS</h2>
            <section id="compania">
                <nav>
                    <div id="1" class="companias">IBERIA</div>
                    <div id="2" class="companias">RYANAIR</div>
                    <div id="3" class="companias">VUELING</div>
                    <div id="4" class="companias">AIR EUROPA</div>
                </nav>
            </section>
<?php

            for($i = 1; $i <= 4; $i++){
?>
            <section id="submenu<?= $i ?>" class="submenus">
                <button type="button" id="botonModal<?= $i ?>" class="btn btn-primary botonModal mb-2 mt-2" data-toggle="modal" data-target="#formModal<?= $i ?>">
                    Reservar vuelo
                </button>

                <div id="contenedorReservas<?= $i ?>">
                </div>
            </section>

            <div id="formModal<?= $i ?>" class="modal fade formsModales" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div id="modalContent" class="modal-content">

                            <form id="formReserva<?= $i ?>" name="formReserva<?= $i ?>" class="was-validated formsReservas" method="post" enctype="multipart/form-data">

                                <div class="modal-header">
                                    <h4 class="modal-title">Información de la reserva</h4>
                                </div>

                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="validationIda" class="form-label">Ida</label>
                                        <input type="date" name="fechaIda<?= $i ?>" class="form-control"
                                            placeholder="Introduce la fecha de inicio" required>

                                        <div class="invalid-feedback">Debe indicarse una fecha de inicio</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationVuelta" class="form-label">Vuelta</label>
                                        <input type="date" name="fechaVuelta<?= $i ?>" class="form-control"
                                            placeholder="Introduce la fecha de vuelta">

                                        <div class="valid-feedback">Fecha de vuelta opcional</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationOrigen" class="form-label">Origen</label>
                                        <select class="form-select" name="origen<?= $i ?>" required>
                                            <option value="Alicante" selected>Alicante</option>
                                            <option value="Valencia">Valencia</option>
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Bilbao">Bilbao</option>
                                        </select>

                                        <div class="invalid-feedback">Debe indicarse un lugar de origen.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationDestino" name="destino<?= $i ?>" class="form-label">Destino</label>
                                        <select class="form-select" name="destino<?= $i ?>" required>
                                            <option value="Alicante" selected>Alicante</option>
                                            <option value="Valencia">Valencia</option>
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Bilbao">Bilbao</option>
                                        </select>

                                        <div class="invalid-feedback">Debe indicarse un lugar de destino.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationDNI" class="form-label">DNI</label>
                                        <input type="text" name="dni<?= $i ?>" class="form-control"
                                            placeholder="Introduce tu DNI" pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9" required>

                                        <div class="invalid-feedback">Se requiere el DNI (8 números y una letra).</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationNombre" class="form-label">Nombre</label>
                                        <input type="text" name="nombre<?= $i ?>" class="form-control"
                                            minlength="2" maxlength="25" placeholder="Introduce tu nombre" required>

                                        <div class="invalid-feedback">Se requiere un nombre (Máximo 25 caracteres).</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="validationApellidos" class="form-label">Apellidos</label>
                                        <input type="text" name="apellidos<?= $i ?>" class="form-control"
                                            minlength="2" maxlength="50" placeholder="Introduce tus apellidos" required></input>

                                        <div class="invalid-feedback">Se requieren los apellidos (Máximo 50 caracteres).</div>
                                    </div>

                                </div>

                                <div class="modal-footer" id="insercion">
                                    <button type="submit" class="btn btn-primary">Reservar</button>
                                    <button data-dismiss="modal" type="button" class="btn btn-secondary">Cancelar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
<?php        
            } 
?>
        </main>

        <footer>
            <p>PROYECTO FIN DE GRADO - CRISTIAN LUCAS RODRÍGUEZ</p>
        </footer>

    </div>
</body>

</html>