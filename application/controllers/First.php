<?php

/**
 * The first of the celeb quotes nav to by menu link 'first' on the top of pages.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //  Function to generate page passing data from Quotes.php -> first() function.
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        //$authors = array();
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    // Function for the re routing of 'sleep'
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        //$authors = array();
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }

    //  Function for re route of show/3
    function gimme($which) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($which);
        //$authors = array();
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */