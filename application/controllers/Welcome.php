<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    function shucks() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(2);
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        $this->render();         
     }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */