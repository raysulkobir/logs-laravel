<?php

namespace Raysulkobir\LogsLaravel\Logger;

use Illuminate\Support\Facades\Storage;
use Raysulkobir\LogsLaravel\Models\Log;


class Logger
{
    static function logDb($table_name, $contain, $table_id = null)
    {
        $log = new Log;
        $log->table_name = $table_name;
        $log->contain = json_encode($contain, true);
        $log->table_id = $table_id;
        $log->save();
    }

    static function logFile($log_msg)
    {
        $logFilename = "log-file";
        $logFileData = $logFilename . '/log-' . date('d-M-Y') . '.log';

        // Check if log message is an object or array and convert it to JSON
        if (is_object($log_msg) || is_array($log_msg)) {
            $log_msg = json_encode($log_msg);
        }

        // Ensure the directory exists. Storage facade takes care of this.
        if (!Storage::disk('local')->exists($logFilename)) {
            Storage::disk('local')->makeDirectory($logFilename);
        }

        // The storage path is relative to the filesystem's configured root.
        Storage::disk('local')->append($logFileData, $log_msg);
    }
}
