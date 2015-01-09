<?php

class Articles extends Eloquent {
	
		protected $fillable =array ('titre', 'auteurs', 'corps');
		protected $table = 'articles';
}