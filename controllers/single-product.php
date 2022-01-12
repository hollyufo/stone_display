<?php

if(isset($_GET['id'])){
    $productClass = new Product();   
    $product = $productClass->find($_GET['id']);
}else{
    exit;
}