<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table='users';
    protected $allowedFields =['username','password','firstname', 'lastname', 'address', 'zip', 'city', 'created_at','updated_at' ];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $useTimestamps = true;
    protected $updatedField  = 'updated_at';


    protected function beforeInsert (array $data){
        $data = $this->passwordHash($data);
        return $data;
    }
    protected function beforeUpdate (array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }

    public function select($id){
        return $query =  $this->table('users')->where('id',$id)->first(); 
    
    }
    ///////////////////--- TEST ---\\\\\\\\\\\\\\\\\\\\\\
    // public function add_user(array $data){
    //     $data = $this->passwordHash2($data);
    //     $this->db->table('users')->insert($data);
    // }

    // public function update_user(array $data, int $id){
    //     $data = $this->passwordHash2($data);
        
    //     $this->db->table('users')->where('id',$id)->update($data);
    // }

    // protected function passwordHash2(array $data){
    //     if (isset($data['password'])) {
    //         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    //     }

    //     return $data;
    // }
}