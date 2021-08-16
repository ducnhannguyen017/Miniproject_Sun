<?php
class Book extends DB{
    public function create($title, $author, $price)
    {
        $sql=$this->con->prepare("INSERT INTO books(title, author, price) VALUES(?, ?, ?)");
        $sql->bind_param("ssd", $title, $author, $price);
        $success = $sql->execute();
        return $success;
    } 
    
    public function listAllBook()
    {
        $sql = "SELECT * from books";
        $rs = mysqli_query($this->con, $sql);
        if(!$rs)
        {
            die('cau truy van sai');
        }
        $list = [];
        while($row=mysqli_fetch_assoc($rs))
        {
            array_push($list,$row);
        }
        // var_dump($list);
        return $list;
    }

    public function update($id, $title, $author, $price)
    {
        $sql=$this->con->prepare("UPDATE books SET title = ?, author = ?, price = ? WHERE id = ?");
        $sql->bind_param("ssdi", $title, $author, $price, $id);
        $success = $sql->execute();
    }

    public function delete($id)
    {
        $sql = $this->con->prepare("DELETE FROM books WHERE id=?");
        $sql->bind_param("i", $id);
        $success = $sql->execute();
    }

    public function selectOne($book_id)
    {
        $sql = "SELECT * from books where id=".$book_id;
        $rs = mysqli_query($this->con, $sql);
        if(!$rs)
        {
            die('cau truy van sai');
        }
        $row=$rs->fetch_assoc();
        return $row;
    }
}
