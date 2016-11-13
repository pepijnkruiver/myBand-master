<div class="tour">
    <div class="tour2">
        <div class="tour3">
            <div class="tour4">
                <h1>Tour</h1>
                <div class="tour5">
<?php
echo '<section>';

//fetch_assoc should not be in the view!
foreach($result as $row=>$oneItem){
	
	echo '<article>';
	echo '<h2>'.$oneItem['Name'].'</h2>';
	echo '<content>'.$oneItem['Place'].'</content>';
    echo " ";
    echo '<content>'.$oneItem['Date'].'</content>';
	echo '</article>';
    echo '<div class="hr"><hr><div>';
}


echo '</section>';
?>
                </div>
                </div>
        </div>
    </div>
</div>