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

            return false;
        }
    }
}