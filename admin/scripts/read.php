<?php 

function getAll($tbl){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * FROM ' .$tbl;
    $results = $pdo->query($queryAll);
    
    if($results){
        return $results;

    }else{
        return 'There was aproblem accessing this info';
    }
}