<?php

class File {
    public static function build_path($path_array) {
        $DS = DIRECTORY_SEPARATOR;
        $ROOT_FOLDER = '.'. $DS;
        return $ROOT_FOLDER. $DS . join($DS, $path_array);
    }
}
