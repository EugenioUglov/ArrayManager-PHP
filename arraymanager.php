class ArrayManager {
    function is_exist_in_array($input_object) {
        // Required keys for $input_object are value_to_check, input_array.

        if (isset($input_object->value_to_check) == false ||
            isset($input_object->input_array) == false) {
            throw new Exception('Error! In function get_last_number_from_string($input_object), required keys for $input_object are value_to_check, input_array');
        }
        
        foreach ($input_array as $key => $value) {
            if ($value_to_check === $value) {
                return true;
            }
        }

        return false;
    }

    function stringify($input_array, $additional_separator = "<br>", $position_mode = "vertical") {
        $output_str = "";

        foreach($input_array as $item) {
            strlen($output_str) > 0 && strlen($item) > 0 ? $output_str .= $additional_separator : ""; 
            $output_str .= $item;
        }

        return $output_str;
    }

    function to_string(Object $option) {
        $default_option = (object)array(
            "input_array" => null,
            "separator" => ", <br>",
            "position_mode"  => "vertical"
        );

        if (isset($option->input_array) === false || is_array($option->input_array) === false) {
            echo "<script>alert('Error! In function to_string() from Array_manages.cs  input_array is not defined');</script>";
            return "";
        }

        $input_array = $option->input_array;
        $separator = isset($option->separator) ? $option->separator : $default_option->separator;

        $output_str = "";


        foreach($input_array as $item) {
            strlen($output_str) > 0 && strlen($item) > 0 ? $output_str .= $separator : ""; 
            $output_str .= $item;
        }

        return $output_str;
    }
}
