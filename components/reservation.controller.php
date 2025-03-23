<?php
class ReservationController extends Controller {


    function delete() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new ReservationModel();
        $view = new ReservationView();
        
        $model->delete($id);
        $view->index($model->getAll());
    }

    function save() {
        $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

        $model = new ReservationModel();
        $view = new ReservationView();

        $error = $model->save($id);
        if (count($error) == 0) {
            $view->index($model->getAll());
        } else {
            $view->show($error);
        }
    }

    function index() {
        $model = new ReservationModel();
        $view = new ReservationView();
        
        $view->index($model->getAll());
    }
}
?>