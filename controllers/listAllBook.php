<?php
class listAllBook extends Controller{
    public function listAllBook(){
        $book = $this->model('book');
        $list_book = $book->listAllBook();
        $this->view('bookHomeView', ['data'=>$list_book]);
    }
}
?>