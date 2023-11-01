<?php

namespace SimpleSquid\Vend\TwoZero\Resource;

use Saloon\Http\Response;
use SimpleSquid\Vend\Common\Resource;
use SimpleSquid\Vend\TwoZero\Requests\Tags\CreateTag;
use SimpleSquid\Vend\TwoZero\Requests\Tags\DeleteTag;
use SimpleSquid\Vend\TwoZero\Requests\Tags\GetTag;
use SimpleSquid\Vend\TwoZero\Requests\Tags\ListTags;
use SimpleSquid\Vend\TwoZero\Requests\Tags\UpdateTag;

class Tags extends Resource
{
    /**
     * @param  array<string, mixed>  $payload
     */
    public function createTag(
        array $payload,
    ): Response {
        return $this->connector->send(new CreateTag($payload));
    }

    public function deleteTag(
        string $tagId,
    ): Response {
        return $this->connector->send(new DeleteTag($tagId));
    }

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

    /**
     * @param  array<string, mixed>  $payload
     */
    public function updateTag(
        string $tagId,
        array $payload,
    ): Response {
        return $this->connector->send(new UpdateTag($tagId, $payload));
    }
}
