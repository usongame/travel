<html>
<head>
    <meta charset="utf-8">
    <title>旅游网</title>
    <style>
    	@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body
{
	margin: 0;
	padding: 0;
	background-color: purple;
	background-size: cover;
}

.login-box
{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;
}

.login-box h1
{					
	font-size: 40px;
	border-bottom: 6px solid #800080;
	margin-bottom: 51px;
	padding: 13px 0
}
.textbox
{
	width: 100%;
	overflow: hidden;
	font-size: 35px;
	padding: 8px 0;
	margin: 18px 0;
	border-bottom: 4px solid #800080;
}

.textbox i
{
	width: 26px;
	float: left;
	text-align: center;
}

.textbox input
{
	border: none;
	outline: none;
	background: none;
	color: white;
	font-size: 18px;
	width: 80%;
	float: left;
	margin: 10px;
}
.btn
{
	width: 100%;
	background: none;
	border: 2px solid #4caf50;
	color: white;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
}
    </style>
<style>
    body
    {
        background-position: center;
    }
</style>
<body>
    <div class="login-box">
        <h1>留言</h1>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="输入姓名" name="" value="">
        </div>

        <div class="textbox">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="邮箱" name="" value="">
        </div>

        <div class="textbox">
            <i class="fa fa-phone" arai-hidden="true"></i>
            <input type="text" placeholder="电话" name="" value="">
        </div>

        <div class="textbox">
            
            <input type="text" placeholder="留言" name="" value="">
        </div>

        <input class="btn" type="button" name="" value="提交">
    </div>
</body>
</html>