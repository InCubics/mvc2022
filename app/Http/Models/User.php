<?php
	/**
	 * Project: MVC2022.
	 * Author:  InCubics
	 * Date:    28/06/2022
	 * File:    Fruit.php
	 */
	
	namespace Http\Models;
	
	class User extends Model
	{
		//protected $table = 'other_tablename_than "fruits"';
		protected $hidden       = ['password', 'token'];
		protected $fillables    = ['username', 'password', 'profile', 'forgot_hash', 'token'];
		
		
		public function getFillables()
		{
			return $this->fillables;
		}
		
	}
