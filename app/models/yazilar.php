<?php

class Yazilar extends Eloquent {
    public $primaryKey = 'kimlik';
    protected $table = 'yazilar';
    public $timestamps = false;

    public $guarded = array();
}


?>
