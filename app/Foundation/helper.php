<?php

/**
 * 设置表注释
 *
 * @param $table
 * @param $comment
 * @return bool
 */
function set_table_name($table, $comment)
{
    return DB::statement(/** @lang text */ "ALTER TABLE `{$table}` comment '{$comment}'");
}

