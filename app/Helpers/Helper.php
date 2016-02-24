<?php 

/*
 * URL Fonksiyonu
 *
 * Osman YILMAZ - www.astald.com
 */
if( ! function_exists('clink')) {
	function clink() {
		$prefix = '/';
		$param = func_get_args();
		if( ! empty($param[0]) ) {
			/*
			 * Müşteriler - customer
			 */
			if($param[0]=='customer')
				return url($prefix.'customer');
			else if($param[0]=='customer-search')
				return url($prefix.'customer/search/'.$param[1]);
			else if($param[0]=='customer-view')
				return url($prefix.'customer/view/'.$param[1]);
			else if($param[0]=='customer-trash')
				return url($prefix.'customer/trash');
			else if($param[0]=='customer-add')
				return url($prefix.'customer/add');
			else if($param[0]=='customer-edit')
				return url($prefix.'customer/edit/'.$param[1]);
			else if($param[0]=='customer-delete')
				return url($prefix.'customer/delete/'.$param[1]); 
			/*
			 * İşler - Works
			 */
			if($param[0]=='work')
				return url($prefix.'work');
			else if($param[0]=='work-view')
				return url($prefix.'work/view/'.$param[1]);
			else if($param[0]=='work-trash')
				return url($prefix.'work/trash');
			else if($param[0]=='work-add')
				return url($prefix.'work/add/'.$param[1]);
			else if($param[0]=='work-edit')
				return url($prefix.'work/edit/'.$param[1]);
			else if($param[0]=='work-delete')
				return url($prefix.'work/delete/'.$param[1]);
			/*
			 * Kullanıcı - User
			 */
			if($param[0]=='user')
				return url($prefix.'user');
			else if($param[0]=='user-add')
				return url($prefix.'user/add');
			else if($param[0]=='user-edit')
				return url($prefix.'user/edit/'.$param[1]);
			else if($param[0]=='user-delete')
				return url($prefix.'user/delete/'.$param[1]);
			else if($param[0]=='user-status')
				return url($prefix.'user/status/'.$param[1].'/'.$param[2]);
			/*
			 * Ayar - Setting
			 * */
			else if($param[0]=='setting')
				return url($prefix.'setting');
			else
				return url('/');

		}else{
			return url();
		}
	}
}

if( ! function_exists('customerCount') ) {
	function customerCount() {
		return count(Astald\Models\Customer::where('status','publish')->get());
	}
}

if( ! function_exists('letters') ) {
	function letters() {
		return Array ("a" => "A", "b" => "B", "c" => "C", "ç" => "Ç", "d" => "D", "e" => "E", "f" => "F", "g" => "G", "ğ" => "Ğ", "h" => "H", "i" => "İ", "ı" => "I", "j" => "J", "k" => "K", "l" => "L", "m" => "M", "n" => "N", "o" => "O", "ö" => "Ö", "p" => "P", "q" => "Q", "r" => "R", "s" => "S", "ş" => "Ş", "t" => "T", "u" => "U", "ü" => "Ü", "v" => "V", "w" => "W", "x" => "X", "y" => "Y", "z" => "Z");
	}
}

if( ! function_exists('gets') ) {
	function gets($g) {
		return Input::get($g);
	}
}

if( ! function_exists('segment') ) {
	function segment($r) {
		return Request::segment($r);
	}
}

if( ! function_exists('vw') ) {
	function vw($view = NULL, $dir = 'theme') {	 
		if(!is_null($view)) {
			if(view()->exists($view)) {
				return $view;
			} else {
				return 'errors.noview';
			}
		} else {
			return 'errors.noview';
		}
	}
}

if( ! function_exists('image') ) {
	function image($file, $w = NULL, $h = NULL, $dir = 'game') {	
		$upload = "upload/{$dir}/";
		return url($upload.$file); 
	}
}
if( ! function_exists('image_path') ) {
	function image_path($path = 'game', $file = NULL) {	
		if(!empty($file)){
			return public_path('upload/'.$path.'/'.$file);
		} else {
			return public_path('upload/'.$path);
		}
	}
}


if( ! function_exists('datetimes') ) {
	function datetimes($f, $zt = 'now')
	{  
		$z = date("$f", strtotime($zt));  
		$sreplace = array(  
		    'Monday'    => 'Pazartesi',  'Tuesday'   => 'Salı',  'Wednesday' => 'Çarşamba',  'Thursday'  => 'Perşembe',  'Friday'    => 'Cuma',  'Saturday'  => 'Cumartesi',  'Sunday'    => 'Pazar',  
		    'January'   => 'Ocak',  'February'  => 'Şubat',  'March'     => 'Mart',  'April'     => 'Nisan',  'May'       => 'Mayıs',  'June'      => 'Haziran',  'July'      => 'Temmuz',  'August'    => 'Ağustos',  'September' => 'Eylül',  'October'   => 'Ekim',  'November'  => 'Kasım',  'December'  => 'Aralık',  
		    'Mon'       => 'Pts',  'Tue'       => 'Sal',  'Wed'       => 'Çar',  'Thu'       => 'Per',   'Fri'       => 'Cum',  'Sat'       => 'Cts',  'Sun'       => 'Paz',  
			'Jan'       => 'Oca',  'Feb'       => 'Şub',  'Mar'       => 'Mar',  'Apr'       => 'Nis',  'Jun'       => 'Haz', 'Jul'       => 'Tem',  'Aug'       => 'Ağu',  'Sep'       => 'Eyl',  'Oct'       => 'Eki',  'Nov'       => 'Kas',  'Dec'       => 'Ara',  
		);  
		foreach($sreplace as $en => $tr)
		{  
		    $z = str_replace($en, $tr, $z);  
		}  
		if(strpos($z, 'Mayıs') !== false && strpos($f, 'F') === false) 
			$z = str_replace('Mayıs', 'May', $z);  
		return $z;  
	}  
}  