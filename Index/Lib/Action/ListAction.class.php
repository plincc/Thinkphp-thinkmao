<?php
  class ListAction extends Action{
      public function index(){
          if(empty($_GET['cid'])){
              redirect(U('Index/index'));
          }else{
          $this->display("../Public/top");
          $this ->display("../Public/lg_top");
         $this ->display("../Public/endgoods");
          }
      }
  }

?>