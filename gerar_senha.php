<?php
$senha = '123'; // senha padrão
$hash_admin = password_hash($senha, PASSWORD_DEFAULT); // gera o hash da senha
$hash_usuario = password_hash($senha, PASSWORD_DEFAULT); // gera o hash do usuário


echo "Hash para admin." . $hash_admin . "<br>"; // exibe o hash do usuário
echo "Hash para usuario." .  $hash_usuario . "<br>"; // exibe o hash da senha
echo $senha;