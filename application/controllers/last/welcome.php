<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of last
 *
 * @author Clemens
 */
class Welcome extends Application{
    //put your code here
    
     function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        $this->render();
     }
     
     
     
}