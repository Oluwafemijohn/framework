<?php

namespace Crystal\Http;

use Crystal\Http\Middleware;

class Controller{

	public function middleware($middleware_s){
		if(is_string($middleware_s)){
			Middleware::call_list([$middleware_s]);
		}else if(is_array($middleware_s)){
			Middleware::call_list($middleware_s);
		}
	}


	public static function make_output($output){
		if(is_string($output) || is_null($output)){
			return $output;
		}else{
			if(method_exists($output, '__toString')){
				return $output->__toString();
			}else{
				throw new \Crystal\Exceptions\InvalidRouteActionOutput([$output , null , null]);
			}
		}
	}
}
