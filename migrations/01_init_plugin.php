<?php
class InitPlugin extends DBMigration
{
	function up(){
        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_player` (
                `user_id` varchar(32) NOT NULL,
                `last_playtime` bigint(20) NOT NULL,
                `score` bigint(20) NOT NULL DEFAULT '0',
                `structurepoints` int(11) NOT NULL DEFAULT '0',
                PRIMARY KEY (`user_id`)
            ) ENGINE=InnoDB");
        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_player_resources` (
                `user_id` varchar(32) NOT NULL,
                `resource_id` varchar(32) NOT NULL,
                `quantity` int(11) NOT NULL,
                UNIQUE KEY `uniqueresources` (`user_id`,`resource_id`)
            ) ENGINE=InnoDB");
        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_player_structures` (
                `user_id` varchar(32) NOT NULL,
                `structure_id` varchar(32) NOT NULL
            ) ENGINE=InnoDB");
        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_resources` (
                `resource_id` varchar(32) NOT NULL,
                `name` varchar(128) NOT NULL,
                `symbol` varchar(128) NOT NULL,
                `chdate` bigint(20) NOT NULL,
                `mkdate` bigint(20) NOT NULL,
                PRIMARY KEY (`resource_id`),
                UNIQUE KEY `name` (`name`)
            ) ENGINE=InnoDB");

        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_resource_creation` (
                `resource_id` varchar(32) NOT NULL,
                `structure_id` varchar(32) NOT NULL,
                `used_resource_id` varchar(32) NOT NULL,
                `quantity` int(11) NOT NULL
            ) ENGINE=InnoDB");

        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_structures` (
                `structure_id` varchar(32) NOT NULL,
                `name` varchar(64) NOT NULL,
                `symbol` varchar(128) NOT NULL,
                `chdate` bigint(20) NOT NULL,
                `mkdate` bigint(20) NOT NULL,
                PRIMARY KEY (`structure_id`)
            ) ENGINE=InnoDB");
        DBManager::get()->exec(
            "CREATE TABLE IF NOT EXISTS `mm_structure_costs` (
                `structure_id` varchar(32) NOT NULL,
                `resource_id` varchar(32) NOT NULL,
                `quantity` int(11) NOT NULL
            ) ENGINE=InnoDB");

    }
}