<?php

use Phinx\Seed\AbstractSeed;

class SeedPagesTable extends AbstractSeed
{

    public function run()
    {

    $data = array(

          'browser_title'    => 'Wildkingdom',
          'page_content'     => 'springbuck',
    );

      $posts = $this->table('pages');
      $posts->insert($data)
            ->save();
    }
}
