<?php
function castType($data)
{
    if (is_bool($data)) {
        $pattern = [
            0 => 'No',
            1 => 'Yes'
        ];
        $data = $pattern[(int)$data];
    }

    if (preg_match("/^(http:\/\/){1}/", $data)) {
        $data = sprintf('<a target="_blank" href="%s">%s</a>', $data, $data);
    }
    return $data;
}
