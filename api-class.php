<?php
/*========================
=== API class for IDA TOKEN ==
====  https://idatoken.org  =====
=========== v.1 ===========
========================*/

class ida{
	protected static $token;
	protected static $delay;
    protected static $headers;
    protected static $query;
    protected static $responses;
	
    public function __construct($token, $delay=10)
    {
       self::$token = $token;
       self::$delay = $delay;
    }
	
    public static function call($query) {
		$query['token'] = self::$token;
		$query['delay'] = self::$delay;
		if(empty($query) || empty($query['action'])) return array('result'=>false,'code'=>99,'message'=>'Please read the documentation.');
        self::$query = http_build_query($query);
        self::$headers = array();
		self::$headers[] = 'Accept: application/json';
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,'https://idatoken.org/api.v1.php');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, self::$headers);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, self::$query);
        self::$responses = curl_exec($curl);
		if(self::$responses === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) != 200) 
            return array('result'=>false,'code'=>99,'message'=>'Unknown error, something bad happened.','error'=>curl_error($curl));
        else
			return json_decode(self::$responses,1);
        curl_close($curl);
    }
}
?>