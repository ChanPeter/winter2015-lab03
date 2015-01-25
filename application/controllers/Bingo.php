<?php

/**
 * The wise/bingo link.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //  Function to generate page passing data from Quotes.php -> first() function.
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        
        // authors array using new array syntax.
        // to pass the data to the justone.php page.
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    //  Re routed comp4711/wisdom to this
    //  Function to generate page by getting info from quotes using the get($which) function.    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(6);
        //$authors = array();
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */