<?php

class Users extends Eloquent {
	
		protected $fillable =array ('nom', 'prenom', 'email', 'password');
		protected $table = 'users';
}