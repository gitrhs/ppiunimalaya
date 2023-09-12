<!doctype html>
<html lang="id">

<head>
	<?php
	//header
	include 'core/header.html';
	?>
	<link rel="stylesheet" href="css/struktur-organisasi.css?3">
</head>

<body>
	<?php
	//navbar / menu
	include 'core/navbar.html';
	?>
	<div class="pageone">
		<div class="container-fluid text-center page-title-div" style="height: 200px; justify-content: center; align-items: center; display: flex;">
			<p class="page-title neue" style="font-size: 5em;">Struktur Organisasi</p>
		</div>
		<!-- group photo -->
		<div class="d-flex justify-content-center">
			<div class="SO-container">
				<div class="SO-slide-container">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/BPHH.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/KEWIRUS.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/INTELEK.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/DPO.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/ADVOK.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/SOSMAS.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/SEGAYA.png">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/MEDKOM.png">
				</div>
			</div>

			<!-- <img src="https://xn--ep5a.xyz/all.jpeg" style="width: 75%; max-height: 75vh; object-fit: cover;"> -->
		</div>
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
	<br>
	<div class="container-fluid" style="color: black;">
		<p class="kepengurusan-ppium text-center"><b>Divisi</b></p>
		<div class="d-flex flex-wrap justify-content-center divisi-button">
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="BPH" value="BPH">
				<label class="btn btn-outline-dark" for="BPH">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/BPHH.png">BPH
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Advokasi" value="Advokasi">
				<label class="btn btn-outline-dark btn-sosmed btn-filter " for="Advokasi">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/ADVOK.png">ADVOKASI
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="DPO" value="DPO">
				<label class="btn btn-outline-dark btn-sosmed btn-filter" for="DPO">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/DPO.png">DPO
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Intelek" value="Intelek">
				<label class="btn btn-outline-dark btn-sosmed btn-filter " for="Intelek">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/INTELEK.png">Intelek
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="SosMas" value="SosMas">
				<label class="btn btn-outline-dark btn-sosmed btn-filter " for="SosMas">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/SOSMAS.png">SosMas
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Media" value="Media">
				<label class="btn btn-outline-dark btn-sosmed btn-filter " for="Media">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/MEDKOM.png">Media
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Wirus" value="Wirus">
				<label class="btn btn-outline-dark btn-sosmed btn-filter " for="Wirus">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/KEWIRUS.png">Wirus
				</label>
			</div>
			<div class="p-2">
				<input type="radio" class="btn-check" name="divisi" onclick="updatePage()" id="Olahraga" value="Olahraga">
				<label class="btn btn-outline-dark btn-sosmed btn-filter" for="Olahraga">
					<img src="https://ppiunimalaya.id/wp-content/uploads/2023/09/SEGAYA.png">Olahraga
				</label>
			</div>
		</div>
		<!--Div for division -->
		<!-- BPH -->
		<div class="d-flex justify-content-center my-lg-5">
			<div id="division-container" class="w-75"></div>
		</div>
	</div>
	<!-- JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js" integrity="sha512-FRX6MYITclzDyyMmSQLgZoZTfE+GLzAQpjs15adVZMY6AqhsrBLx8UZwp4FoqrrRFWY9TiaPwja7EY5fk309vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
	<!-- JS end -->
	<!-- Page JS -->
	<script>
		var copy = document.querySelector(".SO-slide-container").cloneNode(true);
		document.querySelector(".SO-container").appendChild(copy);
		//load division container
		function loadContent(url) {
			const xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					document.getElementById('division-container').innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", url, true);
			xhttp.send();
		}

		function updatePage() {
			var selectedValue = document.querySelector('input[name="divisi"]:checked').value;

			// Load the content based on the selected divisi value
			loadContent("divisi/" + selectedValue + ".html");
		}
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

		$(document).ready(function() {
			$('.count').viewportChecker({
				classToAdd: 'visible',
				offset: 100,
				repeat: false,
				callbackFunction: function(elem, action) {
					const countElements = document.querySelectorAll(".count");
					countElements.forEach((element) => {
						const targetValue = parseInt(element.getAttribute("value"));
						startCountAnimation(element, targetValue);
					});
				}
			});
		});
	</script>
	<script>
		function toggleText(event) {
			var container = $(event.currentTarget);
			container.toggleClass('show-text');
		}
	</script>
	<script>
		$(document).ready(function() {
			// Initialize the carousel
			$('#carouselMember').carousel();

			// Previous button click event
			$('#prevButton').on('click', function() {
				$('#carouselMember').carousel('prev');
			});

			// Next button click event
			$('#nextButton').on('click', function() {
				$('#carouselMember').carousel('next');
			});
		});
	</script>
</body>
<?php
//footer
include 'core/footer.html';
?>

</html>