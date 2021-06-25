<?php
//CONEXAO
try{

    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");

}catch(PDOException $e){
    echo "Erro com o banco de dados; ".$e->getMessage();
}catch(Exception $e){
    echo "Erro generico: ".$e->getMessage();
}

//INSERT
//1 FORMA
// $res = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:n, :t, :e)");

// $res->bindValue(":n", "Rudz2d34");
// $res->bindValue(":t", "00000d00234000");
// $res->bindValue(":e", "tesd234te@gmail.com");
// $res->execute();

//2 FORMA

//$pdo->query("INSERT INTO pessoa(nome, telefone, email) VALUES ('Rudasdz', '1230000', 'tesasdwte@gmail.com')");

//DELETE E UPDATE

// $cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
// $id = 7;
// $cmd->bindValue(":id" ,$id);
// $cmd->execute();

//ou

//$res = $pdo->query("DELETE FROM pessoa WHERE id = '1'");

// $cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
// $cmd->bindValue(":e", "grau@gmail.com");
// $cmd->bindValue(":id", 8);
// $cmd->execute();

//$cmd = $pdo->query("UPDATE pessoa SET email = 'rudzsons@gmail.com' WHERE id = '9'");

//SELECT

$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id", 10);
$cmd->execute();
$resul = $cmd->fetch(PDO::FETCH_ASSOC);

foreach ($resul as $key => $value) {
    echo $key.":".$value."<br>";
}

//ou
//$cmd->fetchAll();
