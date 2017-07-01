<?php

require_once("conn.php");

$artist_id =$_POST['selectbox_id']; 

//Run your query here to fetch the result and store it in a variable $data
if(isset($_POST['selectbox_id'])){

	$sql="SELECT * FROM `music` WHERE `id`=:artist_id LIMIT 1";
	$stm = $conn->prepare($sql);
	$stm->bindValue(':artist_id',(int) $artist_id,PDO::PARAM_INT);
	$stm->execute();
	$result=$stm->fetch(PDO::FETCH_OBJ);  

	$data['artist']= $result->artist;
    echo json_encode($data);
    exit();

}else{
    $data['artist']= "";
	echo json_encode($data);
    exit();
}

?>

