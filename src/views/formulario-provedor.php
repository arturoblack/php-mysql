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
        <header> <h3><?php echo $titulo; ?></h3></header>
        <article>
            <form action="<?php echo $action; ?>" method="POST">
                <input type="hidden" name="id" 
                      value="<?php echo $provedor->id ?? '0'; ?>" >
                <div>
                    <label for="ruc" class="form-label">RUC</label>
                    <input type="text" name="ruc" class="form-control"
                      value="<?php echo $provedor->ruc ?? ''; ?>" >
                </div>
                <div>
                    <label for="nombre" class="form-label">Nombre de la empresa</label>
                    <input type="text" name="nombre" class="form-control"
                        value="<?php echo $provedor->nombres ?? ''; ?>">
                </div>
                <div>
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" name="telefono" class="form-control"
                        value="<?php echo $provedor->numeroTelefonico ?? ''; ?>">
                </div>
                <div>
                    <label for="web" class="form-label">Pagina web</label>
                    <input type="text" name="web"  class="form-control"
                        value="<?php echo $provedor->paginaWeb ?? ''; ?>">
                </div>
                <div>
                    <input type="reset" value="Cancelar" class="btn btn-link">
                    <input type="submit" value="<?php echo $boton; ?>" class="btn btn-success">
                </div>
            </form>
        </article>
    </section>

</body>
</html>