<?php
Doo::loadCore('db/DooModel');
class Guestbook extends DooModel{
    public $id;
    public $username;
    public $message;
    public $dateline;
    public $ip;
    public $_table = 'guestbook';
    public $_primarykey = 'id';
    public $_fields = array('id','username','message','dateline','ip');
}
?>