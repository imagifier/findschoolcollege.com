<?php
if(isset($_POST["state"])){
    $state = $_POST["state"];
    $stateArr = array(
                    "Bihar" => array("Araria",
					                  "Arwal",
									  "Aurangabad"),
                   "Assam" => array("a1", "a2", "a3"),);
    if($state !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
        foreach($stateArr[$state] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>