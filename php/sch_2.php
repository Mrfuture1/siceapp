<!DOCTYPE html >
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../css/jquery.mobile.squareui.css" />
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.mobile-1.4.0.min.js"></script>


    
    <script type="text/javascript">
        $(document).ready(function(){

        $.ajax({
       
        url:'../sci_research_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["科研团队"].length; i++)
				{
					html=html+result["科研团队"][i]["title"]+result["科研团队"][i]["content"]+"\n";
				}
				document.getElementById("showContent").innerHTML=html;
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
   	 	});
	
        });
    </script>
	<style>
        .ui-block-a ,
        .ui-block-b ,
		.ui-block-c
        {
            background-color: #ffffff;
            height: 50px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            padding-top: 12px;
        }
        
		
		a{
			text-decoration:none;
		}
    </style>

    
</head>
<body>

<div data-role="page" >
    <div data-role="header" data-theme="i">
        
        <h1>信息与通信工程学院</h1>
    </div>

    <div data-role="content">

        <img src="../images/firstlist_logo/sciResearch.jpg" style="max-width:100%; max-height:100%" align="center"> 
		<p></p>
        
        	<div class="ui-grid-a" >
            	<div class="ui-block-a" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" onClick="resTeam()" style="color: white">科研团队</a></div>
                <div class="ui-block-b" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" onClick="ongProject()" style="color: white">在研项目</a></div>
                <div class="ui-block-a" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" onClick="impConvention()" style="color: white">重要会议</a></div>
                <div class="ui-block-b" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" onClick="acaActivity()" style="color: white">学术活动</a></div>

            </div>
        
        <div id="showContent">
        </div>


    </div>
    <div align="center" style=" margin-left:-16px; margin-right:-16px">
                <p style="background-color: darkcyan; margin:0px; color:#ddd" >访问量：17598579次</p>
                <p style="background-color:darkcyan; margin:0px ; color:#ddd">联系电话：010-62283295</p>
                <p style="background-color:darkcyan; margin:0px ; color:#ddd">地址：北京市海淀区西土城路10号</p>
                <p style="background-color:darkcyan; margin:0px; color:#ddd" >版权所有 &copy 信息与通信工程学院</p>
    </div>

</div>



<script type="text/javascript">
	//科研团队
    function resTeam()
	{
		$.ajax({
       
        url:'../sci_research_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["科研团队"].length; i++)
				{
					html=html+result["科研团队"][i]["title"]+result["科研团队"][i]["content"]+"\n";
				}
				document.getElementById("showContent").innerHTML=html;
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
	}
		
	//在研项目
	function ongProject()
	{
		$.ajax({
       
        url:'../sci_research_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["在研项目"].length; i++)
				{
					html=html+result["在研项目"][i]["title"]+result["在研项目"][i]["content"]+"\n";
				}
				document.getElementById("showContent").innerHTML=html;		
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
	}
	
	//重要会议列表
	function impConvention()
	{
		$.ajax({
       
        url:'../sci_research_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["重要会议列表"].length; i++)
				{
					html=html+result["重要会议列表"][i]["title"]+result["重要会议列表"][i]["content"]+"\n";
				}
				document.getElementById("showContent").innerHTML=html;			
			
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
	}
	
	//学术活动
	function acaActivity()
	{
		$.ajax({
       
        url:'../sci_research_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["学术活动"].length; i++)
				{
					html=html+result["学术活动"][i]["title"]+result["学术活动"][i]["content"]+"\n";
				}
				document.getElementById("showContent").innerHTML=html;			
			
            }
            else
            {
                alert("返回错误");
            }

        },
        timeout:3000
    });
	}
 
</script>
</body>
</html>
