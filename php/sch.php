<!DOCTYPE html >
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../css/jquery.mobile.squareui.css" />
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.mobile-1.4.0.min.js"></script>
	<?php
	 $id = $_REQUEST['id'];
	 echo "<script type='text/javascript'>var id = $id;</script>";
	?>

    
    <script type="text/javascript">
        $(document).ready(function(){
			//alert(4);
         //$("#page2").hide();
		$("#page2").click(function(){
			$(this).css({"display":"none"});
			$("#list3").animate({
				"bottom":"-30%"},200);
		 });   	
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["学院简介"].length; i++)
				{
					html=html+result["学院简介"][i]["title"]+result["学院简介"][i]["content"]+"\n";
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
			background-color: lightseagreen; 
			border:#FFF 2px solid;
            height: 50px;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
            padding-top: 12px;
        }
        .contentbox
        {
            margin: 10px;
        }
		
		a
		{
			text-decoration:none;
			
		}
		#page2
		{
			display:none;
			filter:alpha(Opacity=60);
			-moz-opacity:0.6;
			opacity: 0.6;
			position:fixed;
			z-index:7;
			width:100%;
			height:100%;
			background-color:#69F;
			
			
		}
		#list3
		{
			position:fixed;
			bottom:-30%;
			width:100%;
			height:30%;
			background-color:#F6F;
			z-index:8;
			left:0;
		}
    </style>

    
</head>
<body>

<div data-role="page" >
    <div data-role="header" data-theme="i">
        
        <h1>信息与通信工程学院</h1>
    </div>

    <div data-role="content">

        <img src="../images/firstlist_logo/schProfile.jpg" style="max-width:100%; max-height:100%" align="center"> 
		<p></p>
        
        	<div class="ui-grid-b" >
            	<div class="ui-block-c" ><a href="#" onClick="schProfile()"  style="color: white">学院简介</a></div>
                <div class="ui-block-c" ><a href="#" onClick="colNews()" style="color: white">学院动态</a></div>				                <div class="ui-block-c" ><a href="#" onClick="admRegulations()" style="color: white">管理条例</a></div>
                <div class="ui-block-c" ><a href="#" onClick="faculty()" style="color: white">师资力量</a></div>
                <div class="ui-block-c" ><a href="#" onClick="teaCentre()" style="color: white">教研中心</a></div>
                <div class="ui-block-c" ><a href="#" onClick="leaAgency()" style="color: white">领导机构</a></div>
                <div class="ui-block-c" ><a href="#" onClick="impAnnment()" style="color: white">重要公告</a></div>
                <div class="ui-block-c" ><a href="#" onClick="award()" style="color: white">奖励奖学</a></div>
            </div>
        <div id="list3">
			          	
        </div>
        <!--<div align="center">
        <img src="buptsice/admin/poster/cms/uploadfile/2014/1213/20141213141846879818036.jpg" style="display:block;margin:auto;max-width:100%; max-height:100%" alt="" /></div>-->
        <div style=" max-height:100%; max-width:100%; margin:0px" align="center"> 
			<img src="buptsice/admin/poster/cms/uploadfile/2014/1213/20141213141846879818036.jpg" style="display:block;margin:auto;max-width:100%; max-height:100%" alt="" />	
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

<div id="page2">
	
</div>

<div id="list3">
	
</div>


<script type="text/javascript">
	//学院简介
    function schProfile()
	{
		/*
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["学院简介"].length; i++)
				{
					html=html+result["学院简介"][i]["title"]+result["学院简介"][i]["content"]+"\n";
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
	*/
	$("#page2").css({"display":"block"});
	$("#list3").animate({
		"bottom":"0"
	},200);
	}
		
	//管理条例
	function admRegulations()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {

               	var html="";
				
				for(var i=0; i<result["行政管理条例"].length; i++)
				{
					html=html+result["行政管理条例"][i]["title"]+result["行政管理条例"][i]["content"]+"\n";
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
	
	//学院动态
	function colNews()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["学院动态"].length; i++)
				{
					html=html+result["学院动态"][i]["title"]+result["学院动态"][i]["content"]+"\n";
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
	
	//师资力量
	function faculty()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["师资力量"].length; i++)
				{
					html=html+result["师资力量"][i]["title"]+result["师资力量"][i]["content"]+"\n";
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
	
	//教研中心
	function teaCentre()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["教研中心"].length; i++)
				{
					html=html+result["教研中心"][i]["title"]+result["教研中心"][i]["content"]+"\n";
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
	
	//领导机构
	function leaAgency()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["领导机构"].length; i++)
				{
					html=html+result["领导机构"][i]["title"]+result["领导机构"][i]["content"]+"\n";
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
	
	//重要公告
	function impAnnment()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["重要公告"].length; i++)
				{
					html=html+result["重要公告"][i]["title"]+result["重要公告"][i]["content"]+"\n";
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
	
	//奖励奖学
	function award()
	{
		$.ajax({
       
        url:'../sch_profile_json.php',
        type:'POST',
        dataType:'json',
        data:'',
        success:function(result) {
            
            if (result)
            {
				var html="";
				
				for(var i=0; i<result["新建二级栏目"].length; i++)
				{
					html=html+result["新建二级栏目"][i]["title"]+result["新建二级栏目"][i]["content"]+"\n";
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
