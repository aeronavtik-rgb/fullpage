<?php
defined('DATALIFEENGINE') || die('Not now');
$member_id['user_group'] == 1 || msg('error', $lang['addnews_denied'], $lang['db_denied']);

include_once sprintf('%s/mods/%s/admin/index.php', ENGINE_DIR, $mod);
