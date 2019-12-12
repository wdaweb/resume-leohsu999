
 <?php
try {
	//使用PDO建立MySQL連線 $db
	//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 為資料庫的編碼
	$db = new PDO("mysql:host=localhost;dbname=profile", 'root', "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//發生錯誤時，出現錯誤提醒
    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	//發生錯誤，結束資料庫連線並印出錯誤訊息
	die($e->getMessage());
}
?>
 <?php
function all($table){
    // 回傳整個資料表的內容
    global $pdo;
    $sql="select * from $table ";
    //$rows=$pdo->query($sql)->fetchAll();  //取出全部的資料
    return $pdo->query($sql)->fetchAll();
}
function find($table,$id){
    //取得某id的所有資料
    global $pdo;
    $sql="SELECT * FROM $table WHERE id='$id'";
    return $pdo->query($sql)->fetch();
}
function insert($table,$data){
    //把$data的資料新增到資料庫
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";
    $value="'" . implode("','",$data) . "'";
    $sql="insert into $table($row) values($value)";
    echo $sql;
    return $pdo->exec($sql);
}
?>