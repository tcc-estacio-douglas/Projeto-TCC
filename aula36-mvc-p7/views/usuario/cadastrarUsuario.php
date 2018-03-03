<h1>Cadastar Usuário</h1>
<?php
    echo $this->Dados['msg'];
?>
<form name="CadUsuario" action="" method="POST" enctype="multipart/for-data">

    <label>Nome: </label>
    <input type="text" name="name" placeholder="Digite seu nome" value="<?php
    if (isset($this->Dados)): echo $this->Dados['name'];
    endif;
    ?>"><br><br>

    <label>E-mail: </label>
    <input type="email" name="email" placeholder="Digite seu e-mail" value="<?php
           if (isset($this->Dados)): echo $this->Dados['email'];
           endif;
           ?>"><br><br>

    <label>Senha: </label>
    <input type="password" name="password" placeholder="Digite sua senha"><br><br>

    <input type="submit" value="Cadastrar" name="SendCadUsuario">

</form>