<?php
/*
 * Copyright (c) Arnaud Ligny <arnaud@ligny.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cecil\Collection\Page;

use MyCLabs\Enum\Enum;

/**
 * Type enum.
 *
 * @method static Type PAGE()
 * @method static Type HOMEPAGE()
 * @method static Type SECTION()
 * @method static Type TAXONOMY()
 * @method static Type TERMS()
 */
class Type extends Enum
{
    public const PAGE = 'page';
    public const HOMEPAGE = 'homepage';
    public const SECTION = 'section';
    public const TAXONOMY = 'taxonomy';
    public const TERMS = 'terms';
}