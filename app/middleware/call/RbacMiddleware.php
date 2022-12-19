<?php
	/**
	 * Project: MVC2022.
	 * Author:  InCubics
	 * Date:    28/06/2022
	 * File:    MyMiddleware.php
	 */
	
	namespace middleware\call;
	
	use core\Response;
	
	class RbacMiddleware
	{
		// NB: more separate MiddleWare-classes can be made in the ./middleware - folder
		public function up($param = null, $param2 = null)
		{
			// dd( $param .' - '.$param2 );
			// (optional: params received from route-middleware,
			// called like: ['controller','action', ['mw-name'=> ['value1', 'value2'] ]],
			
			
			// NO return required
		}
		
		public function down()
		{
			// NO return required
		}
	}
