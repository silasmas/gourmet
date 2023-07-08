<?php

namespace App\Http\Controllers;

use InvalidArgumentException;
use App\Http\Controllers\Controller;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class BaseController extends Controller
{
    /**
     * Handle response
     *
     * @param  $result
     * @param  $msg
     * @return \Illuminate\Http\Response
     */
    public function handleResponse($result, $msg)
    {
        $res = [
            'success' => true,
            'message' => $msg,
            'data'    => $result
        ];

        return response()->json($res, 200);
    }

    /**
     * Handle response error
     *
     * @param  $error
     * @param array  $errorMsg
     * @param  $code
     * @return \Illuminate\Http\Response
     */
    public function handleError($error, $errorMsg = [], $code = 404)
    {
        $res = [
            'success' => false,
            'message' => $error
        ];

        if (!empty($errorMsg)) {
            $res['data'] = $errorMsg;
        }

        return response()->json($res, $code);
    }

    /**
     * Delete directory and its files
     *
     * @param  $dirPath
     * @return \Illuminate\Http\Response
     */
    public static function deleteDir($dirPath)
    {
        if (!is_dir($dirPath)) {
            throw new InvalidArgumentException($dirPath . ' must be a directory');
        }

        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/' AND substr($dirPath, strlen($dirPath) - 1, 1) != 'c') {
            $dirPath .= '/';
        }

        $files = glob($dirPath . '*', GLOB_MARK);

        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);

            } else {
                unlink($file);
            }
        }

        rmdir($dirPath);
    }
}
