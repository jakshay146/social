<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CommentsFixture
 */
class CommentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'comment_id' => 1,
                'user_id' => 1,
                'post_id' => 1,
                'comment' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
