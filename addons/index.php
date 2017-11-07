<?php
	namespace niceGirl;
	// create by Leeorichi - 11/2017
	
	class niceGirl{
		
		public $json;
		public $pic;
		public $logs_path;
		public $logs_str;
		
		private function wLog(){
			$this->logs_path = 'logs/'.date('Y-d-m').'.log';
			$fp = fopen($this->logs_path,'a+');
			fwrite($fp,$this->logs_str);
			fclose($fp);
		}
		
		public function showxx(){
			$data_json = json_decode(file_get_contents('https://api.trolyfacebook.com/gaixinh/#64033343w2r2y26474x2x2b4x2843313'),false);
			if(empty($data_json)){ die('System was be busy...'); }
			foreach($data_json->messages as $data){
				$this->pic = $data->attachment->payload->url;
				$this->logs_str = $this->pic. "\r\n";
				$this->wLog();
				break;
			}
			echo "<style>img { width: 100%; height: 100%;} </style> <center><img src='{$this->pic}' /></center>";
		}
		
		
	}	
	
	$runrun = new niceGirl;
	$runrun->showxx();