<p class="spacer">or ...</p>
<p class="cancel">
    <?php
        $redirect = array( 'action' => 'index');
        if( isset( $this->data[$HistoryModel] ) && !empty( $this->data[$HistoryModel]['id'] ) ) {
            $redirect = $session->read( "History." . $HistoryModel . ".Edit." . $this->data[$HistoryModel]['id'] );        
        } elseif( $session->read( "History." . $HistoryModel . ".Add" ) ) {
            $redirect = $session->read( "History." . $HistoryModel . ".Add" );
        }
        echo $html->link( 'cancel', $redirect );
    ?>
</p>
<br clear="all" />