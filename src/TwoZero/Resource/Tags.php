<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Tags\GetTag;
use SimpleSquid\Vend\TwoZero\Requests\Tags\ListTags;

class Tags extends Resource
{
    public function getTag(
        string $tagId,
    ): Response {
        return $this->connector->send(new GetTag($tagId));
    }

    public function listTags(
        ?int $after = null,
        ?int $before = null,
        ?int $pageSize = null,
        ?bool $deleted = null,
    ): Response {
        return $this->connector->send(new ListTags($after, $before, $pageSize, $deleted));
    }
}
