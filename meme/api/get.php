<?php
header("Content-Type:application/json");

if (isset($_GET['all']))
{
    run_query(
            "UPDATE `meme` SET `meme_rCount` = `meme_rCount` + 1  WHERE 1;",
            "SELECT * FROM `meme`;"
        );
}
else if (isset($_GET['id']))
{
    $id=$_GET['id'];
    run_query(
            "UPDATE `meme` SET `meme_rCount` = `meme_rCount` + 1  WHERE `meme_id`=$id;",
            "SELECT * FROM `meme` WHERE `meme_id` = '$id';"
        );
}
else if (isset($_GET['page']))
{
    $page=$_GET['page'];
    run_query(
            "UPDATE `meme` SET `meme_rCount` = `meme_rCount` + 1  WHERE `meme_page`=$page;",
            "SELECT * FROM `meme` WHERE `meme_page` = $page;"
        );
}
else if (isset($_GET['popular'])) 
{
    run_query(
        "UPDATE `meme` SET `meme_rCount` = `meme_rCount` + 1  WHERE `meme_rCount` = (SELECT max(`meme_rCount`) FROM `meme`);",
        "SELECT * FROM `meme` ORDER BY `meme_rCount` DESC LIMIT 1;"
    );    
}

function run_query($increment_query, $select_query){
    include('../include/db.php');

    $result = mysqli_query($con, $select_query); //first query to check existance
    $row_counter = mysqli_num_rows($result);
    if($row_counter>0)
    {
        //Initialization
        $array_counter = 0;
        $response = array('success' => array(),'data' => array());

        mysqli_query($con, $increment_query);   //increment request count on every meme
        $result = mysqli_query($con, $select_query);    //requery to pull the increment
        while($row = mysqli_fetch_array($result))
        {
            $response["data"][$array_counter] = array(
                'id'    => (int)$row['meme_id'],
                'name'  => $row['meme_name'],
                'url'   => $row['meme_url'],
                'page'  => (int)$row['meme_page'],
                'requestCount' => (int)$row['meme_rCount']
            );
            if($row_counter==1)
            {
                //success
                header("HTTP/1.1 200 OK");
                $response["success"] = "true";
                echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); //eof
            }
            $row_counter = $row_counter-1;
            $array_counter = $array_counter+1;
        }
    }
    else
    {
        //fail
        header("HTTP/1.1 400 Bad Request");
        $response["success"] = "false";
        echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); 
    }
}
?>