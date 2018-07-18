   <?php

    function prepareData($data, $fillable, $request, $nullable=[]) 
    {
        foreach($fillable as $column) {

            if ($request instanceof Illuminate\Http\Request) {
                if ($request->has($column) and strlen(trim($request->{$column})) == 0) {
                    $data->{$column} = null;
                }                               
            }
            
            if ($nullable) {
                foreach($nullable as $col) {
                    if (!isset($request->{$col}) and !isset($data->{$col})) {
                        $data->{$col} = null;
                    }
                }                
            }
        
            if (isset($request->{$column})) {
                $data->{$column} = trim($request->{$column});
            }
        }

        return $data;
    }


?>