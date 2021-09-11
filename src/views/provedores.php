<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <header>
            <h3>Lista de proovedores</h3>
        </header>
        <article>
            <table>
                <thead>
                    <tr>
                        <th>RUC</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($provedores as $provedor) {
                    ?>
                    <tr>
                        <th><?php echo $provedor->ruc; ?></th>
                        <td><?php echo $provedor->nombres; ?></td>
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