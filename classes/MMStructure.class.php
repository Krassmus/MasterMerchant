<?php

class MMStructure extends SimpleORMap {

    protected static function configure($config = array())
    {
        $config['db_table'] = 'mm_structure';
        parent::configure($config);
    }

}