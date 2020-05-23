<?php
header("Content-Type:application/json");
include('../include/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $json = file_get_contents('php://input'); // Takes raw data from the request
    $data = json_decode($json); // Converts it into a PHP object

    if($data){
        
        //initialization
        $array_counter=0; 
        $response = array('success' => array(),'data' => array());

        $result = mysqli_query($con, "SELECT * FROM `meme`  ORDER BY `meme_id` DESC LIMIT 1;");
        $row = mysqli_fetch_array($result);
        
        $found_page=(int)$row['meme_page']; //fetch the page of last meme in db

        $result1 = mysqli_query($con, "SELECT COUNT(*) FROM `meme` WHERE `meme_page`=$found_page;");
        $row1 = mysqli_fetch_array($result1);
        $space_taken = $row1['COUNT(*)'];   //count the number of meme in that page
        
        //Max per page : 9 memes
        $open_space = 9-$space_taken; //available space to load new memes
        
        //loop : insert into the db
        foreach($data->data as $key => $value) {
            if($open_space==0){
                $open_space=9;
                $found_page++;
            }
            if($open_space>0){
                mysqli_query($con, "INSERT INTO `meme`(`meme_name`, `meme_url`, `meme_page`, `meme_rCount`) 
                VALUES ('$value->name','$value->url',$found_page,0);");
                $open_space--;
            
                //Response
                $result2 = mysqli_query($con, "SELECT * FROM `meme` WHERE `meme_url`='$value->url';");
                $row2 = mysqli_fetch_array($result2);
                $response["data"][$array_counter++]= array(
                    'id'    => (int)$row2['meme_id'],
                    'name'  => $row2['meme_name'],
                    'url'   => $row2['meme_url'],
                    'page'  => (int)$row2['meme_page'],
                    'requestCount' => (int)$row2['meme_rCount']
                );
            }
        }
        //success
        header("HTTP/1.1 200 OK");
        $response["success"] = "true";
        echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); //final json response encoding

    }else{
        //fail
        header("HTTP/1.1 400 Bad Request");
        $response["success"] = "false";
        $response["error message"] = "No input found!";
        echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); //final json response encoding
    }
}else{
    header("HTTP/1.1 400 Bad Request");
        $response["success"] = "false";
        $response["error message"] = "Wrong request type!";
        echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); //final json response encoding
}
    
    
    
    

?>