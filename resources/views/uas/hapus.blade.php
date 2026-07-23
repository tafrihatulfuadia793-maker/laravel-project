<?php

use Illuminate\Support\Facades\DB;

$id = $_GET['id'];

DB::table('pendaftaran_baru')
    ->where('id', $id)
    ->delete();

header("Location: /data");
exit;

?>