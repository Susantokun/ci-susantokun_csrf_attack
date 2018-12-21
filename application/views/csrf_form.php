<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>CSRF Attack Test | Susantokun</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.css">

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<style media="screen">
	.ui.center.header{
		padding-top: 50px;
	}
</style>

<body>
	<h1 class="ui center aligned header">Cross-Site Request Forgery (CSRF) Attack Test | Susantokun</h1>

	<div class="ui container">
		<div class="ui two column grid">
			<div class="column">
				<div class="ui attached message">
					<h4>Input Data CSRF Attack</h4>
				</div>
				<form class="ui form attached fluid segment" action="http://localhost/ci_csrf/index.php/csrf/create" method="post">
					<div class="field">
						<label>Name</label>
						<input type="text" name="name" placeholder="Name">
					</div>
					<div class="ui field">
						<label>Description</label>
						<input type="text" name="description" placeholder="Description">
					</div>
					<button class="ui button primary" type="submit">Submit</button>
					<div class="ui error message"></div>
				</form>
			</div>
			<div class="column">
				<div class="ui attached message">
					<h4>Keterangan</h4>
				</div>
				<div class="ui attached fluid segment">

					<ol class="ui list">
						<li>Unduh dan cara penggunaan <a href="https://github.com/Susantokun/ci_csrf" target="_blank">ci_csrf</a></li>
						<li>Unduh dan cara penggunaan <a href="https://github.com/Susantokun/ci_csrf_attack" target="_blank">ci_csrf_attack</a></li>
						<li>Demo cek di Youtube Channel Susantokun</li>
						<li>Informasi Susantokun :
							<ol>
								<li><a href="http://bit.ly/susantokun" target="_blank">Susantokun</a></li>
								<li><a href="http://bit.ly/susantokun_paypal" target="_blank">Paypal</a></li>
								<li><a href="http://bit.ly/susantokun_github" target="_blank">Github</a></li>
								<li><a href="http://bit.ly/susantokun_twitter" target="_blank">Twitter</a></li>
								<li><a href="http://bit.ly/susantokun_steam" target="_blank">Steam</a></li>
								<li><a href="http://bit.ly/susantokun_google" target="_blank">Google+</a></li>
								<li><a href="http://bit.ly/susantokun_facebook" target="_blank">Facebook</a></li>
								<li><a href="http://bit.ly/susantokun_instagram" target="_blank">Instagram</a></li>
								<li><a href="http://bit.ly/susantokun_youtube" target="_blank">Youtube</a></li>
								<li><a href="http://bit.ly/susantokun_youtube_gaming" target="_blank">Youtube Gaming</a></li>
							</ol>
						</li>
					</ol>

				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript">
		$('.ui.form')
			.form({
				fields: {
					name: 'empty',
					description: 'empty'
				}
			});
	</script>
</body>
</html>
