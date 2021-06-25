<?php

if(isset($_GET['id'])){

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    if(empty($id)){
        header('location: /cursophp/ORM');
    }

    $user = new \App\Models\Site\User;

    try{
        $userEncontrado = $user->find($id);
        
    }catch(\Exception $e){
        header('location: /cursophp/ORM');
    }

}else{
    header('location: /cursophp/ORM');
}
?>

<a href="/cursophp/ORM" class="btn btn-success btn-xs">
<i class="fa fa-hand-o-left" aria-hidden="true"></i>
 Voltar para o início</a>

 <h3>
 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>    
 Editar Usuário
</h3>


<form method="post" action="pages/update.php?id=<?php echo $userEncontrado->id; ?>">

        <label>User</label>
        <input type="text" name="name" class="form-control" value="<?php echo $userEncontrado->name;?>">

        <label>E-mail</label>
        <input type="text" name="email" class="form-control" value="<?php echo $userEncontrado->email;?>">
        <br>
        <button type="submit" class="btn btn-warning">Atualizar</button>
</form>



