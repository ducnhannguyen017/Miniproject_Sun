<?php
class createBook extends Controller{
    private $title;
    private $author;
    private $price;

    function index()
    {
        $this->view('bookForm');
    }

    public function postCreate(){
        $this->title = $_POST['title'];
        $this->author = $_POST['author'];
        $this->price = $_POST['price'];

        $book = $this->model('book');
        $success = $book->create($this->title, $this->author, $this->price);

        if($success){
            $this->view('bookHomeView');
        }
        else{
            $this->view('bookForm', ['error'=>$success, 'message'=>'tao khong thanh cong']);
        }
    }
}
?>