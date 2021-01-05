<?php

namespace App\Models;

use CodeIgniter\Model;

class LogsModel extends Model
{
    protected $table = 'logs';

    public function getLogs($id = false)
    {
        if ($id) {
            return $this->where(['id' => $id])->first();
        } else {
            return $this->findAll();
        }
    }

    public function insertLogs($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function insertLogByRoute($route)
    {
        $data = [
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'page_url' => base_url() . $route,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ];
        $this->insertLogs($data);
    }

    public function updateLogs($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteLogs($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_pembayaran' => $id));
        return $query;
    }
}
