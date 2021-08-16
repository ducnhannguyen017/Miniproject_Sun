<?php 
// var_dump($url->params);
class bookController extends Controller
{
    public function index()
    {
        $book = $this->model('book');
        $list_book = $book->listAllBook();
        $this->view('indexBook', ['list_book'=>$list_book]);
    }

    public function create(){
        $this->view('createBook');
    }

    public function store(){
        $title = @$_POST['title'];
        $author = @$_POST['author'];
        $price = @$_POST['price'];

        $error = "<script>
                    var element = document.getElementById('alert');
                    element.classList.remove('hidden'); 
                </script>";

        // $pattern = '/^[0-9]$/';
        if(!ctype_digit($price))
        {
            $message = "Nhập lại giá sách" ;
        }
        else{
            $message='';
        }
        if($message=='')
        {
            $book = $this->model('book');
            $book->create( $title, $author, $price);
            $this->redirect('bookController/index');
        }
        else{
            $this->view('createBook', ['error'=>$error, 'message'=>$message]);
        }
    }

    public function destroy($book_id){
        
        $book = $this->model('book');
        $book->delete($book_id);
        $this->redirect('bookController/index');

    }

    public function edit($book_id){
        $book=$this->model('book')->selectOne($book_id);
        $this->view('editBook',['book'=>$book]);
    }
    
    public function update($book_id)
    {
        $title=@$_POST['title'];
        $author=@$_POST['author'];
        $price=@$_POST['price'];
        $error = "<script>
                    var element = document.getElementById('alert');
                    element.classList.remove('hidden'); 
                </script>";

        // $pattern = '/^[0-9]$/';
        if(!ctype_digit($price))
        {
            $message = "Nhập lại giá sách" ;
        }
        else{
            $message='';
        }
        if($message=='')
        {
            $book = $this->model('book');
            $book->update($book_id,$title,$author,$price);
            $this->redirect('bookController/index');
        }
        else{
            // $this->view('editBook', ['error'=>$error, 'message'=>$message]);
            $book=$this->model('book')->selectOne($book_id);
        $this->view('editBook',['book'=>$book,'error'=>$error, 'message'=>$message]);
        }

    }
}
?>