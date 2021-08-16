<?php 
class home extends Controller
{
    function index() 
    {
        $book = $this->model('book');
        $list_book = $book->listAllBook();
        $this->view('bookHomeView', ['list_book'=>$list_book]);
        // $this->view('bookHomeView');
    }
}
?>