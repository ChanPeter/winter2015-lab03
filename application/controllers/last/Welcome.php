<?php

/**
 * The last of the celeb quotes nav to by menu link 'last' on the top of pages.
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //  Function to generate page passing data from Quotes.php -> last() function.
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        
        // authors array using new array syntax.
        // to pass the data to the justone.php page.
        $authors[] = ['who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where'], 'what' => $source['what']];
        
        $this->data['authors'] = $authors;

        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */