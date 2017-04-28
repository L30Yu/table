<?php  
/** 
 * Created by PhpStorm. 
 * User: DreamBoy 
 * Date: 2016/6/1 
 * Time: 10:16 
 */  
  
$res = array(  
    array('id' => 33, 'name' => '444', 'description' => 'Greate, the weather is getting better', 'forks_count' => 1, 'stargazers_count' => 0),  
    array('id' => 29, 'name' => 'AAA', 'description' => '1, LOL, this is a description', 'forks_count' => 1, 'stargazers_count' => 0),  
    array('id' => 20, 'name' => 'aasdasd', 'description' => '1, 111111 again and again', 'forks_count' => 1, 'stargazers_count' => 0)  
);  
  
echo json_encode($res);  


?>