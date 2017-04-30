<?php
class UserDAO implements IUserDAO {

	const GET_AND_CHECK_USER_SQL = "SELECT * FROM users WHERE user_email= ? AND user_password = sha1(?)";
	//const CHECK_USER_SQL = "SELECT * FROM users WHERE user_name = ".$db->quote($user->username)."";


	const REGISTER_USER_SQL = "INSERT INTO users (user_name, user_email, user_password, user_phone, user_country, user_address)
													VALUES (?, ?, ?, ?, ?, ?)";
	
	const GET_ALL_DEALERS_SQL = "SELECT  user_id, user_name, user_email, user_phone, user_address, user_country FROM users";

	public function loginUser(User $user) {
		$db = DBConnection::getDb();
			
		$pstmt = $db->prepare(self::GET_AND_CHECK_USER_SQL);
		$pstmt->execute(array($user->email, $user->password));
			
		$res = $pstmt->fetchAll(PDO::FETCH_ASSOC);
			
		if (count($res) === 0)
			throw new Exception("Try again!");
				
			$user = $res[0];
				
			$newUser = new User($user['user_email'], 'hahahaha', $user['user_address'],  $user['user_id']);
				
			$newUser->setUsername($user['user_name']);
			$newUser->setUserPhone($user['user_phone']);
			$newUser->setUserCountry($user['user_country']);
				
			return $newUser;
				
				
	}

	function registerUser(User $user) {
			
		$db = DBConnection::getDb();
		$sql = $db->query("SELECT * FROM users WHERE user_email = ".$db->quote($user->email)."");
		if ($sql->rowCount() > 0){
			throw new Exception("Email already exists!");
		}else{
			$sql = $db->prepare(self::REGISTER_USER_SQL);
			$sql->execute(array($user->username, $user->email, sha1($user->password), $user->phone, $user->country, $user->address));

			$userId = $sql->rowCount() > 0 ? $db->lastInsertId() : 0;

			if($userId===0){
				throw new Exeption("Something wrong with your registration!");
			}else{

				$user->setUserId($userId);
				return $user;
					
			}
		}
	}
	
	
	
	public function listAllDealers() {
		
		$db = DBConnection::getDb();
		$sql = $db->prepare( self::GET_ALL_DEALERS_SQL );
		
		
		if ($sql->execute()) {
			
			$dealers = $sql->fetchAll ( PDO::FETCH_ASSOC );
		
			$result = array ();
		
			foreach ( $dealers as $dealer ) {
				$userForList = new User ($dealer['user_email'], 'hahahahah', $dealer['user_address'] , $dealer['user_id']);
				
				$userForList->setUsername($dealer['user_name']);
				$userForList->setPhone($dealer['user_phone']);
				$userForList->setUserCountry($dealer['user_country']);
				
				
				
				$result[] = $userForList;
				
			}
			return $result;
				
			
		}
		
		
	}

}

?>
