<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Tags\GetTag;
use SimpleSquid\Vend\TwoZero\Requests\Tags\ListTags;

class Tags extends Resource
{
    public function listTags(
        ?int $before,
        ?int $pageSize,
        ?bool $deleted,
    ): Response {
        return $this->connector->send(new ListTags($before, $pageSize, $deleted));
    }

    public function getTag(
        string $tagId,
    ): Response {
        return $this->connector->send(new GetTag($tagId));
    }
}
