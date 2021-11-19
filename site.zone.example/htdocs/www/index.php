<?php
$url = 'http://wn.buri.me/test/api';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);

if(is_string($res))
{
    $remote_exts = json_decode($res);

    if(json_last_error() != JSON_ERROR_NONE) die('Ашипко!');
    else
    {
        $local_exts = get_loaded_extensions();
        sort($local_exts, SORT_NATURAL | SORT_FLAG_CASE);

        $exts = array_unique(array_merge($local_exts, $remote_exts));

        echo '<style>td {padding: 0 6px;} table {margin: auto;}</style>';
        echo '<table border="1">';
        echo '<tr class="h"><th>№</th><th>Local</th><th>Remote</th></tr>';

        foreach($exts AS $key => $ext)
        {
            $loc = (in_array($ext, $local_exts)) ? $ext : null;
            $remote = (in_array($ext, $remote_exts)) ? $ext : null;
            echo '<tr><td clss="e">'.$key.'</td><td>'.$loc.'</td><td>'.$remote.'</td></tr>';
        }

        echo '</table>';
    }
}
else die('Что-то пошло не так...');
echo '<hr>';
phpinfo();
