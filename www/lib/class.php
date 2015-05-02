<?php 
    class user
    {   
        private $u_login;
        private $u_pass;
        private $db_login;
        private $db_pass;
        //public  $u_login;
        //public $u_pass;
        //public $db_login;
        //public $db_pass;
        public function __construct($u_login="",$u_pass="") {
            $this->u_login = $u_login;
            $this->u_pass = $u_pass;
            
        }
        
        public function set_and_varif_u_info () {
             //if (!$this->u_login = $_POST['u_login'] || !$this->u_pass = $_POST['u_pass']) {
               //return false; 
             //} else {
               //  $this->u_login = $_POST['u_login'];
                 //$this->u_pass = $_POST['u_pass'];
             //}
            // в дальнейшем конечно это будет запрос к бд
            //чухня с тхт файлами не прокатила, var_dump $this->db... указывает на то, что количество символов
            //отличается, соответственно  true получить не представляется возможным
             //$this->db_login = trim(file_get_contents("user.txt"));
            //$this->db_pass = trim(file_get_contents("pass.txt"));
            $this->u_login = $_POST['u_login'];
            !$this->u_pass = $_POST['u_pass'];
            $this->db_login = "user";
            $this->db_pass = "pass";
                        
            if ($this->u_login == $this->db_login && $this->u_pass == $this->db_pass) {
                return true;
            }
                else {return false;}
            }
        
        
        
          public function get_db_login () {
              return $this->db_login;
          }
          public function get_db_pass () {
              return $this->db_pass;
          }
          public function get_u_login () {
              return $this->u_login;
          }
          public function get_u_pass () {
              return $this->u_pass;
          }
    }
    ?>