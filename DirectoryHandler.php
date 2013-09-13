<?php

/**
* @package DirectoryHandler
* @author Joe Casabona 
* @description Class that performs various operations on a given directory
* primary function is to print all of the contents in directories and subdirectories
* Version: 2.0.1
**/

class DirectoryHandler{

	var $dirName;
	
	/**
	* constructor
	* @param string $dn the name of a directory
	**/

	function __construct($dn){
		$this->dirName= $dn;
	
	}
	

	/**
	* function printDir prints what is returned from $this->getDir()
	* @param string $dir optional the name of a directory. Defaults to $this->dirName;
	* @param string $parent option name of $dir's parent
	**/
	function printDir($dir="", $parent=""){
		print "<div id=\"accordion\">";
		print $this->getDir($dir, $parent);
		print "</div>";
	}
	
	/**
	* Recursive function gettDir
	* @param string $dir optional the name of a directory
	* @param string $parent option name of $dir's parent; added for recursive part of function
	* @return string $contents - all files and subdirectores formatted in an unordered list
	* @description gets all files and subdirectories of given directory and returns them 
	* in unordered list(defaults to $this->dirName)
	**/
	
	function getDir($dir="", $parent=""){
		$contents= "";
		
		if($dir == "" && $parent == ""){
			$dir= $this->dirName;
			$lowlvl= $dir;
		}else{
			$lowlvl= $dir;
			$dir= $parent. "/". $dir;
		}
	
		$fd= opendir($dir);
		$contents.= "<ul id=\"". $lowlvl ."\' class=\"current\">\n";
	
		while($read= readdir($fd)){
			if ($read!= "." && $read!= ".."){
				$isDir= (is_dir($read) || is_dir($dir. "/" .$read));
				$name= ($isDir) ? $this->normalName($read) : '<a href="'.$dir.'/'.$read.'">'.$read.'</a>';
			
				if($isDir){
					$name= "<a href=\"#". $read ."\" class=\"heading\">". $name ."</a>";
					$class= "subdir";
					$ext= "";
				}else{
					$class= "file";
					$ext= $this->getExtention($read);
				}
			
				$contents.= "\t<li class=\"$class $ext\">". $name;
				
				if($isDir){
					$contents.= $this->getDir($read, $dir);
				}
				
				$contents.= "\t</li>\n";
			}
		}
		
		$contents.= "</ul>\n\n";
		
		return $contents;
	}


	/**
	* function normalName takes a string and replaces special characters _, -, and + with spaces. 
	* Also capitalizes first letter of string.
	* @param string $name name of a file
	* @return a normalized string
	**/

	function normalName($name){
		$new= "";
		$new.= strtoupper(substr($name, 0, 1));
	
		$find= array("_", "-", "+");
		$name= str_replace($find, " ", substr($name, 1));
		
		return $new.$name;
	}
	
	
	
/*	function createZipFiles($dir=""){
		if($dir == "") $dir= $this->dirName;
		$zip = new ZipArchive();
		$filename = "./".$this->dirName;
		
		chmod($dir, 0777);

		if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
    		exit("cannot open <$filename>\n");
		}
		
		$files= $this->getFiles($dir);
		foreach($files as $f){
			$zip->addFile($dir. "/". $f);
		}
		
		$zip->close();
		
		chmod($dir, 0755);
	}
*/
	/**
	* function getExtention takes a filename (it must be a file name) and returns the extention
	* Also capitalizes first letter of string.
	* @param string $name name of a file
	* @return a normalized string
	**/

	function getExtention($name){
		$ext= explode(".", $name);
		return $ext[sizeof($ext)-1];
	}

	/**
	* function getFiles returns an array of all the files (not directories) in the directory
	* @param string $dir optional - name of a directory. Defaults to $this->dirName
	* @param boolean $getSubs option a switch to return subdirectories only (used in function getSubDirectories()
	* @return array with all filenames.
	**/
	function getFiles($dir="", $getSubs=false){
	
		$files= array();
		
		if($dir == ""){ $dir= $this->dirName; }
		$fd= opendir($dir);
	
		while($read= readdir($fd)){
			if ($read!= "." && $read!= ".."){
				
				if($getSubs && is_dir($dir."/".$read)){
					$files[]= $read;
				}else if(!$getSubs && !is_dir($dir."/".$read)){
					$files[]= $read;
				}
			}
		}
	
		return $files;	
	}
	
	/**
	* function getSubDirectories returns an array of all the subdirectories in the directory 
	* by calling getFiles with 2nd optional parameter
	* @param string $dir optional - name of a directory. Defaults to $this->dirName
	* @return array with all subdirectories.
	**/
	
	function getSubDirectories($dir=""){
		return $this->getFiles($dir, true);
	}
	
	

}