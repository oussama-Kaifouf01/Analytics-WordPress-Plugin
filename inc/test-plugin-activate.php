<?php
/**
 * @package  TestPlugin
 */

class TestPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}