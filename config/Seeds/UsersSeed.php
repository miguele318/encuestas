<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
use App\Model\Entity\User;
/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        
        $table = $this->table('users');
        $user= new User();
        
        $data[]= [
            'username' => 'johel_27',
            'first_name' => 'Johel',
            'last_name' => 'Solis',
            'password' => $user->_setPassword('software3'),
            'role'=> 'admin',
            'active'=> '1',
            'create_date'=> date ('Y-m-d H:i:s'),
            'modified_date'=> date ('Y-m-d H:i:s')
        ];

        $data[]=[
            'username' => 'miguele318',
            'first_name' => 'Miguele',
            'last_name' => 'Calambas',
            'password' => $user->_setPassword('software3'),
            'role' => 'admin',
            'active' => '1',
            'create_date' => date ('Y-m-d H:i:s'),
            'modified_date' => date ('Y-m-d H:i:s')
        ];

        $data[]=[
            'username' => 'jeison418',
            'first_name' => 'Jeison',
            'last_name' => 'Ortiz',
            'password' => $user->_setPassword('software3'),
            'role' => 'user',
            'active' => '1',
            'create_date' => date ('Y-m-d H:i:s'),
            'modified_date' => date ('Y-m-d H:i:s')
        ];


        $table->insert($data)->save();
    }
  
}
