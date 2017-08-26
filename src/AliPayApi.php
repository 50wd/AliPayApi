<?php namespace Wlkj\AliPayApi;


class AliPayApi
{
	public $appid	  = 'wxbcfaa471bb9a3957';
	public $appsr	  = 'c2b10dab4ef8782ab2d82a1bcb44419d';
	public $dir 	  = '..\\storage\\';
	public $timeout   = 5;
	public $interval  = 5400;	// 更新间隔时间
	//public $interval  = 1;	// 更新间隔时间
					
	// ==================================================
	// 调用CURL发起GET请求	
	// 参数：$url  - 请求链接URL
	public function curl_get($url)
	{		
		$ch = curl_init();	
		curl_setopt_array($ch,[
					CURLOPT_URL 			=> $url,					
					CURLOPT_TIMEOUT 		=> $this->timeout,
					CURLOPT_RETURNTRANSFER	=> true,
					CURLOPT_SSL_VERIFYPEER  => false						
		]);	
		if( !$result = curl_exec($ch)){
			trigger_error(curl_error($ch));
		}
						
		curl_close($ch);
		return $result;		
	}  				
}
	

	
	
?>