<?php
	class UserDAO implements IUserDAO {
		
		const GET_AND_CHECK_USER_SQL = "SELECT user_name, id FROM users WHERE user_name = ? AND user_password = sha1(?)";
		//const CHECK_USER_SQL = "SELECT * FROM users WHERE user_name = ".$db->quote($user)."";


		const REGISTER_USER_SQL = "INSERT INTO users (user_name, user_email, user_password, user_phone, user_country) 
													VALUES (?, ?, ?, ?, ?)";
		
		public function loginUser(User $user) {
			$db = DBConnection::getDb();
			
			$pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
			$pstmt->execute(array($user->username, $user->password));
			
			$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
			if (count($res) === 0)
				throw new Exception("Try again!");
			
			$user = $res[0];
			
			return new User($user['user_name'],$user['user_email'], $user['user_id'],'haha', $user['user_phone'], $user['user_country']);
		}
		
		function registerUser(User $user) {
			$db = DBConnection::getDb();
			//$sql = $db->query(self::CHECK_USER_SQL);
// 			if ($sql->rowCount() > 0){
// 				throw new Exception("Username already exists!");
// 			}else{
				$sql = $db->prepare(self::REGISTER_USER_SQL);
				$sql->execute(array($user->username, $user->email, sha1($user->password), $user->phone, $user->country));
				
				
				$userId = $sql->rowCount() > 0 ? $db->lastInsertId() : 0;
				
				if($userId===0){
					throw new Exeption("Something wrong with your registration!");
				}else{
				
				
				return new User($username, $email, 'haha', $userId, $phone, $country);
				}
				
				
			}
		}
		
		
	//}
	
?>
