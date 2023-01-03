
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Height=$_POST['height'];
	$HeightUnit=$_POST['heightUnit'];
	$Weight=$_POST['weight'];
	$WeightUnit=$_POST['weightUnit'];
	if($Height == '' || $Weight == '' || $HeightUnit == '' || $WeightUnit == ''){
		$Error = "The input values are required.";
	}
	elseif (filter_var($Height, FILTER_VALIDATE_FLOAT) === false || filter_var($Weight, FILTER_VALIDATE_FLOAT) === false) {
		$Error = "The input value must be a number only.";
	}
	else{
		/*Calculation begins from here.*/
		/*Convert cm to inch -> foot to inch -> meter to inch */
		$HInches = ($HeightUnit=='centimeter')?$Height*0.393701:(($HeightUnit=='foot')?$Height*12:(($HeightUnit=='meter')?$Height*39.3700787:$Height));
		/*Convert kg to pound*/
		$WPound = ($WeightUnit=='kilogram')?$Weight*2.2:$Weight;
		$BMIIndex = round($WPound/($HInches*$HInches)* 703,2);

		/*Set Message*/
		if ($BMIIndex < 18.5) {
			$Message="Underweight";
		} else if ($BMIIndex <= 24.9) {
			$Message="Normal";
		} else if ($BMIIndex <= 29.9) {
			$Message="Overweight";
		} else {
			$Message="Obese";
		}
	}
} ?>

<body>

	<div class="container" style="max-width:800px">
		<div class="text-center mb-5">
			<h1 class="fw-bolder mb-0">PHP BMI Calculator</h1>
		</div>
		<form method="post" action="">
			<div class="row justify-content-center" >
				<div class="col">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 justify-content-center">
						<div class="col text-center mb-3 mb-md-5">
							<label for="height" class="fs-3">Height</label>
							<div class="input-group">
								<input id="height" class="form-control form-control-custom w-50" name="height" type="number" step="any" value="<?php if(!empty($Height)){echo $Height;}?>">
								<select class="form-select w-50" name="heightUnit">
									<option value="centimeter" <?php if(isset($HeightUnit) && $HeightUnit=='centimeter'){echo "selected";}?>>Centimeter</option>
									<option value="inch" <?php if(isset($HeightUnit) && $HeightUnit=='inch'){echo "selected";}?>>Inch</option>
									<option value="foot" <?php if(isset($HeightUnit) && $HeightUnit=='foot' || !isset($HeightUnit)){echo "selected";}?>>Foot</option>
									<option value="meter" <?php if(isset($HeightUnit) && $HeightUnit=='meter'){echo "selected";}?>>Meter</option>
								</select>
							</div>
						</div>
						<div class="col text-center mb-3 mb-md-4">
							<label for="weight" class="fs-3">Weight</label>
							<div class="input-group">
								<input id="weight" class="form-control form-control-custom w-50" name="weight" type="number" step="any" value="<?php if(!empty($Weight)){echo $Weight;}?>">
								<select class="form-select w-50" name="weightUnit">
									<option value="kilogram" <?php if(isset($WeightUnit) && $WeightUnit=='kilogram'){echo "selected";}?>>Kilogram</option>
									<option value="pound" <?php if(isset($WeightUnit) && $WeightUnit=='pound'){echo "selected";}?>>Pound</option>
								</select>
							</div>
						</div>
						<div class="col text-center mb-3 mb-md-4"><input type="submit" name="submit" value="Calculate" class="btn btn-success"></div>
					</div>
				</div>
			</div>
		</form>
		<?php if(isset($BMIIndex) && is_numeric($BMIIndex)){?><!-- Result -->
		<div class="row justify-content-center">
			<div class="col text-center">
				<label for="Result" class="fs-4">Result</label>
				<input id="Result" name="Result" class="form-control form-control-custom" value="<?php echo $BMIIndex.' '.$Message; ?>">
			</div>
		</div>
		<?php } if(isset($Error)){?><!-- Error Messages -->
		<div class="row justify-content-center">
			<div class="col">
				<div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
			</div>
		</div>
	<?php } ?>
</div>
</body>
</html>