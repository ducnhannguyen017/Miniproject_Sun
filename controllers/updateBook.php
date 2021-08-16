<?php
class updateBook extends Controller{
    public function index(){
        $this->view('bookFormUpdateView');
    }

    public function postUpdate(){
        $book_id = $_COOKIE['update_book'];
        $this->title = $_POST['title'];
        $this->author = $_POST['author'];
        $this->price = $_POST['price'];

        $book = $this->model('book');
        $success = $book->update($book_id, $this->title, $this->author, $this->price);

        if($success){
            $this->view('bookHomeView');
        }
        else{
            $this->view('bookForm', ['error'=>$success, 'message'=>'tao khong thanh cong']);
        }
    }
}
?>