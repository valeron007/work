<?php 
	
//	function myecho(...$str)
//	{
//		foreach ($str as $v) {
//			# code...
//			echo "$v<br/>\n";
//		}
//	}
//
//	function tabber($space, ...$planets)
//	{
//		$new = [];
//		foreach ($planets as $planet) {
//			# code...
//			$new[] = str_repeat("&nbsp", $space).$planet;
//		}
//		call_user_func_array("myecho", $new);
//	}
//
//	$myfuncecho = function(...$str)
//	{
//		foreach ($str as $v) {
//			# code...
//			echo "$v<br />\n";
//		}
//	};
//
//	function tabberTwo($spaces, $echo, ...$planets)
//	{
//		$new = [];
//		foreach ($planets as $planet) {
//			# code...
//			$new[] = str_repeat("&nbsp", $spaces).$planet;
//		}
//		$echo(...$new);
//	}

	//$myfuncecho("Меркурий", "Венера", "Земля", "Марс");
	//tabber(10, "Меркурий", "Венера", "Земля", "Марс");	

	/*$planets = ["Меркурий", "Венера", "Земля", "Марс"];

	tabberTwo(10, function(...$str){
		foreach ($str as $v) {
			# code...
			echo "$v<br />\n";
		}
	} ,...$planets);
	*/
	/*
	$message = "Работа не может быть продолжена из-за ошибок:";
	##замыкание
	$check = function(array $errors) use ($message)
	{
		if (isset($errors) && count($errors) > 0) {
			# code...
			echo "$message\n";
			foreach ($errors as $error) {
				# code...
				echo "$error\n";
			}
		}
	};

	$errors[] = "Заолните имя пользователя";
	$check($errors);

	$message = "Список требований уже не изменить";
	$errors = ["PHP", "MYSQL", "memcache"];

	$check($errors);
	*/

//	$a = 100;
//	function &r()
//	{
//		global $a;
//		return $a;
//	}

	//$b =& r();
	//$b = 50;
	//echo $a;

	/*
	function takeVal($a) { $x = $a[12345]; }
	function takeRef(&$a) { $x = $a[12345]; }
	function takeValAndModif($a) { $x = $a[12345]++; }
	function takeRefAndModif(&$a) { $x = $a[12345]++; }

	function test($func)
	{
		$a = [];
		for ($i=0; $i < 100000; $i++) { 
			# code...
			$a[$i] = $i;
		}

		for ($t=time(); $t == time(););

		for ($N=0, $t < time(); time() == $t; $N++) {
			$func($a);
		}
		printf("took %d itr/sec", $N);
		echo "\n";

	}

	test("takeVal");
	test("takeRef");
	test("takeValAndModif");
	test("takeRefAndModif");
	*/
	//генераторы
	/*
	function simple($from = 0, $to = 10)
	{
		for ($i = $from; $i < $to; $i++)
		{
			echo "$i<br />";
			yield $i;
		}
	}

    foreach (simple() as $val)
    {
        echo "квадрат:" . ($val * $val) . "<br/>";
        if ($val >= 5 ) break;
    }
	*/


//	function collect($arr, $callback)
//	{
//		foreach ($arr as $value)
//		{
//			yield $callback($value);
//		}
//	}
//
//	$arr = [1,2,3,4,5,6,7,8];

//	$collect = collect($arr, function ($e){ return ($e * $e);});
//	foreach ($collect as $val) echo "$val ";

//	function select($arr, $callback)
//	{
//		foreach ($arr as $value)
//		{
//			if($callback($value)) yield $value;
//		}
//
//	}
//
//	$select = select($arr, function($val)
//	{
//		return $val % 2  == 0 ? true : false;
//	});
//
//	$collect = collect($select, function($e)
//	{
//		return $e * $e;
//	});


	//foreach ($collect as $val) echo "$val ";

//	function square($e)
//	{
//		yield $e * $e;
//	}
//
//	function even_square($arr)
//	{
//		foreach ($arr as $value)
//		{
//			if ($value % 2 == 0) yield from square($value);
//		}
//	}

//	$mass = [1,2,3,4,5,6,7,8,9,10];
//
//	foreach (even_square($mass) as $val)
//	{
//		echo "$val ";
//	}


//	function crange($size)
//	{
//		$arr = [];
//		for ($i = 0; $i < $size; $i++)
//		{
//			$arr = $i;
//		}
//		return $arr;
//	}
//
//	$tempArray = crange(1000000);

	//foreach ($tempArray as $val) echo "$val ";


//	function crange($size)
//	{
//		for ($i = 0; $i < size; $i++)
//		{
//			yield $i;
//		}
//	}
//
//	$range = crange(1000000);
//
//	foreach ($range as $i) echo "$i ";
//
//	echo "memoryies=".memory_get_usage()."<br/>";


//	for ($i = 32; $i < 128; $i++)
//	{
//		echo  $i . "simvol=". chr($i)."<br/>";
//	}

