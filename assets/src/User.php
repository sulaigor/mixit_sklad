<?php

class User
    {
        protected $first_name;
        protected $last_name;
        protected $sex;
        protected $password;
        protected $avatar;

        public function getSex()
        {
            return $this->sex;
        }        
    
        public function getAvatar()
        {
            return $this->avatar;
        }

        public function setSex($sex)
        {
            $this->sex = $email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setFirstName($first_name)
        {
            $this->first_name = $first_name;
        }

        public function setLastName($last_name)
        {
            $this->last_name = $last_name;
        }

        public function getName()
        {
            return $this->first_name .' '. $this->last_name;
        }

        /**
         * User constructor.
         * @param $first_name
         * @param $last_name
         * @param $sex
         * @param $password
         */
        public function __construct($first_name, $last_name, $sex, $password)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->sex = $sex;
            $this->passwords = $password;
            
            if($sex == 'man')   $this->avatar = 'user_man.svg';
            else    $this->avatar = 'user_woman.svg';
        }
    }
