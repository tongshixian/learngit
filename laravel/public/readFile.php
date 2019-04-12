<?php
function printFile($filepath)
{
	//substr(string,start,length)函数返回字符串的一部分；start规定在字符串的何处开始 ；length规定要返回的字符串长度。默认是直到字符串的结尾。
	//strripos(string,find,start)查找 "php" 在字符串中最后一次出现的位置； find为规定要查找的字符；start可选。规定开始搜索的位置
	
	//读取文件后缀名
	//$filetype = substr ( $filename, strripos ( $filename, "." ) + 1 );
	//判断是不是以txt结尾并且是文件
	#if ($filetype == "txt" && is_file ( $filepath . "/" . $filename ))		
	if ( is_file ( $filepath))
	{
	    echo 2;exit;
		$filename=iconv("gb2312","utf-8",$filepath);
		echo $filename."内容如下:"."<br/>";
		$fp = fopen ( $filepath, "r" );//打开文件
		#while (! feof ( $f )) //一直输出直到文件结尾
		$i = 1;
		while ($i < 10)
		{
			$line = fgets ( $fp );
			echo $line."<br/>";
			$i = $i +1;
		}
		fclose($fp);
	}
	echo 3;exit;
}
 
function readFileRecursive($filepath)
{
	if (is_dir($filepath)) //判断是不是目录
	{
	    echo 1;exit;
		$dirhandle = opendir ( $filepath );//打开文件夹的句柄
		if ($dirhandle) 
		{
			//判断是不是有子文件或者文件夹
			while ( ($filename = readdir ( $dirhandle ))!= false ) 		
			{
				if ($filename == "." or $filename == "..")
				{
					//echo "目录为“.”或“..”"."<br/>";
					continue;
				}
				
				//判断是否为目录，如果为目录递归调用函数，否则直接读取打印文件
				if(is_dir ($filepath . "/" . $filename ))
				{
					readFileRecursive($filepath . "/" . $filename);
				}
				else
				{
					//打印文件
					printFile($filepath . "/" . $filename);
					echo "<br/>";
				}
			}
			closedir ( $dirhandle );
		}
	}
	else
	{
		
		printFile($filepath . "/" . $filename);
		return;
	}
}
 
header("content-type:text/html;charset=utf-8");
echo "Hello World"."<br/>";
$filepath = "D:/text"; //想要读取的目录
echo $filepath."<br/>";
readFileRecursive($filepath);