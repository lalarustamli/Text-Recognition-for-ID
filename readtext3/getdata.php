<?php

$nfrontfile=str_replace('uploads/','uploads/clean',$frontfile);
$nbackfile=str_replace('uploads/','uploads/clean',$backfile);
shell_exec('./textcleaner '.$frontfile.' '.$nfrontfile.' ; ./textcleaner '.$backfile.' '.$nbackfile.' 2>&1');
$frontfile=$nfrontfile;
$backfile=$nbackfile;
$output = shell_exec("LANG=en_US.utf-8; python3 pytesseract.py ".$frontfile." 2>&1");
$output.= shell_exec("LANG=en_US.utf-8; python3 snapback.py ".$backfile." 2>&1");
$list = preg_split("/((\r?\n)|(\r\n?))/", $output);
$defragmented=array();
$data=array();
foreach($list as $key => $line){
$line=trim($line);
	if(!empty($line) && ($line!='')){
		$defragmented[$key] = $line;	
	}
}
$list=array_values($defragmented);
foreach($list as $key => $line){
    print 'line '.$key.':'.$line."\n";
$clean=trim(strtr($line,array("'"=>"","*"=>"")));
	if($line=='Adı'){
	
		$data['name']=$list[$key+1];
		
	
	}
	if (strpos($clean, 'yad') !== false) {
		$data['surname']=$list[$key+1];
	}
	if($clean=='Atasının adı'){
		$data['fathername']=$list[$key+1];


	}
	if (strpos($clean, 'Doğul') !== false) {
    		$data['born']=$list[$key+2];
	}
	if (strpos($clean, '<<<') !== false) {
		$bignumbers = $list[$key+1];
    		$data['fin']=substr($bignumbers, -8 ,7);
	}
	if (strpos($clean, 'aşay') !== false) {
		$addresline = $list[$key+1];
    		$data['place']=substr($addresline,0, (strlen($addresline)-3));
		if (strpos($list[$key+2], 'orq') === false) {
			$data['place'].=' '.$list[$key+2];	
		}
	}
	if (strpos($clean, 'veril') !== false) {
		$data['gived']=$list[$key+1];
		$data['etibar']=date('d.m.',strtotime($data['born'])).(date('Y',strtotime($data['gived']))+9);
	}
	

}


