<?php
/**
 * @var $config
 */

/* Quản lý giỏ hàng */
if(!$config['order']['active']){
    unset($config['news']['hinh-thuc-thanh-toan']);
}

/* product */

unset($config['product']['thu-vien-anh']);
unset($config['product']['san-pham']['gallery']['video']);
unset($config['product']['san-pham']['gallery']['taptin']);

unset($config['news']['tin-tuc']['gallery']['video']);
unset($config['news']['tin-tuc']['gallery']['taptin']);