<?php
    // todo: comment this code
    
    extract( $data );
    
    $this_url = preg_replace( '/\/$/', '', $this->here );
    
    if( $firstChild == 1 ) {
        $this->MenuTree->addItemAttribute( 'class', 'alpha' );
    }

    if( $lastChild  == 1 ) {
        $this->MenuTree->addItemAttribute( 'class', 'omega' );
    }

    if( $AdminModule['link'] == $this_url ) {
        $this->MenuTree->addItemAttribute( 'class', 'selected' );
    }

    if( $depth == 0 ) {
        if( $AdminModule['link'] == $this_url ) {
            
            $this->MenuTree->addItemAttribute( 'class', 'active' );
            if( $hasChildren ) {
                $this->MenuTree->addTypeAttribute( 'class', 'open', null, 'next' );
            }
            
        } elseif( $hasChildren ) {
        
            $child_links = Set::extract( $data, 'children.{n}.MenuItem.link');
            
            if ( in_array( $this_url, $child_links ) ) {
                $this->MenuTree->addItemAttribute( 'class', 'active' );
                $this->MenuTree->addTypeAttribute( 'class', 'open', null, 'next' );
            }
        }
    }

    echo $this->Html->link( $AdminModule['name'], $AdminModule['link'], array( 'escape' => false ) );
?>
