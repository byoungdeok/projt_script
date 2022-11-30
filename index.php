
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> APMSETUP </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<table border='0' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
		<tr>
			<td style="width: 100%; height:100%; align: center;">
				<table border='1' width='100%' height='100%' align='center' cellspacing='0' cellpadding='0'>
					<tr>
						<td style="width: 100%; height:80px; text-align: center; background:#764300;"> 
							<font style="color: #fff;">
								<strong>[홈페이지 상단]</strong>
							</font>
						</td>
					</tr>
					<tr>
						<td style="width: 100%; height:30px; align: center;">
							&nbsp;
						</td>
					</tr>
					<tr>
						<td style="width: 100%; height:30px; text-align: center; background:#ededed">
							My SQL 데이터 생성
						</td>
					</tr>
					<tr>
						<td style="width: 100%; height:100px; align: left; background:#fff">
							 <form action='./test2.php' name='test' method='post'>
							  <input type='hidden' name=' id' value='test' />
								<ul>
									<li>아이디<input type='text' name='user_id' size='10'/></li>
									<li>이름<input type='text' name='name' size='10'/></li>
									<li>비밀번호<input type='password' name='pw' size='10'/></li>
									<li>메모
										<br>
										<textarea name='memo' cols='100' row='5'></textarea>
									</li>
									
								</ul>

								<br><br>
								<input type='submit' value='전 송'/>
							 </form>
							 
						</td>

					
						
					<?
						$connect = mysql_connect("localhost", "deok", "deok");
						mysql_select_db("deok", $connect);

						if(!$connect)die("연결에 실패 하였습니다." .mysql_error());

						//query문으로 데이터 불러오기
						$query = "select * from bbs_1 where id = 'test'";
						mysql_query("set names utf8", $connect);
						$result = mysql_query($query, $connect);
						while($data = mysql_fetch_array($result)){
					?><tr>
						<td style="width: 100%; height:30px; text-align: center; #fff;"> 
							-이름 : <?=$data[name]?> <br>
							-아이디 : <?=$data[user_id]?><br>
							-메모 : <?=$data[memo]?>
						</td>
						<?}?>
					</tr>
					<tr>
						<td style="width: 100%; height:50px; text-align: center; #fff;"> &nbsp;</td>
					</tr>	
				</table>
			</td>
		</tr>
  </table>

</body>
</html>
