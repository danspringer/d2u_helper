<div class="row">
	<div class="col-xs-4">
		Breite des Blocks auf Smartphones:
	</div>
	<div class="col-xs-8">
		<select name="REX_INPUT_VALUE[20]" >
		<?php
		$values = array(3=>"3 von 12 Spalten", 4=>"4 von 12 Spalten", 6=>"6 von 12 Spalten", 12=>"12 von 12 Spalten (ganze Breite)");
		foreach($values as $key => $value) {
			echo '<option value="'. $key .'" ';
	
			if ("REX_VALUE[20]" == $key) {
				echo 'selected="selected" ';
			}
			echo '>'. $value .'</option>';
		}
		?>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		Breite des Blocks auf Tablets:
	</div>
	<div class="col-xs-8">
		<select name="REX_INPUT_VALUE[19]" >
		<?php
		$values = array(3=>"3 von 12 Spalten", 4=>"4 von 12 Spalten", 6=>"6 von 12 Spalten", 12=>"12 von 12 Spalten (ganze Breite)");
		foreach($values as $key => $value) {
			echo '<option value="'. $key .'" ';
	
			if ("REX_VALUE[19]" == $key) {
				echo 'selected="selected" ';
			}
			echo '>'. $value .'</option>';
		}
		?>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-xs-4">
		Breite des Blocks auf größeren Geräten:
	</div>
	<div class="col-xs-8">
		<select name="REX_INPUT_VALUE[18]" >
		<?php
		$values = array(3=>"3 von 12 Spalten", 4=>"4 von 12 Spalten", 6=>"6 von 12 Spalten", 12=>"12 von 12 Spalten (ganze Breite)");
		foreach($values as $key => $value) {
			echo '<option value="'. $key .'" ';
	
			if ("REX_VALUE[18]" == $key) {
				echo 'selected="selected" ';
			}
			echo '>'. $value .'</option>';
		}
		?>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">&nbsp;</div>
</div>
<div class="row">
	<div class="col-xs-12">
		Soll Block die gleiche Höhe haben wie andere Box-Blöcke auf dieser Seite?
		<select name="REX_INPUT_VALUE[17]" >
		<?php
		$values = array("true"=>"Ja", "false"=>"Nein");
		foreach($values as $key => $value) {
			echo '<option value="'. $key .'" ';
	
			if ("REX_VALUE[17]" == $key) {
				echo 'selected="selected" ';
			}
			echo '>'. $value .'</option>';
		}
		?>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">&nbsp;</div>
</div>
<div class="row">
	<div class="col-xs-4">
		&Uuml;berschrift:<br />
	</div>
	<div class="col-xs-6">
		<input type="text" size="50" name="REX_INPUT_VALUE[1]" value="REX_VALUE[1]" />
	</div>
	<div class="col-xs-2">
		<select name="REX_INPUT_VALUE[2]" >
		<?php
		foreach (array("h1","h2","h3","h4","h5","h6") as $value) {
			echo '<option value="'.$value.'" ';
	
			if ( "REX_VALUE[2]"=="$value" ) {
				echo 'selected="selected" ';
			}
			echo '>'.$value.'</option>';
		}
		?>
		</select>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">&nbsp;</div>
</div>
<div class="row">
	<div class="col-xs-4">
		Bild:
	</div>
	<div class="col-xs-8">
		REX_MEDIA[id="1" type="jpg,png" widget="1"]
	</div>
</div>
<div class="row">
	<div class="col-xs-12">&nbsp;</div>
</div>
<div class="row">
	<div class="col-xs-4">
		Anzuwendender Media Manager Typ:
	</div>
	<div class="col-xs-8">
		<select name="REX_INPUT_VALUE[3]" >
		<?php
			$sql = rex_sql::factory();
			$result = $sql->setQuery('SELECT name FROM ' . rex::getTablePrefix() . 'media_manager_type ORDER BY status, name');
			for($i = 0; $i < $result->getRows(); $i++) {
				$name = $result->getValue("name");
				echo '<option value="'. $name .'" ';
	
				if ("REX_VALUE[3]" == $name) {
					echo 'selected="selected" ';
				}
				echo '>'. $name .'</option>';
				$result->next();
			}
		?>
		</select>
	</div>
</div>