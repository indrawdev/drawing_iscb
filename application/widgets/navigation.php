<?php

/*
 * Demo widget
 */
class Navigation extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array('GELORA TRISULA SEMESTA', 'Indonesia Soccer Championship B');
        }

        $this->view('widgets/navigation', $data);
    }
    
}