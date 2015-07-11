<html>
	<head>
	<title>彦丽登陆平台</title>
	</head>
	<script src="js/jquery-1.8.3.min.js"></script>
	<link href="css/my.css" rel="stylesheet" type="text/css" />
<body bgcolor = "#cccccc">
	<div align="center">
		<h3 >彦丽登陆平台</h3>
		用户名　<input id="un" class="myinput" type="text"><br/>
		　　　<input type="hidden" id="errormassageun" disabled="disabled" style="border-style:none;color:red;background-color:#ccc" value="" /><br/><br/>
		密　码　<input id="pw" class="myinput" type="password"><br/>
		　　　<input type="hidden" id="errormassagepw" disabled="disabled" style="border-style:none;color:red;background-color:#ccc" value="" /><br/><br/>
		<input id="login" type="button" value = "登陆">　　<input type="button" value = "注册">　　<input id="reset" type="reset" value = "重置"><br/><br/>	
		<font id="returnmsg"></font>
		
	</div>
	<script>
		$("#login").click(function(){
			if(check() == 0){
				return false;
			}
			var username = $("#un").val();
			var password = $("#pw").val();
			$.get("man.php?type=login&un=" + username + "&pw=" + password, function(data){
				if(data == 1){
					$("#returnmsg").attr("color","green");
					$("#returnmsg").html("登陆成功,5秒后自动跳转");
				}else{
					$("#returnmsg").attr("color","red");
					$("#returnmsg").html("登陆失败，请检查用户名和密码");
				}
			})
		})
		
		$("#reset").click(function(){
			 location.reload();
		})
		
		function check(){
			//初始化
			document.getElementById('errormassageun').value = '';
			document.getElementById('errormassageun').type = 'hidden';
			$("#un").removeClass("errorinput");
			document.getElementById('errormassagepw').value = '';
			document.getElementById('errormassagepw').type = 'hidden';
			$("#pw").removeClass("errorinput");
			$("#returnmsg").html("");
	
			//判断用户名
			var username = document.getElementById("un").value.trim();
			if(username == ''){
				$("#un").addClass("errorinput");
				$("#un").focus();
				document.getElementById('errormassageun').value = '*用户名不能为空';
				document.getElementById('errormassageun').type = 'input';
				
				return 0;
			}
			//判断密码
			var username = document.getElementById("pw").value.trim();
			if(username == ''){
				$("#pw").addClass("errorinput");
				$("#pw").focus();
				document.getElementById('errormassagepw').value = '*密码不能为空';
				document.getElementById('errormassagepw').type = 'input';
				return 0;
			}
		}
	</script>
</body>
</html>