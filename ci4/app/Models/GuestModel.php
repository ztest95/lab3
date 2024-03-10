<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'myguests';

	protected $allowedFields = ['name', 'comment'];

    public function getGuest($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['name' => $name])->first();

    }

}

// CREATE TABLE `myguests` (
//     `id` int(6) UNSIGNED NOT NULL,
//     `name` varchar(30) NOT NULL,
//     `comment` text NOT NULL,
//     `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
//   );
