<?php

use Phinx\Seed\AbstractSeed;

class SeedTestimonialsTable extends AbstractSeed
{
    
    public function run()
    {

    $data = array(

          'title'    => 'Trailblazer',
          'testimonial'     => 'ReviewedByMe',
          'user_id'         => '1',
    );

      $posts = $this->table('testimonials');
      $posts->insert($data)
            ->save();
  }
}
