<?php


$user = new App\Models\Site\User;

$users = $user->all();

?>
<h3>

<i class="fa fa-users" aria-hidden="true"></i>

Usuários Cadastrados (<?php echo count($users);?>)

</h3>

<table class="table table-striped">

    <thead>
        <tr>

            <th>Id</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>

    <tbody>

        <?php foreach($users as $userEncontrado):?>

            <tr>
                <td><?php echo $userEncontrado->id; ?></td>
                <td><?php echo $userEncontrado->name; ?></td>
                <td>
                    <a href="?p=edit&id=<?php echo $userEncontrado->id; ?>" class="btn btn-defalt btn-xs">
                        <i class="fa fa-pencil-square-o"></i>Editar
                    </a>
                </td>
                <td>
                    <a href="pages/delete.php?id=<?php echo $userEncontrado->id;?>" class="btn btn-danger btn-xs">
                        <i class="fa fa-times"></i>Deletar
                    </a>
                </td>
            </tr>

        <?php endforeach ?>

    </tbody>

</table>

<hr id="linha">

<h3>

<i class="fa fa-user-plus" aria-hidden="true"></i>

Cadastrar Usuário 
        </h3>
<form method="post" action="pages/create.php">

        <label>User</label>
        <input type="text" name="name" class="form-control">

        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
        <br>
        <button type="submit" class="btn btn-warning">Cadastrar</button>
</form>


