# ArrayManager-PHP

It makes easy to use array functions in PHP.<br>
Each function has been created with one parameter as an object. Inside funcitons are comments with keys of object that can be used for declaring input values.

<h2><b>How to use</b></h2>

Include file:

```
require_once('arraymanager.php');
```

Create object:
```
$array_manager = new ArrayManager();
```

Use:
```
$is_exist_one = $array_manager->is_exist_in_array((object)array(
  'value_to_check' => 'one', 
  'input_array' => array('one', 'two','ten')));
```
