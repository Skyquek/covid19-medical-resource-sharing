<?php
session_start();
include('../Model/Category.php');

$action = $_POST["action"];
if($action == "add")
{
    $category_name = $_POST["category_name"];

    $categoryQuery = new Category();
    $categoryName = $categoryQuery::add($category_name);

    header('Location: http://localhost/covid19-medical-resource-sharing/src/View/admin/manageCategory.php');
    exit;
}
else if($action == "update")
{
    $category_name  = $_POST["category_name"];
    $category_id    = $_POST["category_id"];

    $categoryQuery = new Category();
    $categoryName = $categoryQuery::update($category_id, $category_name);

    header('Location: http://localhost/covid19-medical-resource-sharing/src/View/admin/manageCategory.php');
    exit;
}
else if($action == "delete")
{
    echo "hello";
    $category_id    = $_POST["category_id"];

    $categoryQuery = new Category();
    echo $categoryQuery::delete($category_id);

    header('Location: http://localhost/covid19-medical-resource-sharing/src/View/admin/manageCategory.php');
    exit;
}

?>