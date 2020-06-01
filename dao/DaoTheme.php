<?php

include './Dao.php';

class DaoTheme extends Dao {

	public function getList(): array{
		$list = [];
		$stmt = (Dao::getConnection())->prepare('SELECT * FROM categorie WHERE 1;');
		try {
        $stmt->execute();
    		while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
          $i=0;
     			$r = new Theme($row[$i++], $row[$i++]); // FAIRE LA CLASSE THEME DANS LA PARTIE MODELE
           $list[] = $r;
    		}
    	}
    	catch (PDOException $e) {
        throw new Exception (ERR_LIST_THEME_MESS);
		  }
		  var_dump ($list);
		  return $list;
    }

    public function get(int $id) : array { // a tester
        $stmt = (Dao::getConnection())->prepare('SELECT * FROM categorie WHERE id_cat==$id;');
        try {
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
          $cat = intval($row[0]);
        }
        catch (PDOException $e){
          throw new MainException (ERR_COUNT_TYPE_MESS);
        }
        return $cat;
      }

   	public function insert($obj) : boolean { // a tester
      $sql = "INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES (null, ?);";
      $exec = (Dao::getConnection())->prepare($sql);
      $exec->bindValue(1, $obj->getNom());
      try{
        $exec->execute();
      } 
      catch (PDOException $e){
        throw new MainException (ERR_INS_TYPE_MESS);
      }
    }
  
    public function getLastId() : int { // a tester
      $lId = 1;
      $stmt = (Dao::getConnection())->prepare('SELECT max(id_cat) FROM categorie WHERE 1;');
      try {
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
        $lId = intval($row[0]);
      }
      catch (PDOException $e){
        throw new MainException (ERR_COUNT_TYPE_MESS);
      }
      return $lId;
    }

    public function deleteAll() : void { // a tester
      $stmt = (Dao::getConnection())->prepare('DELETE FROM categorie;');
      try {
        $stmt->execute();
      }
      catch (PDOException $e){
        throw new MainException (ERR_DEL_THEME_MESS);
      }
    }

    public function delete(int $id ) : boolean {
  		// todo
   		return true;
    }
    public function update($obj ) : boolean{
      // todo
      return true;
    }


}


?>