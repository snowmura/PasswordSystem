<!doctype html>
<html lang="ja">
				<head>
					<meta charset="utf-8">
					<title>パスワード管理システム</title>
					<script type="text/javascript" src="randompass.js"></script>
					<link rel="stylesheet" href="style.css" type="text/css">
				</head>
				<body>
							<section class="ins">
											<h1>アカウント情報の入力</h1>
								<form method="post" action="insert.php" name="randform">
											<div class="box1">
														<div class="forty">
																	<div class="item first">
																				<label>サービス名:</label><br>
																				<input type="text" name="service" class="inp" placeholder="サービス名を入力してください"/>
																	</div>
																	<div class="item second">
																				<label>ユーザー名:</label><br>
																				<input type="text" name="accounts" class="inp" placeholder="ユーザー名を入力してください"/>
																	</div>
																	<div class="third">
																				<label>パスワード:</label>
																				<input type="text" name="ketasu" class="ketainp" size="2em" value="" 
																				maxlength="2" placeholder="桁数" />
																				<input type="button" class="autopass" value="自動作成" onClick="randomString();" /><!-- &nbsp; --><br>
																				<input type="text" name="password" class="passinp" value="" placeholder="パスワードを入力してください"><br>
																	</div>
														</div>
														<div class="sixty">
																		<div class="textmemo">
																					<label>メモ:</label><br>
																				<div class="memobox">
																						<textarea name="memo" placeholder="メモを入力してください"></textarea>
																				</div>
																		</div>
																		<button type="submit" class="add">アカウントの作成</button>
														</div>
											</div>
								</form>
							</section><br>

							<section class="data">
											<h1>アカウント情報の確認</h1>

											<div class="tabledata">
													<table>
														<tr bgcolor="#cccccc">
																<th class="tableid">ID</th>
																<th class="tabledate">作成日時</th>
																<th class="tableservice">サービス名</th>
																<th class="tableuser">ユーザー名</th>
																<th class="tablepw">パスワード</th>
																<th class="tablememo">メモ</th>
														</tr>

<?php
  require("connect.php");

	$result = mysql_query("select * from accounts order by id desc;")or die(mysql_error);

	  while ($data = mysql_fetch_array($result)){

					echo "<tr align=center>";
							echo "<td>";
									echo $data[id];
							echo "</td>";

							echo "<td>";
									$date = substr($data['date'], 0, 10);
									echo $date;
							echo "</td>";

							echo "<td>";
									echo $data[service];
							echo "</td>";

							echo "<td>";
									echo $data[accounts];
							echo "</td>";

							echo "<td>";
									echo $data[password];
							echo "</td>";

							echo "<td>";
									echo $data[memo];
							echo "</td>";
					echo "</tr>";

}

?>

													</table>
									</div>
							</section>

				</body>
</html>



