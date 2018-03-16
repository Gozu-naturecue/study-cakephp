<?php
use Migrations\AbstractSeed;
use Cake\Chronos\Chronos;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
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
        $now  = Chronos::now();

        $data = [
            [
                'title'    => 'title 1',
                'body'     => 'description',
                'created'  => $now,
                'modified' => $now,
            ],
            [
                'title'    => 'title 2',
                'body'     => 'description',
                'created'  => $now,
                'modified' => $now,
            ],
            [
                'title'    => 'title 3',
                'body'     => 'description',
                'created'  => $now,
                'modified' => $now,
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
