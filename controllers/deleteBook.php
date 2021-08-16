<?php
class deleteBook extends Controller{
    public function postDelete(){
        $book_id = $_POST['id'];
        var_dump($book_id);
        
        $book = $this->model('book');
        $success = $book->delete($book_id);
        var_dump($success);
        if($success){
            $this->view('bookHomeView');
        }
        else{
            $this->view('bookHomeView', ['error'=>$success, 'message'=>'tao khong thanh cong']);
        }
    }
}
?>