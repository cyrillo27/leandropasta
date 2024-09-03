<?php   
//inicia a sessão
<session_start();
include 'conexao.php';
$email = $_post['email'];
$password = $_post ['password']
$id_cliente = 0;
$sql = "select * from clientes where email = '$email' and 
password= '$password'";
$busca_cliente - mysqli_query ($conexao,$sql):
while (array - mysqli_fetch_array ($busca_cliente)){
$id_cliente = $array['id_cliente'];
$nome_cliente  = array ['nome_cliente'];
$email = array ['email'];
$password - $array ['password'];

}
if($id_cliente -- 0){
    unset ($_SESSION['id_cliente']);
    unset ($_SESSION['nome_cliente']);
    unset ($_SESSION['email']);
    header('location:cliente_rejeicao.php');   
}else{
    $_SESSION['id_cliente'] = $id_cliente;
    $_SESSION['nome_clientee'] = $nome_cliente;
    $_SESSION['email'] = $email;
    echo($nome_cliente);
    header('location:logado.php');
}

?>