<?php $modules = Cache::read( 'LayerCake.admin_modules' ); ?>

<?php if( is_array( $modules ) && count( $modules ) >= 1 ): ?>
    <form action="#" method="post" id="search">
        <p>
            <input type="text" size="30" name="q" id="search-query" class="input-text" value="<?= isset($this->passedArgs['q']) ? $this->passedArgs['q'] : ''; ?>" />
            <select id="module" class="input-text">
                <?
                    $thisurl = Router::url( "", false );
                    if( isset( $modules ) && is_array( $modules ) ) {
                        foreach ( $modules AS $module ) {
                            if( !empty( $module['AdminModule']['search_model'] ) ): ?>
                                <option <?if( strstr( $thisurl, $module['AdminModule']['link'] ) ): ?>selected<? endif; ?> value="<?= $module['AdminModule']['link']; ?>"><?= $module['AdminModule']['name'];?></option>
                            <? endif;
                        }                    
                    }
    
                ?>
            </select>
            <input type="submit" value="Search" class="input-submit" />
            
            <script type="text/javascript">
                $(document).ready(function() {
                    <? if( !isset($this->passedArgs['q']) ): ?>
                        $("input#search-query").defaultvalue( "Search" );
                    <? endif; ?>
                    
                    $('#search').submit( function() {
                        $('#search').attr( 'action', $('#module').val() );
                    });
                });
            </script>                
        </p>
    </form>
<? endif; ?>