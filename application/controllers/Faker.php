<?php
include APPPATH.'/third_party/faker/autoload.php';

class Faker extends CI_Controller{
    private $faker;
    public function __construct()
    {
        parent::__construct();
        $this->faker = Faker\Factory::create();
    }

    public function generate($n = false)
    {
        $this->faker->seed($n);

        if (!$n)
        {
            return false;
        }

        $this->news($n);
        $this->flyer($n);
        $this->peta($n);

        return 'success';
    }

    private function peta($n)
    {
        $this->db->empty_table('peta_kabs');
        for($i = 0; $i<$n;$i++)
        {
            $this->db->insert('peta_kabs',[
                'title' => $this->faker->sentence(6, true),
                'banner_url' => "https://picsum.photos/id/$i/300/300",
                'created_by' => $this->faker->name(),
                'file_url' => "https://picsum.photos/id/$i/300/200",
                'description' => $this->faker->paragraph(5, false),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

    private function flyer($n)
    {
        $this->db->empty_table('flyers');
        for($i = 0; $i<$n;$i++)
        {
            $this->db->insert('flyers',[
                'title' => $this->faker->sentence(6, true),
                'banner_url' => "https://picsum.photos/id/$i/300/300",
                'created_by' => $this->faker->name(),
                'file_url' => "https://picsum.photos/id/$i/300/200",
                'description' => $this->faker->paragraph(5, false),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

    private function news($n)
    {
        $this->db->empty_table('news');
        $this->db->empty_table('new_images');
        for($i = 0; $i<$n;$i++)
        {
            $this->db->insert('news',[
                'title' => $this->faker->sentence(6, true),
                'short_desc' => $this->faker->sentence(10, true),
                'content' => $this->faker->paragraph(5, false),
                'published' => $this->faker->name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $id = $this->db->insert_id();
            for ($j = 0; $j< 5;$j++)
            {
                $this->db->insert('new_images', [
                    'news_id' => $id,
                    'image_url' => "https://picsum.photos/id/$j/300/200"
                ]);
            }
        }
    }
}