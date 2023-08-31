<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <table>
        <th>
            <tr>Nome</tr>
            <tr>Idade</tr>
            <tr>Altura</tr>
            <tr>Escolaridade</tr>
            <tr>Salário</tr>
        </th>
        <tbody>
            <?php while($pessoa) { ?>
            <tr>Nome</tr>
            <tr>Idade</tr>
            <tr>Altura</tr>
            <tr>Escolaridade</tr>
            <tr>Salário</tr>
            <?php } ?>
            </tbody>
    </table>
</body>
</html>