function uncheckAll(form1,status)  //��ѡ
{
	var elements = form1.getElementsByTagName('input');		//��ȡinput��ǩ
	for(var i=0; i<elements.length; i++)					//���ݱ�ǩ�ĳ���ִ��ѭ��
	{
		if(elements[i].type == 'checkbox')					//�ж϶�����Ԫ�ص����ͣ��������Ϊcheckbox
		{
		  if(elements[i].checked==true){					//�жϵ�checked��ֵΪtrueʱ
			elements[i].checked=false;					    //Ϊchecked��ֵΪfalse
		  }
		}
	}	
}

function checkAll(form1,status)		//ȫѡ
{
	var elements = form1.getElementsByTagName('input');
	for(var i=0; i<elements.length; i++)
	{
		if(elements[i].type == 'checkbox')
		{
		  if(elements[i].checked==false){
			elements[i].checked=true;
		  }


		}
	}	
}
function switchAll(form1,status)			//��ѡ
{
	var elements = form1.getElementsByTagName('input');
	for(var i=0; i<elements.length; i++)
	{
		if(elements[i].type == 'checkbox')
		{
		  if(elements[i].checked==true){
			elements[i].checked=false;
		  }else if(elements[i].checked==false){
			elements[i].checked=true;

			}
		}
	}	
}
