<?php
session_start();		//����Session�Ự
header("content-type:image/png");  	  //���ô���ͼ��ĸ�ʽ
$image_width=70;                      //����ͼ����
$image_height=18;              //����ͼ��߶�

$new_number=$_GET[num];
$num_image=imagecreate($image_width,$image_height);  //����һ������
imagecolorallocate($num_image,255,255,255);     	 //���û�������ɫ

for($i=0;$i<strlen($new_number);$i++){  //ѭ����ȡSESSION�����е���֤��
   $font=mt_rand(3,5);                            	//�������������
   $x=mt_rand(1,8)+$image_width*$i/4;               //��������ַ�����λ�õ�X����
   $y=mt_rand(1,$image_height/4);                   //��������ַ�����λ�õ�Y����
   $color=imagecolorallocate($num_image,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));  	 //�����ַ�����ɫ
   imagestring($num_image,$font,$x,$y,$new_number[$i],$color);				     //ˮƽ����ַ�
}

imagepng($num_image);      			//����PNG��ʽ��ͼ��
imagedestroy($num_image);  			//�ͷ�ͼ����Դ
?>