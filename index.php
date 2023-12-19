<?php
 include("crud.php");

 //connexion
$conn = new Connexion();
$conn->connexion_data();
$crud = new crud($conn->pdo);
//INSERT
$data = array(
    'name' => 'value1',
    'age' => '32',
    'gmail' => 'value3',
  
);

$table = 'user';
$result = $crud->add($table,$data);

if ($result) {
    echo "  inserted successfully. $result";
} 

// SELELCT
$result_Sel = $crud->selectRecords($table, $columns = "*", $where = null); 
//DELETE
  $id =2;
$result_del = $crud->deleteRecord($table,$id );
//  UPDATE
 
$data = array("name" => "yadin", "age" => 24,"gmail"=>"youtub@");
$id = 8;

$result = $crud->updateRecord($table, $data, $id);

if ($result) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record.";
}
?>
