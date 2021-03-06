<?php
/**
* Основной файл программы
*
* @author Intervision (https://github.com/intervisionlord)
* Copyright © 2019 Intervision
*/

require_once('./core/core.php');
include_once('header.php');

$get_categories = array(
	'username' => $USERNAME,
	'password' => $PASSWORD,
	'project_id' => $PROJECT_ID,
);

$get_user_accessible = array (
	'username' => $USERNAME,
	'password' => $PASSWORD,
);

$mantis = new soapclient($WSDL_POINT);
$categories = $mantis->mc_project_get_categories($USERNAME, $PASSWORD, $PROJECT_ID); // Получаем доступные в проекте категории инцидента
$projectlist = $mantis->mc_projects_get_user_accessible($USERNAME, $PASSWORD); // Получаем список проектов, в которые можно репортить (права от указанного пользователя)

echo '
<div class="container-sm border shadow p-4 bgcustom">
<h3>'. FILLTHEFORM .'</h3>
<hr>
	<form id="bugreport" method="POST" action="report.php">
		<div class="row p-2">
			<div class="col">
				<label for="FormControlSelect1"><span class="text-danger">* </span><b>'.LANG_SELECT_PROJECT.'</b></label>
				<select class="form-control" id="FormControlSelect1" name="SelectProject">
';

foreach ($projectlist as $project) {
	echo '<option value="'.$project->id.'">'.$project->name.'</option>';
}

echo '
				</select>
			</div>
			<div class="col">
				<label for="FormControlSelect2"><span class="text-danger">* </span><b>'.LANG_SELECT_CATEGORY.'</b></label>
				<select class="form-control" id="FormControlSelect2" name="SelectCategory">
';
foreach ($categories as $category) {
	echo '<option value="'.$category.'">'.$category.'</option>';
}

echo '
				</select>
			</div>
		</div>

		<div class="row p-2">
			<div class="col">
				<label><span class="text-danger">* </span><b>'.LANG_FORM_TITLE.'</b></label>
				<input class="form-control" type="text" placeholder="" name="Title">
			</div>
			<div class="col">
				<label><b>e-mail</b><span class="text-muted"> ('.LANG_EMAIL_DESCR.')</span></label>
				<input class="form-control" type="email" placeholder="'.LANG_EMAIL_PLACEHOLDER.'" name="email">
			</div>
		</div>

		<div class="row p-2">
			<div class="col">
    		<label for="FormControlTextarea1"><span class="text-danger">* </span><b>'.LANG_FULLTEXT.'</b></label>
    		<textarea class="form-control" id="FormControlTextarea1" rows="6" name="Description"></textarea>
  		</div>
		</div>
		<div class="row p-2">
			<div class="col mr-auto">
				<span class="text-danger">* </span> - '.LANG_REQURED.'
			</div>
			<div class="col-auto">';

if ($USECAPTCHA == '1') {
	echo '
	<div class="g-recaptcha" data-sitekey="'.$CAPTCHA_SITEKEY.'"></div>

	<script>
		document.getElementById("bugreport").onsubmit = function () {
			if (!grecaptcha.getResponse()) {
				alert("'.LANG_CAPTCHA_REQUIRED.'");
				return false; // возвращаем false и предотвращаем отправку формы
			}
		}
	</script>';
}

echo '
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-success">'.LANG_SUBMITBTN.'</button>
			</div>
		</div>
	</form>
</div>';

include_once('footer.php');

?>
