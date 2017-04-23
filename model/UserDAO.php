<?php
	class UserDAO implements IUserDAO {
		
		const GET_AND_CHECK_USER_SQL = "SELECT first_name, id FROM users WHERE user_name = ? AND user_password = sha1(?)";
		//const CHECK_USER_SQL = "SELECT * FROM users WHERE user_name = ".$db->quote($user)."";
		const REGISTER_USER_SQL = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)";
		
		public function loginUser(User $user) {
			$db = DBConnection::getDb();
			
			$pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
			$pstmt->execute(array($user->username, $user->password));
			
			$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
			if (count($res) === 0)
				throw new Exception("Try again!");
			
			$user = $res[0];
			
			return new User($user['first_name'], 'haha', $user['id']);
		}
		
		function registerUser(User $user) {
			$db = DBConnection::getDb();
			//$sql = $db->query(self::CHECK_USER_SQL);
// 			if ($sql->rowCount() > 0){
// 				throw new Exception("Username already exists!");
// 			}else{
				$sql = $db->prepare(self::REGISTER_USER_SQL);
				$sql->execute(array($user->username, $user->email, sha1($user->password)));
				
				$userId = $sql->rowCount() > 0 ? $db->lastInsertId() : 0;
				
				if($userId===0){
					throw new Exeption("Something wrong with your registration!");
				}else{
				
				
				return new User($user, $email, 'haha', $userId);
				}
				
				
			}
		}
		
		
	//}
	
?>
