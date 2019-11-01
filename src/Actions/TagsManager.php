<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\Tag;
use SimpleSquid\Vend\Resources\TwoDotZero\TagCollection;

class TagsManager
{
    use ManagesResources;

    /**
     * Get a single tag.
     * Returns a single tag with a given ID.
     *
     * @param  string  $id  Valid tag ID.
     *
     * @return Tag
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function find(string $id): Tag
    {
        return $this->single(Tag::class, "2.0/tags/$id");
    }

    /**
     * List tags.
     * Returns a collection of tags.
     *
     * @param  int|null  $page_size  The maximum number of items to be returned in the response.
     * @param  int|null  $after      The lower limit for the version numbers to be included in the response.
     * @param  int|null  $before     The upper limit for the version numbers to be included in the response.
     *
     * @return TagCollection
     * @throws \SimpleSquid\Vend\Exceptions\AuthorisationException
     * @throws \SimpleSquid\Vend\Exceptions\BadRequestException
     * @throws \SimpleSquid\Vend\Exceptions\NotFoundException
     * @throws \SimpleSquid\Vend\Exceptions\RateLimitException
     * @throws \SimpleSquid\Vend\Exceptions\RequestException
     * @throws \SimpleSquid\Vend\Exceptions\TokenExpiredException
     * @throws \SimpleSquid\Vend\Exceptions\UnauthorisedException
     * @throws \SimpleSquid\Vend\Exceptions\UnknownException
     */
    public function get(int $page_size = null, int $after = null, int $before = null): TagCollection
    {
        return $this->collection(TagCollection::class, '2.0/tags', compact('after', 'before', 'page_size'));
    }
}
