<?php

namespace SimpleSquid\Vend\Actions;

use SimpleSquid\Vend\Resources\TwoDotZero\ChannelCollection;

trait ManagesChannels
{
    /**
     * List channel records.
     * Returns a list of configured channels.
     *
     * @return ChannelCollection
     */
    public function channels(): ChannelCollection
    {
        return $this->collection(ChannelCollection::class, '2.0/channels');
    }
}