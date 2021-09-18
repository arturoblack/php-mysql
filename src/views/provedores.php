<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Mi super Sistema XD</span>
        </div>
    </nav>
    <section class="container-fluid">
        <header>
            <h3>Lista de proovedores</h3>
        </header>
        <article>
            <aside>
                <a href="/provedor/nuevo.php" class="btn btn-primary">
                    agregar provedor
                </a>
            </aside>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>RUC</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($provedores as $provedor) {
                    ?>
                    <tr>
                        <th><?php echo $provedor->ruc; ?></th>
                        <td><?php echo $provedor->nombres; ?></td>
                        <td>
                            <a class="btn btn-primary" href="/provedor/editar.php?id=<?php echo $provedor->id; ?>">Editar</a>
                            <a class="btn btn-danger" href="/provedor/eliminar.php?id=<?php echo $provedor->id; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </article>
    </section>
</body>
</html>