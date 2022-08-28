<?php 
require 'connection.php';
	if(!empty($_FILES['img']))
	{
		//print_r($_FILES['img']);die;
		
		$info = new SplFileInfo($_FILES["img"]["name"]);
		$ext = $info->getExtension();
		$file_name = time().'.'.$ext;
		if($ext == "mp4" OR $ext == "MP4" OR $ext == "AVI" OR $ext == "avi" OR $ext == "mkv" OR $ext == "MKV")
		{
			$target_file_video = "../ADMIN/uploads/img/".$file_name;
			if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file_video)) 
			{
				
				$sql="INSERT INTO gallery (video) VALUES('$file_name')";
				if ($conn->query($sql) == TRUE) 
				{
					//
					header("Location:../ADMIN/gallery.php");
				}
			}
		}
		else
		{
			$target_file_img = "../ADMIN/uploads/img/".$file_name;
			if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file_img)) 
			{
				$sql="INSERT INTO gallery (img) VALUES('$file_name')";
				if ($conn->query($sql) == TRUE) 
				{
					header("Location:../ADMIN/gallery.php");
				}
			}	
		}
	}
	/*$file_name = time().'.png';
	$target_file_img = "../ADMIN/uploads/img/".$file_name;
	$target_file_video = "../ADMIN/uploads/video/".$file_name;
	
	$info = new SplFileInfo($_FILES["img"]["name"]);
	$ext = $info->getExtension();
	
	if($ext == "mp4" OR $ext == "MP4" OR $ext == "AVI" OR $ext == "avi" OR $ext == "mkv" OR $ext == "MKV")
	{
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file_video)) 
		{
			$sql="insert into gallery (video) values ('$file_name')";
			echo $sql;die;
			header("Location:../ADMIN/gallery.php");
		}	
	}
	else
	{
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file_img)) 
		{
			$sql="insert into gallery (img) values ('$file_name')";	
			header("Location:../ADMIN/gallery.php");
		}
	}*/
?>