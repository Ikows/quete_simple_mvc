<?php
namespace Controller;
use Model;
class ItemController
{
    public function index()
    {
        $itemManager = new Model\ItemManager();
        return $itemManager->selectAllItems();
    }
}