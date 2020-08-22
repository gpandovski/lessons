<?php
namespace App\Repositories;

interface IRepository {

    public function get(int $id); // find by id
    public function getAll(); // find all
    // public function add(object $entity);
    // public function addRange(array $entities);
    // public function remove(object $entity);
    // public function removeRange(array $entities);
}