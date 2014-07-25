<?php

class MasterMerchant extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();
        if ($GLOBALS['perm']->have_perm("autor")) {
            $tab = new Navigation(_("MasterMerchant"), PluginEngine::getURL($this, array(), "game/overview"));
            Navigation::addItem("/profile/mastermerchant", $tab);
        }
    }

}