//	$str = "Hello  world, Valeron,
//			Hello  world, Valeron,
//			Hello  world, Valeron,";
//	echo $str. "\n";
//	$str = str_replace(",", ".", $str);
//	echo $str. "\n";

	//echo $str;

//	$example = <<<EXAXMPLE
//
//		<b> Valeron </b>
//		<h1> Bitrix </h1>
//		echo "Hello world<br/>";
//
//EXAXMPLE;

	//echo htmlspecialchars($example);
//	echo $example;

//	echo "<hr>После удаления тегов:".strip_tags($example);

	$code = "This is text";

//	echo crypt($code)."<br/>";
//	echo crypt($code)."<br/>";

//	$A = [
//		"a" => "First",
//        "z" => "Second",
//        "x" => "Third",
//        "d" => "Fourth",
//	];

	//krsort($A);

	//print_r($A);
//	$files;
//	$d = opendir(".");
//	while (false !== ($e == readdir($d)))
//	{
//		if (is_dir($e))
//		{
//			$files[$e] = 0;
//		}
//		else
//		{
//			$files[$e] = filesize($e);
//		}
//	}
//
//	uksort($files, function ($f1, $f2)
//	{
//		if (is_dir($f1) && is_dir($f2)) return -1;
//		if (!is_dir($f1) && is_dir($f2)) return 1;
//		return $f1 <=> $f2;
//	});
//
//	print_r($files);

//	$arr = [];
//	array_push($arr, 2);
//	array_push($arr, 10);
//	array_push($arr, 15);
//
//	print_r($arr);
//	echo "<br/>";
//	array_pop($arr);
//
//	array_unshift($arr, 5, "hello");
//
//	print_r($arr);
	/*
	$native = ["red", "green", "blue"];
	$collors = ["red", "yellow", "green", "cyan", "black"];
	//$color = ["black", "orange"];
	//$inter = array_intersect($collors, $native);
	$result = array_unique(array_merge($collors, $native));
	$res = array_diff($collors, $native);
	print_r($res);
	echo "<br/>";
	print_r($result);
	*/
	/*
	$arr = [
		"employee" => "Valeron",
		"phones" => [
			"965 470 1276",
            "999 470 1234",
		]
	];

	$json = json_encode($arr);

	echo $json;

	$arr_js = json_decode($json);

	print_r($arr_js);
	*/

//	$outFile = fopen("/home/valeron/sysinfo.f24", "r");
//
//	for ($i = 0; $s = fgets($outFile, 100); $i++)
//	{
//		if(mt_rand(0, $i) == 0)
//		{
//			$line = $s;
//		}
//		echo $line;
//	}

//работа с каталогами
//	echo dirname("/home/valeron/work/info.php")."\n";
//
//	echo realpath("/etc");
//
//	//$file = "data";
//	if(!file_exists("/home/valeron/test"))
//	{
//    	mkdir("/home/valeron/test", 0770);
//	}
//	chdir("/home/valeron/test");
//	$file = fopen("error.txt", "w+") or die("Error file create");
//	for ($i = 0; $i < 10; $i++)
//	{
//		fwrite($file, "$i");
//	}
//	fclose($file);
//
//	$file = fopen("error.txt", "r") or die("Error file create");
//	while (!feof($file)){
//        $st = fgets($file, 1024);
//        echo $st;
//	}
//	fclose($file);


//	$spec = [
//		0 => ["pipe", "r"],
//		1 => ["pipe", "w"],
//		2 => ["file", "/home/valeron/primer/error-output.txt", "a"]
//	];
//
//	$proc = proc_open("cat", $spec, $pipes);
//
//	for ($i = 0; $i < 10; $i++)
//	{
//		fwrite(pipes[0], "Hello world\n");
//	}
//	fclose($pipes[0]);
//	while (!feof($pipes[1])) echo fgets($pipes[1], 1024);
//	fclose($pipes[1]);
//
//	proc_close($proc);

//	$opt = [
//		"http" => [
//			'method' => "GET",
//			'user_agent' => "$_SERVER[HTTP_USER_AGENT];",
//			'header' => 'Content-type:text/html; charset=UTF-8'
//		]
//	];
//	echo $_SERVER['HTTP_USER_AGENT'];
//	echo "<pre>";
//		$file = file_get_contents("http://sofa.dev/products/");
//		echo file_get_contents("http://sofa.dev/products/",
//									false,
//									stream_context_create($opt)
//								);
//	echo "</pre>";
//
//	if (!mail("valeronchik0702@gmail.com", "fmail", "valeron hello!!!!!",
//        "From: webmaster@example.com \r\n"
//        ."X-Mailer: PHP/" . phpversion()
//	))
//	{
//		echo "Error mail\n";
//	}
	require_once("File/Logger.php");

	for ($n = 0; $n < 10; $n++)
	{
		$loger = new Logger("test$n", "test.log");
		$loger->Log("Hello");
	}

	exit();

?>
