// JavaScript Document


        $(document).ready(function(){

            //获取当前日期是星期几
            

                var theDate = new Date();
                var week=theDate.getDay();
                var theWeek = ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
                //alert(theWeek[week]);
            

            //alert($(document).width());

            $("#search").hide();<!--页面加载完成时，隐藏搜索框-->
            $("#search-button").click(function(){
                $("#search").toggle();<!--toggle()函数实现搜索框显示/隐藏相互切换-->
            });
			
			//实现一级栏目的折叠与展开
			$("#list1").hide();
			$("#nav-btn").click(function(){
				$("#list1").slideToggle();
			});

            //请求一级栏目数据
            $.ajax({
       
        url:'server/first_name.php',
        type:'post',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

				var x="";
				for (var i=0; i<result.length; i++)
				{
					x= x +'<li><a onClick="javascript:gotoSecondMenu('+result[i]["id"]+')">'+result[i]["title"]+'</a></li>'+'\n';
				}
                var y='<ul data-role="listview" data-theme="c">'+x+'</ul>';
				document.getElementById("list1").innerHTML=y;
				//alert(x);
                
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
	
		$.ajax({
       
        url:'server/channal_content_xue.php',
        type:'post',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result.length; i++)
				{
					html=html+'<li><a href="">'+result[i]["title"]+'</a><span>bdvouibvud</span></li>'+"\n";
				}
				
				html='<ul>'+html+'</ul>';
				//alert(html);
				document.getElementById("sch_news").innerHTML=html;
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
		$.ajax({
       
        url:'server/channal_content_xue.php',
        type:'post',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result.length; i++)
				{
					html=html+'<li><a href="">'+result[i]["title"]+'</a></li>'+"\n";
				}
				
				html='<ul>'+html+'</ul>';
				//alert(html);
				document.getElementById("imp_annment").innerHTML=html;
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
		$.ajax({
       
        url:'server/channal_content_xue.php',
        type:'post',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result.length; i++)
				{
					html=html+'<li><a href="">'+result[i]["title"]+'</a></li>'+"\n";
				}
				
				html='<ul>'+html+'</ul>';
				//alert(html);
				document.getElementById("aca_lecture").innerHTML=html;
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });

        });

function gotoSecondMenu(id)
{

	window.location.href='php/second.php?id='+id;
	
	
}