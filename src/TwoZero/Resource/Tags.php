<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Contracts\Response;
use SimpleSquid\Vend\TwoZero\Requests\Tags\GetTagById;
use SimpleSquid\Vend\TwoZero\Requests\Tags\ListTags;
use SimpleSquid\Vend\TwoZero\Resource;

class Tags extends Resource
{
    /**
     * @param  int  $before The upper limit for the version numbers to be included in the response.
     * @param  int  $pageSize The maximum number of items to be returned in the response.
     * @param  bool  $deleted Indicates whether deleted items should be included in the response.
     */
    public function listTags(?int $before, ?int $pageSize, ?bool $deleted): Response
    {
        return $this->connector->send(new ListTags($before, $pageSize, $deleted));
    }

    /**
     * @param  string  $tagId The tag id
     */
    public function getTagById(string $tagId): Response
    {
        return $this->connector->send(new GetTagById($tagId));
    }
}
