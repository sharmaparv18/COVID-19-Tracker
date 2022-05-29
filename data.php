<?php
$data= file_get_contents('https://api.covid19api.com/summary');
$coronadata= json_decode($data);
echo '<pre>';
print_r($coronadata);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

