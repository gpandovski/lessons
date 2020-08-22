<?php
namespace App\Repositories;

use App\User;

class UserRepository implements IRepository
{
    protected $db;

    public function __construct(User $db)
    {
        $this->db = $db;
    }

    public function get(int $id) {
        return $this->db->find($id);
    }

    public function getAll() {
        return $this->db->all();
    }
}