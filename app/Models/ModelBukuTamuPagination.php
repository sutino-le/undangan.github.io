<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBukuTamuPagination extends Model
{
    protected $table = "bukutamu";
    protected $column_order = array(null, 'ktp_nomor', 'ktp_nama', 'ktp_tempat_lahir', 'ktp_tanggal_lahir', 'ktp_kelamin', 'ktp_alamat', 'ktp_rt', 'ktp_rw', 'kelurahan', 'kecamatan', 'kota_kabupaten', 'propinsi', 'ktp_hp', 'ktp_email', 'ktp_foto', null);
    protected $column_search = array('ktp_nomor', 'ktp_nama', 'ktp_tempat_lahir', 'ktp_tanggal_lahir', 'ktp_kelamin', 'ktp_alamat', 'ktp_rt', 'ktp_rw', 'kelurahan', 'kecamatan', 'kota_kabupaten', 'propinsi', 'ktp_hp', 'ktp_email', 'ktp_foto');
    protected $order = array('ktp_nama' => 'ASC');
    protected $request;
    protected $db;
    protected $dt;

    function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;

        $this->dt = $this->db->table($this->table)->join('wilayah', 'ktp_alamatid=id_wilayah', 'left')->join('users', 'ktp_nomor=userktp', 'left');
    }
    private function _get_datatables_query()
    {
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($this->request->getPost('search')['value']) {
                if ($i === 0) {
                    $this->dt->groupStart();
                    $this->dt->like($item, $this->request->getPost('search')['value']);
                } else {
                    $this->dt->orLike($item, $this->request->getPost('search')['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->dt->groupEnd();
            }
            $i++;
        }

        if ($this->request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }
    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($this->request->getPost('length') != -1)
            $this->dt->limit($this->request->getPost('length'), $this->request->getPost('start'));
        $query = $this->dt->get();
        return $query->getResult();
    }
    function count_filtered()
    {
        $this->_get_datatables_query();
        return $this->dt->countAllResults();
    }
    public function count_all()
    {
        $tbl_storage = $this->db->table($this->table);
        return $tbl_storage->countAllResults();
    }
}
