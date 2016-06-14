<?php
/*
 * Created by 赵晓帅
 * Date: 2016/1/30
 * Time: 17:01
 *
 * 文件上传  接口
 * */

/*视频上传接口
 * 0 上传成功
 * -1 上传失败
 *
 * */
$destination_folder = '../photo/';
//上传文件保存路径
$response = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (TRUE) {
		$username = $_POST['username'];
		if ($_FILES["files"]["size"] == '0' || $_FILES['files']['size'] > 100 * 1024 * 1024) {
			$response['statue'] = -4;
			echo json_encode($response);
			exit ;
		} else {
			$arr = array('jpg', 'bmp', 'gif', 'pcx', 'tga', 'psd', 'ai', 'png', 'pcd', 'dxf', 'fpx', 'ufo');
			if (in_array(strtolower(pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION)), $arr)) {
				$destination_path = $destination_folder .$username. $_FILES['files']['name'];
				if (!file_exists($destination_folder)) {
					$response['statue'] = 1;
					$response['photoname'] = $_FILES['files']['name'];	
					echo json_encode($response);
					exit ;
				} else {
					if (move_uploaded_file($_FILES["files"]["tmp_name"], $destination_path)) {
						$response['statue'] = 1;
						$response['photoname'] = $_FILES['files']['name'];
						echo json_encode($response);
						exit ;
					}
				}
			} else {
				$response['statue'] = -3;
				echo json_encode($response);
				exit ;
			}
		}
	}else{
		$response['statue'] = -2;
		echo json_encode($response);
		exit ;
	}
} else {
	$response['statue'] = -1;
	echo json_encode($response);
	exit ;
}
