<?php
require "config.php";
require "./dao/UsuarioDaoMysql.php";
phpinfo();
$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">Adicionar usuário</a>

<table border='1' width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($lista as $usuario) : ?>
        <tr>
            <td><?= $usuario->getId(); ?></td>
            <td><?= $usuario->getNome(); ?></td>
            <td><?= $usuario->getEmail(); ?></td>
            <td>
                <a href="editar.php">[Editar]</a>
                <a href="excluir.php">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>