<?php
/**
 * DownloadManagerShell
 *
 * @package    DownloadManager
 * @copyright  Copyright (c) 2012 SEPTENI CO.,LTD ALL RIGHTS RESERVED. (http://www.septeni.co.jp/)
 * @version    $Id$
 */

//if (!function_exists('pcntl_fork')) die('PCNTL functions not available on this PHP installation');

//App::uses('AppShell', 'Console/Command');
//App::uses('ComponentCollection', 'Controller');
App::uses('ApiAdstatsLogicComponent', 'Controller/Component');
//require_once VENDORS . 'Utils/CustomLog.php';


class DownloadManagerShell extends AppShell {

    public function startup() {

    }

    /**
     * Main process
     */
    public function main() {
        CustomLog::writeDebugLog('Deleted lockfile ' . $this->_lockFile);
        CustomLog::writeDebugLog('DownloadManager end.');

    }

}

