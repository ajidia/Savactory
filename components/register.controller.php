<?php
class RegisterController extends Controller {
    function save() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new RegisterModel();
        $view = new RegisterView();

        $error = $model->save($id);
        if (count($error) == 0) {
            $view->index($model->getAll());
        } else {
            $view->show($error);
        }
    }

    function index() {
        $model = new RegisterModel();
        $view = new RegisterView();
        
        $view->index($model->getAll());
    }
}
?>