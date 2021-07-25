<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Badges.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Konceiver\Commentable\Models\Comment;

return [

    'models' => [

        /*
         * When using the "HasBadges" trait from this package, we need to
         * know which Eloquent model should be used to retrieve your badges.
         */

        'comment' => Comment::class,

    ],

    'tables' => [

        'comments' => 'comments',

        'model_has_comments' => 'model_has_comments',

    ],

];
