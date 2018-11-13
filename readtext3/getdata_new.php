<?php
$nfrontfile=str_replace('uploads/','uploads/clean',$frontfile);
$nbackfile=str_replace('uploads/','uploads/clean',$backfile);
shell_exec('./textcleaner '.$frontfile.' '.$nfrontfile.' ; ./textcleaner '.$backfile.' '.$nbackfile.' 2>&1');
$frontfile=$nfrontfile;
$backfile=$nbackfile;
$output = shell_exec("LANG=en_US.utf-8; tesseract ".$frontfile." -l aze stdout 2>&1");
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
$clean=trim(strtr($line,array("'"=>"","*"=>"")));
	if (strpos($clean, 'NAME') !== false) {
		$data['name']=trim(strtr($list[$key+1],array("'"=>"",";"=>"","*"=>"","_"=>"")));;
	}
	if (strpos($clean, 'YAD') !== false) {
		$data['surname']=$list[$key+1];
	}
	if(strpos($clean, 'PATRO') !== false){
		$data['fathername']=$list[$key+1];

	}
	if(strpos($clean, 'TARİX') !== false || ( strpos($clean, 'DOCUL') !== false && strpos($clean, 'YER') === false)) {
    $borndate = $list[$key+1];
    		$data['born']=substr($borndate,-10);
	}
  if(strpos($clean, 'EXP') !== false){
		$data['etibar']=substr($list[$key+1],-10);
  }
  if(strpos($clean, 'PLACE') !== false){
		$data['place']=$list[$key+1];
    if (strpos($list[$key+2], 'BLOOD') === false) {
  	 		$data['place'].=' '.$list[$key+2];
  	 	}
  }
} 
$data['senedtype']='newpass';
$data["gived"]='';
$data["fin"]='';
