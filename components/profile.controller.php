<?php
class ProfileController extends Controller {
    function add() {
        $id = 0;

        $model = new ProfileModel();
        $view = new profileView();
        
        $view->entry($model->get($id));
    }

    function edit() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new ProfileModel();
        $view = new ProfileView();
        
        $view->entry($model->get($id));
    }

    function delete() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new ProfileModel();
        $view = new ProfileView();
        
        $model->delete($id);
        $view->index($model->getAll());
    }

    function save() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new ProfileModel();
        $view = new ProfileView();

        $error = $model->save($id);
        if (count($error) == 0) {
            $view->index($model->getAll());
        } else {
            $view->show($error);
        }
    }

    function index() {
        $model = new ProfileModel();
        $view = new ProfileView();
        
        $view->index($model->getAll());
    }
}
?>