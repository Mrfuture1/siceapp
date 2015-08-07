<!DOCTYPE html >
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/jquery.mobile.squareui.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.0.min.js"></script>    
    <script src="js/index.js"></script>
</head>


<body>
<div data-role="page" id="pagehome">

    <div data-role="panel" id="panel" data-position="left" data-theme="a" data-display="push">
        <p>侧栏内容</p>
    </div>

    <div data-role="header" data-theme="i">

        <a data-iconpos="notext" data-role="button" href="#panel" data-icon="flat-menu"></a>
        <h1>信息与通信工程学院</h1>
        <a id="search-button" data-iconpos="notext" href="" data-role="button" data-icon="flat-eye"></a>

    </div>

    <div data-role="content" role="main">
    <!--
        <div id="search">
            <form action="" method="post">
                <div data-role="fieldcontain" data-theme="e" data-content-theme="e">
                    <input type="search" />
                 </div>
            </form>
        </div>
     -->   
           	<div id="logo"> 
           	  <img src="images/logo.jpg" style="max-width:100%; max-height:100%; margin:-10px"> 
           	</div>
           
          
       
            <div id="nav">
            	<a href="#" id="nav-btn" data-role="button" data-icon="flat-menu" data-iconpos="notext" data-theme="i" data-inline="true" style=" "></a>
                <p>分类导航</p>   
            </div>
            <div id="list1">
            </div>
            
            
            <div id="cal" >
                <div  style="float:left; width:40%; height:50px; line-height:50px; text-align:center; background-color:#FFF"><span style="color:lightseagreen">教学日程</span></div>
                <div style="height:50px; line-height:50px; text-align:center; background-color:lightseagreen"><span style="color:#fff">教学周第14周&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;周五</span></div>
            </div>

            
                
                <div class="itemblock">
                    <div class="flogo">
                    	<img src="images/schNews" align="center" style="max-width:100%; max-height:100%">
                    </div>                    
                    <div id="sch_news" class="impitem">
                    </div>
                </div>
                <hr />
                <div class="itemblock">
                   <div class="flogo">
                   		<img src="images/impAnnment" align="center" style="max-width:100%; max-height:100%">
                   </div>
                   <div id="imp_annment" class="impitem">
                   </div> 
                </div>
                <hr />
                <div class="itemblock">
                    <div class="flogo">
                    	<img src="images/acaLectures" align="center" style="max-width:100%; max-height:100%">
                    </div>
					<div id="aca_lecture" class="impitem">
                    </div>
                </div>
                
                
            
            
                <hr />
                <div id="link"><p>友情链接</p></div>
                <div class="ui-grid-a" >
                    <div class="ui-block-a" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" style="color: white" >北京邮电大学</a></div>
                    <div class="ui-block-b" style="background-color: lightseagreen ;border:#FFF 2px solid"><a href="#" style="color: white" >清华大学</a></div>
                    <div class="ui-block-a" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" style="color: white" >北京大学</a></div>
                    <div class="ui-block-b" style="background-color: lightseagreen; border:#FFF 2px solid"><a href="#" style="color: white" >麻省理工学院</a></div>
                </div>
				
            

            <div align="center" style="margin-bottom:-16px; margin-left:-16px; margin-right:-16px">
                <p style="background-color: darkcyan; margin:0px; color:#ddd" >访问量：17598579次</p>
                <p style="background-color:darkcyan; margin:0px ; color:#ddd">联系电话：010-62283295</p>
                <p style="background-color:darkcyan; margin:0px ; color:#ddd">地址：北京市海淀区西土城路10号</p>
                <p style="background-color:darkcyan; margin:0px; color:#ddd" >版权所有 &copy 信息与通信工程学院</p>
            </div>

        </div>

    
</div>

</body>
</html>
