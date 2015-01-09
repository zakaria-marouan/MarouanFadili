<?php

class Comments extends Eloquent {
	
		protected $fillable =array ('title', 'text');
		protected $table = 'comments';
}