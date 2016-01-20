<?php

use Phinx\Migration\AbstractMigration;

class SeedUsersTable extends AbstractMigration
{
  public function up()
  {
    $password_hash = password_hash('secret', PASSWORD_DEFAULT);

    $this->execute("
        insert into users (first_name, last_name, email, password)
        ('Brian', 'Smith', '432a234@gmail.com', '$password_hash')
    ");
  }

public function down()
{

}

}
