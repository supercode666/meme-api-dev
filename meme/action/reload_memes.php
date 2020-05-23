<?php
//scraping page plugin
include('../include/simple_html_dom.php');
include('../include/db.php');

//reset the db everytime this file is loaded
mysqli_query($con, "TRUNCATE TABLE meme;");

//declaration
$page_counter=1;
$page_checker=1;
$id_counter=1;
$array_counter=0;
$name_arr = [];

//page loop -- while memes are still available
while($page_checker==1){

//point to scraping page
$html = file_get_html('http://interview.funplay8.com/index.php?page='.$page_counter);

//end of meme -- page checker
$exist = $html->find('<div class="meme-name">',0)->find('h6');

if(!$exist){
    echo "Done scraping and inserted into the database!\n";
    $page_checker=0;
}else{
    //name scraping
    foreach($exist as $list){
        $name_arr[$array_counter]=$list->plaintext;
        $array_counter++;
    } 
    $array_counter=0;   //reset the array
    //url scraping
    foreach($html->find('img') as $img) {
        $result = mysqli_query($con, "INSERT INTO `meme`(`meme_name`, `meme_url`, `meme_page`, `meme_rCount`) 
        VALUES ('$name_arr[$array_counter]','$img->src',$page_counter,0);");
        $array_counter++;
    }
    $array_counter=0;   //reset the array
}
$page_counter++;    //next page
}

?>