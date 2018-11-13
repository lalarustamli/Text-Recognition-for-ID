<?php
$nfrontfile=str_replace('uploads/','uploads/clean',$frontfile);
shell_exec('./textcleaner '.$frontfile.' '.$nfrontfile.' 2>&1');
$output = shell_exec("LANG=en_US.utf-8; python3 pytesseract.py ".$frontfile." 2>&1");
$defragmented=array();
$data=array();
$list = preg_split("/((\r?\n)|(\r\n?))/", $output);
foreach($list as $key => $line){
$line=trim($line);
	if(!empty($line) && ($line!='') && ($line!='M“')){
		$defragmented[$key] = $line;
	}
}
$list=array_values($defragmented);
foreach($list as $key => $line){
    print 'line '.$key.':'.$line."\n";
$clean=trim(strtr($line,array("'"=>"","*"=>"")));
	//if (strpos($clean, 'No') !== false) {
	//	$passnum = $list[$key+1];
	//		$data['passnum']=substr($passnum,-8);
	//}
	if(strpos($clean, 'Sur') !== false || strpos($clean, 'Soyad') !== false){
		$data['surname']=$list[$key+1];
	}
	if (strpos($clean, 'Adı') !== false) {
		$namesurname = str_replace(' O LU',' OĞLU',$list[$key+1]);
		$cut=explode(' ',$namesurname);
		 
		
				$data['name'] = $cut[0];
				$data['fathername'] = $cut[1];
	}

	if (strpos($clean, ' exp') !== false) {
		$alltarix = $list[$key+1];
		$tarix1 = str_replace('-', '', $alltarix);
$tarix2 = str_replace("'", "", $tarix1);
$tarix3 = str_replace('"', '', $tarix2);
$tarix4 = str_replace("!", "", $tarix3);
$tarix4 = str_replace(" 1 ", " ", $tarix4);
$tarix4 = str_replace("İ", "1", $tarix4);
$tarix4 = str_replace("_“", "", $tarix4);
		$tarix = str_replace(' ', '', $tarix4);
 
    		$data['born']=substr($tarix, 0, 10);
				$data['gived']=substr($tarix,10,20-10);
				$data['etibar']=substr($tarix,-10);
	}
	if (strpos($clean, 'place') !== false or strpos($clean, 'yer') !== false) {
			$data['place']=$list[$key+1];
	}


}
print_r($data);
