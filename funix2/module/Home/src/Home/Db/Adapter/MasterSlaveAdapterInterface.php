<?php

namespace Home\Db\Adapter;

interface MasterSlaveAdapterInterface
{
    /**
     * @return Zend\Db\Adapter
     */
    public function getSlaveAdapter();
}
