<?php 
    class Controller{
        public function render($path, $parametres=[], $layotuh=''){
            ob_start();
            require_once(__DIR__ . '/../Views/'.$path.'.view.php');
            //$content = ob_get_clean();

            //require_once(__DIR__ . '/../Views/layouts/'.$layout.'.layout.php');
        }
    }
?>