<?php $modules = Cache::read( 'LayerCake.admin_modules' ); ?>

<?php if( is_array( $modules ) && count( $modules ) >= 1 ): ?>
    <form action="#" method="post" id="search">
        <p>
            <input type="text" size="30" name="q" id="search-query" class="input-text" value="<?php echo isset($this->passedArgs['q']) ? $this->passedArgs['q'] : ''; ?>" />
            <select id="module" class="input-text">
                <?php
                    $thisurl = Router::url( "", false );
                    if( isset( $modules ) && is_array( $modules ) ) {
                        foreach ( $modules AS $module ) {
                            if( !empty( $module['AdminModule']['search_model'] ) ): ?>
                                <option <?if( strstr( $thisurl, $module['AdminModule']['link'] ) ): ?>selected<?php endif; ?> value="<?php echo $module['AdminModule']['link']; ?>"><?php echo $module['AdminModule']['name'];?></option>
                            <?php endif;
                        }                    
                    }
    
                ?>
            </select>
            <input type="submit" value="Search" class="input-submit" />
            
            <script type="text/javascript">
                $(document).ready(function() {
                    <?php if( !isset($this->passedArgs['q']) ): ?>
                        $("input#search-query").defaultvalue( "Search" );
                    <?php endif; ?>
                    
                    $('#search').submit( function() {
                        $('#search').attr( 'action', $('#module').val() );
                    });
                });
            </script>                
        </p>
    </form>
<?php endif; ?>