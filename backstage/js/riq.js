// JavaScript Document
	function loadCalendar(field){
   var rtn = window.showModalDialog("calender.php","��ѡ���ѯ����","dialogWidth:250px;dialogHeight:220px;status:no;help:no;scrolling=no;scrollbars=no");
	if(rtn!=null)
		field.value=rtn;
   return;
}