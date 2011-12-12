<?php 

class LayerCakeAppModel extends AppModel {
    
    /**
     * Checks to see if multiple values exist in the same row in the database,
     * this is used when we have multiple fields making up the unique
     * contraint in MySQL
     *
     *    @param array $params    Array consisting of "field" => "value"
     *    @param int $id            PK of record being editited (optional)    
    */
    function isUnique( $params, $id = "" )
    {
        if (!is_array($params)) {
            trigger_error(__METHOD__ . ' - $params must be an array', E_USER_ERROR);
        }

        // @var array $query    Array to $this->hasAny() against
        $query = array();
        
        // Set Recursive Seach mode.
        $this->recursive = -1;
        
        // Loop array of params building our our query array.
        foreach( $params as $field => $value )
        {
            $query[$this->name . '.' . $field] = $value;
        }

        // Check to see if we need to query against an id
        if( !empty($id) ) {
            $query[$this->name.'.id !='] = $id;
        }

        // Run the query.
        if( $this->hasAny($query) ) {
            return false;
        } else {
            return true;
        }
    }
    
    function unbindModelAll( $reset = true ) {
        $unbind = array();
        foreach ($this->belongsTo as $model=>$info) { $unbind['belongsTo'][] = $model; }
        foreach ($this->hasOne as $model=>$info) { $unbind['hasOne'][] = $model; }
        foreach ($this->hasMany as $model=>$info) { $unbind['hasMany'][] = $model; }
        foreach ($this->hasAndBelongsToMany as $model=>$info) { $unbind['hasAndBelongsToMany'][] = $model; }
        parent::unbindModel( $unbind, $reset );
    }     
}