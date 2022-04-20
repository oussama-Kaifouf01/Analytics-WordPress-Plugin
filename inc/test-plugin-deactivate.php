<?php
/**
 * @package  TestPlugin
 */

class TestPPluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}