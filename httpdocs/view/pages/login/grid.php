<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");
$alpha = array('a','b','c','d','e','f','g','h','i','j','k', 'l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$i = 5;

echo $alpha[$i]; //will output letter E
$grid = [];
?>

.container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.container > div {
  background-color: red;
  text-align: center;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
}

.container *{
    border-radius: 10px;
    /* padding: 10px;
     */
  }