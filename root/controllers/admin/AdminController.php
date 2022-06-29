<?php 
    class AdminController extends Controller{
        
        public $data = [], $model = [];
        
        public function __construct(){
            //construct
        }
        
        public function index(){
            //Index
        }

        public function insertUsers($data){
            //$this->db->table('users')->delete();
            $this->db->table('users')->insert($data);
            return $this->db->lastId();
        }
    }