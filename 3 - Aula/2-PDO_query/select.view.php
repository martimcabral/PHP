<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarefas</title>
    </head>
    <body>
        <table>
            <h1>As minhas tarefas</h1>
            <thead>
                <tr>
                    <th>Tarefa</th>
                    <th>Terminada</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task){ ?>
                <tr>
                    <td><?=$task['tarefa']?></td>
                    <td align="center"><?=$task['terminada'] ? '✅' : '⬜'?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

</html>