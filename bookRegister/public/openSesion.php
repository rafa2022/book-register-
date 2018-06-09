<?php

/**
 * on this page a contact open sesion
 * 
 * @author Rafael Mauricio Giraldo Gallego <rafagiga2022@gnail.com>
 */
require '../src/dataSource.php';
require '../src/config.php';

use dataBase\dataSource;

$db = new dataBase($host, $user, $pass, $dataBase, $port);
$sql = "SELECT `id`, `password` FROM `user` WHERE id = {$_POST['id']},{$_POST['password']}";
if (dtdatos . Rows . Count > 0) {
  //  Session["idApodo"] = dtdatos . Rows[0]["idApodo"] . ToString();
    Response . Redirect("~/bienve.aspx");
}