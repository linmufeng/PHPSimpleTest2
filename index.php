<?php 
     $maxLine = 4; //ÿ������
	 $no = 17;//ѧ�����
     $line = ceil($no / $maxLine);
     $row = $no % $maxLine ? $no % $maxLine : $maxLine;
	 echo "���<b>".$no."</b>����λ�ڵ�<b>".$line."</b>�ŵ�<b>".$row."</b>��λ��";
?>