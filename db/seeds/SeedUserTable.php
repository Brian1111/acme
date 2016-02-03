<?php

use Phinx\Seed\AbstractSeed;

class SeedUserTable extends AbstractSeed
{
  public function run()
  {

   $password_hash = password_hash('123456', PASSWORD_DEFAULT);

   $data = array(

          'first_name'    => 'Brian',
          'last_name'     => 'Smith',
          'email'         => 'test@gmail.com',
          'password'       => $password_hash,
    );

      $posts = $this->table('users');
      $posts->insert($data)
            ->save();
  }

}
