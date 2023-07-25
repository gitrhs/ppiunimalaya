<!doctype html>
<html lang="id">
	<head>
	<?php 
	//header
	include 'core/header.html';
	?>
	<link rel="stylesheet" href="css/struktur-organisasi.css?">
	</head>
	<body>
		<?php
		//navbar / menu
		include 'core/navbar.html';
		?>
		<div class="pageone">
			<div class="container-fluid text-center page-title-div">
				<br><br>
				<p class="page-title"><b>Struktur Organisasi</b></p>
				<br>
			</div>
			<!-- group photo -->
			<img src="https://xn--ep5a.xyz/all.jpeg" style="width: 100%; max-height: 93vh; object-fit: cover;">
			<!-- -->
			<!-- Title section -->
			<div class="container-fluid text-center">
				<br>
				<p class="kepengurusan-ppium"><b>Kepengurusan PPI-UM 2023</b></p>
				<div class="d-flex justify-content-center" style="margin-top: -20px;">
					<div class="p-4">
						<p class="count" value="34">0</p>
						<h5>Pengurus</h5>
					</div>
					<div class="p-4">
						<p class="count" value="9">0</p>
						<h5>Divisi</h5>
					</div>
					<div class="p-4">
						<p class="count" value="4">0</p>
						<h5>Penasehat</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- Division Section -->
		<div class="container-fluid" style="color: white;">
			<p class="kepengurusan-ppium text-center"><b>Divisi</b></p>
			<div class="d-flex flex-wrap justify-content-center">
			  <div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="instagram" value="instagram">
				<label class="btn btn-outline-light btn-sosmed btn-filter " for="instagram">
				  BPH
				</label>
			  </div>
			  <div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Advokasi" value="Advokasi">
				<label class="btn btn-outline-light btn-sosmed btn-filter " for="Advokasi">
				  Advokasi
				</label>
			  </div>
			  <div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="DPO" value="DPO">
				<label class="btn btn-outline-light btn-sosmed btn-filter" for="DPO">
				  DPO
				</label>
			  </div>
			  <div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Intelek" value="Intelek">
				<label class="btn btn-outline-light btn-sosmed btn-filter " for="Intelek">
				  Intelek
				</label>
			  </div>
			  <div class="p-2">
				  <input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="SosMas" value="SosMas">
				  <label class="btn btn-outline-light btn-sosmed btn-filter " for="SosMas">
					SosMas
				  </label>
			  </div>
			  <div class="p-2">
					<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Media" value="Media">
					<label class="btn btn-outline-light btn-sosmed btn-filter " for="Media">
					  Media
					</label>
			  </div>
			  <div class="p-2">
					<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Wirus" value="Wirus">
					<label class="btn btn-outline-light btn-sosmed btn-filter " for="Wirus">
					  Wirus
					</label>
			  </div>
			  <div class="p-2">
					<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Olahraga" value="Olahraga">
					<label class="btn btn-outline-light btn-sosmed btn-filter " for="Olahraga">
					  Olahraga
					</label>
			  </div>
			</div>
		</div>
		<!-- Page JS -->
		<script>
			//counting from 0 to value
			  function startCountAnimation(element, targetValue) {
				  const duration = 2000; // 2 seconds
				  const frameDuration = 1000 / 60;
				  const totalFrames = Math.round(duration / frameDuration);
				  let frame = 0;
			  
				  const increment = targetValue / totalFrames;
			  
				  const animation = setInterval(() => {
					frame++;
					const currentCount = increment * frame;
					element.textContent = Math.round(currentCount);
			  
					if (frame === totalFrames) {
					  clearInterval(animation);
					  element.textContent = targetValue;
					}
				  }, frameDuration);
				}
			  
				const countElements = document.querySelectorAll(".count");
				countElements.forEach((element) => {
				  const targetValue = parseInt(element.getAttribute("value"));
				  startCountAnimation(element, targetValue);
				});
		</script>
		
		<!-- JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<!-- JS end -->
	</body>
	<?php
		//footer
		include 'core/footer.html';
	?>
</html>