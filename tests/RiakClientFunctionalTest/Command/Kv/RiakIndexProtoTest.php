<?php

namespace RiakClientFunctionalTest\Command\Kv;

/**
 * @group proto
 * @group functional
 */
class RiakIndexProtoTest extends RiakIndexTest
{
    /**
     * {@inheritdoc}
     */
    protected function createClient()
    {
        return $this->createRiakProtoClient();
    }
}