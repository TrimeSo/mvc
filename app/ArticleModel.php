<?php


namespace App;


class ArticleModel extends \Core\CoreModel
{
    public function page($offset=0, $limit=5)
    {
        $sql = "SELECT * FROM " . $this->table ." LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":limit", $limit, \PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, \PDO::PARAM_INT);
        $stmt->execute();
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $this->out[] = $row;
        }
        return $this->out;
    }
}