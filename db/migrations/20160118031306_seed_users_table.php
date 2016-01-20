<?php

use Phinx\Migration\AbstractMigration;

class SeedUsersTable extends AbstractMigration
{
    public function up()
    {
      $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);

      $this->execute("
        insert into users (first_name, last_name, email, password)
        values
        ('Trevor', 'Sawler', 'trevor@gmail.com', '$password_hash')
      ");
    }

    public function down()
    {

    }

}
